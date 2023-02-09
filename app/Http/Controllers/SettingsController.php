<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Employee;

class SettingsController extends Controller
{
    public function trimName() {

        $employees = Employee::find(1);

        dd($employees);

        // update employees name in the database
    }
}
