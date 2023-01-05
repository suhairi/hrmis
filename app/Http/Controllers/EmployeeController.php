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
        // $employees = Employee::orderBy('name', 'ASC')->paginate(15);
        // return view('employees.index', compact('employees'))->with('i', ($request->input('page', 1) - 1) * 15);

        $employee = Employee::find(1);

        $actions =  "<a class='btn btn-info shadow-md' href='" . route('employees.show', $employee->id) . "'>Show</a>" . 
                    "<a class='btn btn-success shadow-md' href='" . route('employees.edit', $employee->id) . "'>Edit</a>" .
                    "<form method='DELETE action='" . route('employees.destroy', $employee->id) . "' class='style:display:inline'>
                    <button class='btn btn-success shadow-md'>Delete</button></form>";
        // return $actions;


        if ($request->ajax()) {

            $employees = Employee::orderBy('name', 'ASC');


            return Datatables::of($employees)
                    ->addIndexColumn()
                    ->addColumn('name', function($employee) {
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

                        $actions =  "<a class='btn btn-info shadow-md' href='" . route('employees.show', $employee->id) . "'>Show</a>" . 
                                    "<a class='btn btn-success shadow-md' href='" . route('employees.edit', $employee->id) . "'>Edit</a>" .
                                    "<form method='DELETE action='" . route('employees.destroy', $employee->id) . "' style='display:inline'>
                                    <a class='btn btn-danger shadow-md'>Delete</a>
                                    </form>";


                        return $actions;
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
        return abort(404);
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
    public function destroy(Employee $employee)
    {
        //
    }
}
