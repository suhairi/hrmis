<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Employee;

class AuditController extends Controller
{
    public function index() {

        $employees  = \OwenIt\Auditing\Models\Audit::where('auditable_type', 'App\Models\Employee')
                    ->latest()
                    ->get();
        $positions  = \OwenIt\Auditing\Models\Audit::where('auditable_type', 'App\Models\Position')
                    ->latest()
                    ->get();
        $users      = \OwenIt\Auditing\Models\Audit::where('auditable_type', 'App\Models\User')
                    // ->where('url', '!=', 'console')
                    ->latest()
                    ->get();
        $permissions= \OwenIt\Auditing\Models\Audit::where('auditable_type', 'App\Models\Permission')
                    // ->where('url', '!=', 'console')
                    ->latest()
                    ->get();
        

        return view('audits.index', compact('employees', 'users', 'positions', 'permissions'));
    }
}
