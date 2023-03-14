<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Exports\EmployeesExport;
use Maatwebsite\Excel\Facades\Excel;

class ExcelController extends Controller
{
    public function employeeList() {

        return Excel::download(new EmployeesExport, 'employees.xlsx');
    }
}
