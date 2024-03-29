<?php

namespace App\Http\Controllers;

use App\Models\Leave;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

use Carbon\Carbon;
use Carbon\CarbonPeriod;

use App\Models\Employee;

class LeaveController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:leave-list|leave-create|leave-edit|leave-delete', ['only' => ['index','store']]);
         $this->middleware('permission:leave-create', ['only' => ['create','store']]);
         $this->middleware('permission:leave-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:leave-delete', ['only' => ['destroy']]);
         $this->middleware('permission:leave-show', ['only' => ['show']]);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $todayCount = 0;
        $monthCount = 0;

        $leaves = Leave::wherehas('employee', function($q) { $q->where('ppk_id', Auth::user()->ppk_id); })->get();

        foreach($leaves as $leave) {

            $startDate = Carbon::parse($leave->start_date);
            $endDate = Carbon::parse($leave->end_date);
            $today = Carbon::parse(Carbon::now())->startOfDay(); // to set the time to 00:00:00

            // Count number of leaves for today
            if($startDate == $endDate) {
                if($startDate->isCurrentDay())
                    $todayCount++;
            } else if($today->between($startDate, $endDate))
                $todayCount++;

            // Count number of leaves for current month
            if($startDate->isCurrentMonth())
                $monthCount++;
            else if($endDate->isCurrentMonth())
                $monthCount++;

            // Count number of leaves for the current year
        }

        // dd($todayCount);

        // return ($check) ? 'Yes, in the range date.' : 'Nope, not in the range date.';

        return view('leaves.index', compact('leaves', 'todayCount', 'monthCount'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('leaves.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validation
        // Date format m/d/Y
        $this->validate($request, [
            'name'          => 'required',
            'start_date'    => 'required|date|before_or_equal:end_date',
            'end_date'      => 'required|date|after_or_equal:start_date',
            'type'          => 'required',
        ]);

        $start_date = Carbon::parse($request['start_date']);
        $end_date = Carbon::parse($request['end_date']);

        // 1 - check for duplicate employee leave
        // 2 - exclude weekends - DONE
        // 3 - for type='pregnancy leave' check the gender for female
        // 3 - for type='paternity leave' check the gender for male

        // #1
        // { code here - check duplicate }
        // #1 - Carbon::parse($date)->between($startDate, $endDate);
        // #2 - DateRangesOverlap = max(start1, start2) < min(end1, end2);
        //    - validate $date1 <= $date2

        // dd(Carbon::now());

        // $date = Carbon::parse('3/17/2022');

        // #2
        // $date2 = Carbon::parse('3/16/2023');
        // $isDateOverlap = max($date, Carbon::parse($request['start_date'])) <= min($date2, Carbon::parse($request['end_date']));

        $leaves = Leave::where('employee_id', $request['employee_id'])->get();
        // dd($leaves);

        foreach($leaves as $leave) {

            $isDateOverlap = max($leave->start_date, Carbon::parse($start_date)) <= min($leave->end_date, Carbon::parse($request['end_date']));

            if($isDateOverlap) {

                return back()->withInput()->withErrors('Date is overlap with previous ' . $leave->type . ' date. ('. $leave->start_date->format('d/m/Y') .' - ' . $leave->end_date->format('d/m/Y') .')');
            }

        }


        // #2 - Exclude Weekends from duration
        //    - If same date automatic duration = 1 day
        //    - check if same day, isweekend(), if true return with error message

        if($start_date->eq($request['end_date'])) {

            // check if that date is on weekend for Kedah
            if($start_date->isWeekend()) {
                return redirect()->back()
                        ->withInput($request->except(['start_date', 'end_date']))
                        ->withErrors(['msg' => 'Tarikh yang dipilih adalah hari minggu.']);
            }

            $request['duration'] = 1;
        
        } else {

            if(Str::of(Auth::user()->ppk->code)->contains('1')) {

                $saturdays  = CarbonPeriod::create($start_date, $end_date)
                              ->filter(static fn ($date) => $date->is('Saturday'))
                              ->count();
                $sundays    = CarbonPeriod::create($start_date, $end_date)
                              ->filter(static fn ($date) => $date->is('Sunday'))
                              ->count();
                
                $weekends = $saturdays + $sundays;

                $duration = $start_date->diffInDays($end_date) + 1 - $weekends;

                // return $end_date;
                // return $duration;
                $request['duration'] = $duration;

            } else {

                // For Kedah
                $duration = Carbon::parse($start_date)->diffInDaysFiltered(function(Carbon $date) {
                    return !$date->isWeekend();
                }, Carbon::parse($request['end_date'])->addDay());

                $request['duration'] = $duration;
            }
        }
        

        // #3
        $gender = Employee::select('gender')->where('id', $request['employee_id'])->first();

        if($request['type'] == 'Paternity Leave') {

            if($gender->gender == 'PEREMPUAN' || $gender->gender == 'P')
                return back()->withInput()
                            ->withErrors('Perempuan tidak layak memohon Paternity Leave');
        }

        if($request['type'] == 'Pregnancy Leave') {

            if($gender->gender == 'LELAKI' || $gender->gender == 'L')
                return back()->withInput()
                            ->withErrors('Lelaki tidak layak memohon Pregnancy Leave');
        }

        // ** Check if start date is on weekend first
        if($request['duration'] == 1) {
            if(Str::of(Auth::user()->ppk->code)->contains('1')) {
            
                if($start_date->is('Saturday') || $start_date->is('Sunday'))
                    $request['start_date'] = $request['end_date'];
                else
                    $request['end_date'] = $request['start_date'];
            
            } else {

                if($start_date->isWeekend())
                    $request['start_date'] = $request['end_date'];
                else
                    $request['end_date'] = $request['start_date'];

            }
        }

        $leave = Leave::create($request->all());
        
        return redirect()->route('leaves.index')->with('success', 'Rekod telah berjaya disimpan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Leave  $leave
     * @return \Illuminate\Http\Response
     */
    public function show(Leave $leave)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Leave  $leave
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $leave = Leave::findOrFail($id);

        return view('leaves.edit', compact('leave'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Leave  $leave
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name'          => 'required',
            'start_date'    => 'required|date|before_or_equal:end_date',
            'end_date'      => 'required|date|after_or_equal:start_date',
            'type'          => 'required',
        ]);

        $start_date = Carbon::parse($request['start_date']);
        $end_date = Carbon::parse($request['end_date']);

        // ###########################################
        // Check dates if overlap with previous record
        // ###########################################

        $leaves = Leave::where('employee_id', $request['employee_id'])
                    ->where('id', '!=', $id)
                    ->get();
        // dd($leaves);

        foreach($leaves as $leave) {

            $isDateOverlap = max($leave->start_date, Carbon::parse($start_date)) <= min($leave->end_date, Carbon::parse($request['end_date']));

            if($isDateOverlap) {

                return back()->withInput()->withErrors('Date is overlap with previous ' . $leave->type . ' date. ('. $leave->start_date->format('d/m/Y') .' - ' . $leave->end_date->format('d/m/Y') .')');
            }

        }

        // ###########################################
        // Check if same day or range of date
        // ###########################################
        if($start_date->eq($request['end_date'])) {



            // check if that date is on weekend for Perlis
            if(Str::of(Auth::user()->ppk->code)->contains('1')) {

                $saturdays  = CarbonPeriod::create($start_date, $end_date)
                              ->filter(static fn ($date) => $date->is('Saturday'))
                              ->count();
                $sundays    = CarbonPeriod::create($start_date, $end_date)
                              ->filter(static fn ($date) => $date->is('Sunday'))
                              ->count();
                
                $weekends = $saturdays + $sundays;

                if($weekends > 0) {
                    return redirect()->back()
                            ->withInput($request->except(['start_date', 'end_date']))
                            ->withErrors(['msg' => 'Tarikh yang dipilih adalah hari minggu.']);
                }

            } else {

                // Check weekends for Kedah
                if($start_date->isWeekend()) {

                    return redirect()->back()
                            ->withInput($request->except(['start_date', 'end_date']))
                            ->withErrors(['msg' => 'Tarikh yang dipilih adalah hari minggu.']);
                }                
            }
            

            $request['duration'] = 1;
        
        } else {

            if(Str::of(Auth::user()->ppk->code)->contains('1')) {

                // Checking weekends of Perlis
                $saturdays  = CarbonPeriod::create($start_date, $end_date)
                              ->filter(static fn ($date) => $date->is('Saturday'))
                              ->count();
                $sundays    = CarbonPeriod::create($start_date, $end_date)
                              ->filter(static fn ($date) => $date->is('Sunday'))
                              ->count();
                
                $weekends = $saturdays + $sundays;

                $duration = $start_date->diffInDays($end_date) + 1 - $weekends;

                // return $end_date;
                // return $duration;
                $request['duration'] = $duration;

            } else {

                // Checking weekends for Kedah
                $duration = Carbon::parse($start_date)->diffInDaysFiltered(function(Carbon $date) {
                    return !$date->isWeekend();
                }, Carbon::parse($request['end_date'])->addDay());

                $request['duration'] = $duration;
            }
        }

        // ** Check if start date is on weekend first
        if($request['duration'] == 1) {
            if(Str::of(Auth::user()->ppk->code)->contains('1')) {
            
                if($start_date->is('Saturday') || $start_date->is('Sunday'))
                    $request['start_date'] = $request['end_date'];
                else
                    $request['end_date'] = $request['start_date'];
            
            } else {

                if($start_date->isWeekend())
                    $request['start_date'] = $request['end_date'];
                else
                    $request['end_date'] = $request['start_date'];

            }
        }

        $leave = Leave::findOrFail($id);
        $leave->update($request->all());
        return redirect()->route('leaves.index')->with('success', 'Rekod telah berjaya dikemaskini.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Leave  $leave
     * @return \Illuminate\Http\Response
     */
    public function destroy(Leave $leave, $id)
    {
        Leave::find($id)->delete();
        // dd($id);
        // dd($leave->id);
        // $leave->delete();

        return back();
    }
}
