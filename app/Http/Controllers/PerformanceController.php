<?php

namespace App\Http\Controllers;

use App\Models\Performance;
use Illuminate\Http\Request;

use Carbon\Carbon;

use App\DataTables\EmployeesDataTable;
use DataTables;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

use App\Models\Ppk;
use App\Models\Employee;

class PerformanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if(Auth::user()->location == 'PPK') {
            $employees = Employee::where('ppk_id', Auth::user()->ppk_id)->get();
        } else {

            // Administration Access has 2 levels
            // 1 - HQ
            // 2 - Wilayah
            if(Str::contains(Auth::user()->location, 'WILAYAH')) {

                $wilayah = str_replace('WILAYAH ', '', Auth::user()->location);
                $ppks = Ppk::where('wilayah_id', $wilayah)->get();

                $min = $ppks->min('id');
                $max = $ppks->max('id');

                $employees = Employee::where('ppk_id', '<=', $max)
                                ->where('ppk_id', '>=', $min)
                                ->get();
            } else {
                $employees = Employee::withTrashed()->get();
            }
        }

        // dd($employees);

        if ($request->ajax()) {

            // ###########################
            // Filter the employee listing by user access/ppk
            // 
            if(Auth::user()->location == 'PPK') {
                $employees = Employee::where('ppk_id', Auth::user()->ppk_id)->get();
            } else {

                // Administration Access has 2 levels
                // 1 - HQ
                // 2 - Wilayah
                if(Str::contains(Auth::user()->location, 'WILAYAH')) {

                    $wilayah = str_replace('WILAYAH ', '', Auth::user()->location);
                    $ppks = Ppk::where('wilayah_id', $wilayah)->get();

                    $min = $ppks->min('id');
                    $max = $ppks->max('id');

                    $employees = Employee::where('ppk_id', '<=', $max)
                                    ->where('ppk_id', '>=', $min)
                                    ->get();
                } else {
                    $employees = Employee::withTrashed()->get();
                }
            }

            return Datatables::of($employees)
                    ->addIndexColumn()
                    ->addColumn('name', function($employee) {
                        if($employee->deleted_at != NULL)
                            return $employee->name . ' <small><sup>*</sup><font color=red><sup>deleted</sup></font></small>';
                        else
                            return $employee->name;
                    })
                    ->addColumn('nokp', function($employee) {
                        return $employee->nokp;
                    })
                    ->addColumn('gender', function($employee) {
                        return $employee->gender;
                    })
                    ->addColumn('ppk', function($employee) {

                        $ppk = $employee->ppk->wilayah->name . '<br />' .
                               $employee->ppk->code . ' - ' . $employee->ppk->name . '<br />' .
                               $employee->position->name . '<br />';

                        return $ppk;
                    })
                    ->addColumn('start_date', function($employee) {

                        $start_date = Carbon::parse($employee->start_date)->format('d-m-Y') . '<br />' . Carbon::parse($employee->start_date)->age . ' years of service. <br />' . 
                            $employee->service_status;
                        return $start_date;
                    })
                    ->addColumn('actions', function($employee) {
                        return view('partials.performance.index', compact('employee'));
                    })                              
                    ->rawColumns(['name', 'nokp', 'gender', 'ppk', 'start_date', 'actions'])
                    ->make(true);
        }
        
        return view('performance.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Performance  $performance
     * @return \Illuminate\Http\Response
     */
    public function show(Performance $performance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Performance  $performance
     * @return \Illuminate\Http\Response
     */
    public function edit(Performance $performance)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Performance  $performance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Performance $performance)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Performance  $performance
     * @return \Illuminate\Http\Response
     */
    public function destroy(Performance $performance)
    {
        //
    }
}
