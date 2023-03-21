<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

use App\Models\Employee;
use App\Models\Ppk;

use Carbon\Carbon;

class SettingsController extends Controller
{
    public function years() {

        // Filter by ppk not all
        

        $employee = collect([]);

        // $employee->put('age', 12);
        // dd($employee);


        if(Auth::user()->location == 'PPK') {

            $employees = Employee::where('employment_status', 'BEKERJA')
                        ->where('ppk_id', Auth()->user()->ppk_id)
                        ->get();
        } else {

            if(Str::contains(Auth::user()->location, 'WILAYAH')) {

                    $wilayah = str_replace('WILAYAH ', '', Auth::user()->location);
                    $ppks = Ppk::where('wilayah_id', $wilayah)->get();

                    $min = $ppks->min('id');
                    $max = $ppks->max('id');

                    $employees = Employee::where('ppk_id', '<=', $max)
                                    ->where('ppk_id', '>=', $min)
                                    ->where('employment_status', 'BEKERJA')
                                    ->withTrashed()
                                    ->get();
                } else {
                    $employees = Employee::where('employment_status', 'BEKERJA')
                                    ->withTrashed()
                                    ->get();
                }
        }

        $employees = $employees->filter(function($employee) {
                if(Carbon::now()->diffInYears($employee->start_date) >= 30) {
                    // calc umur
                    $dobYear = substr($employee->nokp, 0, 2);
                    $dobMonth = substr($employee->nokp, 2, 2);
                    $dobDay = substr($employee->nokp, 4, 2);

                    $dob = Carbon::parse('19' . $dobYear . '-' . $dobMonth . '-' . $dobDay)->format('Y-m-d');
                    $age = Carbon::now()->diffInYears($dob);

                    $employee->age = $age;

                    return $employee;
                }
            });

        return view('settings.years', compact('employees'));

    }

    public function kwsp() {

        $employees = Employee::all();

        // KWSP empty
        $empty = $employees->filter(function ($employee) {
                if($employee->kwsp_no == '')
                    return $employee;
            });
        
        // KWSP No Duplicate
        

        $duplicates = $employees->toBase()->duplicates('kwsp_no');

        $employees = collect([]);

        foreach($duplicates as $key => $value) {

            $employee = Employee::where('kwsp_no', $value)->get();
            $employees->push($employee);
        }

        return view('settings.kwsp', compact('empty', 'employees'));
    }
}
