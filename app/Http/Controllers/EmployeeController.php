<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

use Carbon\Carbon;

use App\DataTables\EmployeesDataTable;

use DataTables;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {

            // ** Listing the deleted employee to the BACK of the list
            // $employees = Employee::withTrashed()->orderBy('deleted_at', 'asc')->get();

            // ** Listing the deleted employee to the FRONT of the list 
            $employees = Employee::withTrashed()->get();

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
                               $employee->position->name . '<br />' .
                               $employee->service_status;

                        return $ppk;
                    })
                    ->addColumn('start_date', function($employee) {

                        $start_date = Carbon::parse($employee->start_date)->format('d-m-Y') . '<br />' . Carbon::parse($employee->start_date)->diffInYears(Carbon::now()) . ' years';
                        return $start_date;
                    })
                    ->addColumn('actions', function($employee) {
                        return view('partials.employees.index', compact('employee'));
                    })                              
                    ->rawColumns(['name', 'nokp', 'gender', 'ppk', 'start_date', 'actions'])
                    ->make(true);
        }
        
        return view('employees.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employees.create');
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
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employee = Employee::find($id);

        Employee::find($id)->delete();
        return redirect()->route('employees.index')
                        ->with('success','Employee : ' . $employee->name . ' deleted successfully');
    }

    public function transfer($id) {

        $employee = Employee::find($id);

        dd($employee);
    }
}
