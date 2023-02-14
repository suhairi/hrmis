<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Employee;

use Carbon\Carbon;

class SettingsController extends Controller
{
    public function trimmed() {

        $employees = Employee::all();

        // ######### FILTERATION ##############
        $emp = [];
        $count = 0;
        foreach($employees as $employee) {

            // 1 - trim spaces in employee name
            // echo '################## FILTER 1 ###########################';
            if(str_contains($employee->name, '  ')) {
                // echo $employee->name . '<br />';
                $employee->name = trim($employee->name);
                // echo '<strong><font color=green>' . $employee->name . '</font></strong><br /><br />';
                $employee->update();
            }           

            // 2 - Employee name - standardize b to bin and bt or bte to binti
            // echo '################## FILTER 2 ###########################';
            if(strpos($employee->name, ' B ')) {
                // echo $employee->name . '<br/>';
                $employee->name = str_replace('B ', 'BIN ', $employee->name);
                // echo '<strong><font color=green>' . $employee->name . '</font></strong><br /><br />';
            }

            if(strpos($employee->name, ' B. ')) {
                // echo $employee->name . '<br/>';
                $employee->name = str_replace('B. ', 'BIN ', $employee->name);
                // echo '<strong><font color=green>' . $employee->name . '</font></strong><br /><br />';
            }

            if(strpos($employee->name, ' BT ')) {
                // echo $employee->name . '<br/>';
                $employee->name = str_replace('BT ', 'BINTI ', $employee->name);
                // echo '<strong><font color=green>' . $employee->name . '</font></strong><br /><br />';
            }

            if(strpos($employee->name, ' BT. ')) {
                // echo $employee->name . '<br />';
                $employee->name = str_replace('BT. ', 'BINTI ', $employee->name);
                // echo '<strong><font color=green>' . $employee->name . '</font></strong><br /><br />';
            }

            // 3 - display employee with no gender value
            if($employee->gender == 'P') {
                $employee->gender = 'PEREMPUAN';
                $employee->update();

            } else if ($employee->gender == 'L') {
                $employee->gender = 'LELAKI';
                $employee->update();

            } else if ($employee->gender == 'W') {
                $employee->gender = 'PEREMPUAN';
                $employee->update();

            } else {
                array_push($emp);
            }

            if(str_contains($employee->employment_status, ' ')) {
                $employee->employment_status = trim($employee->employment_status);
                $employee->update();
            } 


        }

        // 3 - Employee who worked more than 30 years
        foreach($employees as $employee) {

            $ageOfService = Carbon::parse($employee->start_date)->age;

            if($ageOfService >= 30) {
                echo 'Employee Name : ' . $employee->name . '<br />';
                echo 'Employee Start Date : ' . Carbon::parse($employee->start_date)->format('d-m-Y') . '<br />';
                echo 'Employee Start Date : ' . $employee->employment_status . '<br />';
                echo 'Employee Service Age : ' . $ageOfService . '<br /><br />';
            }
        }



        return redirect()->route('home')->with('success','Employees name has been trimmed successfully.');

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
