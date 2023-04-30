<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

use Illuminate\Support\Str;

use App\DataTables\EmployeesDataTable;
use DataTables;

use App\Models\Education;
use App\Models\Position;
use App\Models\Ppk;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class EmployeeController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:employee-list|employee-create|employee-edit|employee-delete', ['only' => ['index','show']]);
         $this->middleware('permission:employee-create', ['only' => ['create','store']]);
         $this->middleware('permission:employee-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:employee-delete', ['only' => ['destroy']]);
         $this->middleware('permission:employee-show', ['only' => ['show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $employee = Employee::first();
        // dd($employee->service_status);

        if ($request->ajax()) {

            // ###########################
            // Filter the employee listing by user access/ppk
            // 
            if(Auth::user()->location == 'PPK') {
                $employees = Employee::where('ppk_id', Auth::user()->ppk_id)
                                ->withTrashed()
                                ->get();
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
                                    ->withTrashed()
                                    ->get();
                } else {
                    $employees = Employee::withTrashed()->get();
                }
            }

            return Datatables::of($employees)
                    ->addIndexColumn()
                    ->addColumn('name', function($employee) {

                        $name = '';
                        
                        
                        if($employee->deleted_at != NULL)
                            $name = $employee->name . ' <small><sup>*</sup><font color=red><sup>deleted</sup></font></small>' . '    ';
                        else
                            $name = $employee->name;

                        if($employee->employment_status == 'BEKERJA')
                            $name .= "<br /><span class='badge bg-green-600 text-white rounded-pill' style='font-size: 8px;'>Active</span><br />";
                        else
                            $name .= "<br /><span class='badge bg-red-500 text-white rounded-pill' style='font-size: 8px;'>Inative</span><br />";

                        
                        
                        return $name;
                    })
                    ->addColumn('nokp', function($employee) {
                        return $employee->nokp;
                    })
                    ->addColumn('gender', function($employee) {
                        return $employee->gender;
                    })
                    ->addColumn('ppk', function($employee) {

                        $ppk = $employee->ppk->code . ' - ' . $employee->ppk->name . '<br />' .
                               $employee->position->name . '<br />' .
                               $employee->employment_status . '<br />'.
                               $employee->service_status . '<br />';

                        return $ppk;
                    })
                    ->addColumn('start_date', function($employee) {

                        $start_date = Carbon::parse($employee->start_date)->format('d-m-Y') . '<br />' . Carbon::parse($employee->start_date)->age . ' years of service. <br />' . 
                            $employee->education->name;
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
        $educations = Education::all();
        $positions  = Position::all();

        // Populate PPKs by user access
        if(Auth::user()->location == 'PPK') {
                $ppks = Ppk::where('id', Auth::user()->ppk_id)->get();
            } else {

                // Administration Access has 2 levels
                // 1 - HQ
                // 2 - Wilayah
                if(Str::contains(Auth::user()->location, 'WILAYAH')) {

                    $wilayah = str_replace('WILAYAH ', '', Auth::user()->location);
                    $ppks = Ppk::where('wilayah_id', $wilayah)->get();

                } else {
                    $ppks = Ppk::all();
                }
            }
        

        $temp = [];
        foreach($ppks as $ppk) {
            $name = $ppk->code . ' - ' . $ppk->name;
            $temp[$ppk->id] = $name;
        }

        $ppks = $temp;

        return view('employees.create', compact('educations', 'positions', 'ppks'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());

        $request['name'] = strtoupper($request['name']);

        // dd($request->all());

        $this->validate($request, [
            'name'              => 'required|min:3',
            'nokp'              => 'required|min:12|max:12',
            'gender'            => 'required',
            'position_id'       => 'required|numeric',
            'start_date'        => 'required',
            'service_status'    => 'required',
            'basic_salary'      => 'required',
            'kwsp_no'           => 'required',
            'education_id'      => 'required|numeric',
        ]);

        // Nokp format : add - to $request['nokp']
        $nokp_1 = substr($request['nokp'], 0, 6);
        $nokp_2 = substr($request['nokp'], 6, 2);
        $nokp_3 = substr($request['nokp'], 8, 4);
        $request['nokp'] = $nokp_1 . '-' . $nokp_2 . '-' . $nokp_3;

        $request['employment_status'] = 'BEKERJA';
        $request['edu_major'] = strtoupper($request['edu_major']);
        $request['ppk_id'] = Auth::user()->ppk_id;

        $employee = Employee::create($request->all());

        return redirect()->route('employees.index')
                        ->with('success','Rekod ' . $employee->name . ' telah dicipta.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        // validate access, employee from $user->ppk_id
        // Should use laravel pennant package!!!

        if(Auth::user()->ppk_id != $employee->ppk_id)
            abort(403);


        return view('employees.show', compact('employee'));
    }

    public function showCuti(Employee $employee)
    {
        // validate access, employee from $user->ppk_id
        // Should use laravel pennant package!!!

        if(Auth::user()->ppk_id != $employee->ppk_id)
            abort(403);


        return view('employees.showCuti', compact('employee'));
    }

    public function showGaji(Employee $employee)
    {
        // validate access, employee from $user->ppk_id
        // Should use laravel pennant package!!!

        if(Auth::user()->ppk_id != $employee->ppk_id)
            abort(403);


        return view('employees.showGaji', compact('employee'));
    }

    public function showAset(Employee $employee)
    {
        // validate access, employee from $user->ppk_id
        // Should use laravel pennant package!!!

        if(Auth::user()->ppk_id != $employee->ppk_id)
            abort(403);


        return view('employees.showAset', compact('employee'));
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employee = Employee::find($id);

        $educations = Education::pluck('name', 'id');
        $positions  = Position::pluck('name', 'id');
        $ppks       = Ppk::all();

        $temp = [];
        foreach($ppks as $ppk) {
            $name = $ppk->code . ' - ' . $ppk->name;
            $temp[$ppk->id] = $name;
        }

        $ppks = $temp;

        return view('employees.edit', compact('employee', 'educations', 'positions', 'ppks'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $this->validate($request, [
            'name'              => 'required|min:3',
            'nokp'              => 'required|min:12|max:12',
            'gender'            => 'required',
            'position_id'       => 'required|numeric',
            'start_date'        => 'required',
            'service_status'    => 'required',
            'basic_salary'      => 'required',
            'kwsp_no'           => 'required',
            'education_id'      => 'required|numeric',
        ]);


        $employee = Employee::find($id);

        // ######################################
        // Check if different in ppk_id
        // create a transaction in table transfer
        // ######################################
        // if($request->ppk_id != $employee->ppk_id) {

        //     $transfer_from = Ppk::find($employee->ppk_id);
        //     $transfer_to = Ppk::find($request->ppk_id);

        //     $transfer = Transfer::create([
        //                 'employee_id'       => $employee->id,
        //                 'date_of_transfer'  => Carbon::today(),
        //                 'transfer_from'     => $transfer_from->code . ' - ' . $transfer_from->name,
        //                 'transfer_to'       => $transfer_to->code . ' - ' . $transfer_to->name
        //             ]);
        // }

        $nokp_1 = substr($request['nokp'], 0, 6);
        $nokp_2 = substr($request['nokp'], 6, 2);
        $nokp_3 = substr($request['nokp'], 8, 4);
        $request['nokp'] = $nokp_1 . '-' . $nokp_2 . '-' . $nokp_3;
        
        $employee->update($request->all());

        return redirect()->route('employees.index')
                        ->with('success','Rekod ' . $employee->name . ' telah dikemaskini.');
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

        $educations = Education::pluck('name', 'id');
        $positions  = Position::pluck('name', 'id');
        $ppks       = Ppk::all();

        $temp = [];
        foreach($ppks as $ppk) {
            $name = $ppk->code . ' - ' . $ppk->name;
            $temp[$ppk->id] = $name;
        }

        $ppks = $temp;

        return view('transfer.edit', compact('employee', 'educations', 'positions', 'ppks'));
    }

    public function suggestion(Request $request) {


        $data = Employee::where('name','LIKE',$request->name.'%')
                    ->where('ppk_id', Auth::user()->ppk_id)
                    ->limit(4)
                    ->get();

        $query = $request->get('query');
        $filterResult = Employee::where('name','LIKE',$request->name.'%')
                        ->where('ppk_id', Auth::user()->ppk_id)
                        ->limit(4)
                        ->get();
        return response()->json($filterResult);

    }
}
