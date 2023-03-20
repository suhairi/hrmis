<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

use App\Models\User;
use App\Models\Employee;
use App\Models\Education;
use App\Models\Position;
use App\Models\Ppk;

use Notification; 
use App\Notifications\EmailNotification;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

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

        $gender = ['LELAKI' => 0, 'PEREMPUAN' => 0];
        $employment_status = Employee::distinct()->get('employment_status');
        $employments = [];
        $ppk = 'HQ';

        // Employee count for current user
        if(Auth::user()->location == 'PPK') {
            $employees = Employee::where('ppk_id', Auth::user()->ppk_id)->get();
            $ppk = Auth::user()->ppk->code . ' - ' . Auth::user()->ppk->name;

            $gender = $employees->countBy(function ($item) {
                return $item['gender'];
            });

            $employments = $employees->countBy(function ($item) {
                return $item['employment_status'];
            });
            $employments = $employments->toArray();

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

                $gender = $employees->countBy(function ($item) {
                    return $item['gender'];
                });

                $employments = $employees->countBy(function ($item) {
                    return $item['employment_status'];
                });
                $employments = $employments->toArray();

            } else {
                $employees = Employee::all();

                $gender = $employees->countBy(function ($item) {
                    return $item['gender'];
                });

                $employments = $employees->countBy(function ($item) {
                    return $item['employment_status'];
                });
                $employments = $employments->toArray();
            }
        }

        return view('home', compact('employees', 'ppk', 'gender', 'employments', 'employment_status'));
    }

    public function send() {

        $user = User::first();

        $project = [
            'greeting' => 'Hi '.$user->name.',',
            'body' => 'This is the project assigned to you.',
            'thanks' => 'Thank you, this is from hrmisppk.mada.gov.my',
            'actionText' => 'View Project',
            'actionURL' => url('/'),
            'id' => 57
        ];
  
        Notification::send($user, new EmailNotification($project));
   
        dd('Notification sent!');
    }
}
