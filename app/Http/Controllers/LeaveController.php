<?php

namespace App\Http\Controllers;

use App\Models\Leave;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

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
        $leaves = Leave::wherehas('employee', function($q) { $q->where('ppk_id', Auth::user()->ppk_id); })->get();

        $startDate  = Carbon::now()->subDays(3);
        $endDate    = Carbon::now()->addDay(2);
        $endDate    = Carbon::now()->subDay(4);

        $check = Carbon::now()->between($startDate,$endDate);

        // return ($check) ? 'Yes, in the range date.' : 'Nope, not in the range date.';

        return view('leaves.index', compact('leaves'));
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

            $isDateOverlap = max($leave->start_date, Carbon::parse($request['start_date'])) <= min($leave->end_date, Carbon::parse($request['end_date']));

            if($isDateOverlap) {

                return back()->withInput()->withErrors('Date is overlap with previous ' . $leave->type . ' date. ('. $leave->start_date->format('d/m/Y') .' - ' . $leave->end_date->format('d/m/Y') .')');
            }

        }




        // #2
        $duration = Carbon::parse($request['start_date'])->diffInDaysFiltered(function(Carbon $date) {
                return !$date->isWeekend();
            }, Carbon::parse($request['end_date'])->addDay());

        $request['duration'] = $duration;

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

        

        

        $leave = Leave::create($request->all());
        
        return redirect()->route('leaves.index');
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
    public function edit(Leave $leave)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Leave  $leave
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Leave $leave)
    {
        //
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
