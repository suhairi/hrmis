<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\Ppk;

use App\Exports\EmployeesExport;
use Maatwebsite\Excel\Facades\Excel;

class ExcelController extends Controller
{
    public function employeeList() {

        // return Excel::download(new EmployeesExport, 'employees.xlsx');
        return (new EmployeesExport(2023))->download('employeeList.xlsx');
    }
}
