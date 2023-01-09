<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Employee;

class AuditController extends Controller
{
    public function index() {

        $employees  = \OwenIt\Auditing\Models\Audit::where('auditable_type', 'App\Models\Employee')
                    ->where('user_type', '!=', NULL)
                    ->latest()
                    ->get();
        $positions  = \OwenIt\Auditing\Models\Audit::where('auditable_type', 'App\Models\Position')
                    ->where('user_type', '!=', NULL)
                    ->latest()
                    ->get();
        $users      = \OwenIt\Auditing\Models\Audit::where('auditable_type', 'App\Models\User')
                    ->where('user_type', '!=', NULL)
                    ->latest()
                    ->get();
        $permissions= \OwenIt\Auditing\Models\Audit::where('auditable_type', 'App\Models\Permission')
                    ->where('user_type', '!=', NULL)
                    ->latest()
                    ->get();
        

        return view('audits.index', compact('employees', 'users', 'positions', 'permissions'));
    }
}
