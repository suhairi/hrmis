<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

use App\Models\Employee;
use App\Models\Education;
use App\Models\Position;
use App\Models\Ppk;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $ppk = 'HQ';
        // Employee count for current user
        if(Auth::user()->location == 'PPK') {
            $employees = Employee::where('ppk_id', Auth::user()->ppk_id)->get();
            $ppk = Auth::user()->ppk->code . ' - ' . Auth::user()->ppk->name;
        } else {

            // Administration Access has 2 levels
            // 1 - HQ
            // 2 - Wilayah
            if(Str::contains(Auth::user()->location, 'WILAYAH')) {

                $wilayah = str_replace('WILAYAH ', '', Auth::user()->location);
                $ppks = Ppk::where('wilayah_id', $wilayah)->get();
                $ppk = Auth::user()->location;

                $min = $ppks->min('id');
                $max = $ppks->max('id');

                $employees = Employee::where('ppk_id', '<=', $max)
                                ->where('ppk_id', '>=', $min)
                                ->get();
            } else {
                $employees = Employee::withTrashed()->get();
            }
        }

        // return count($employees);

        return view('home', compact('employees', 'ppk'));
    }
}
