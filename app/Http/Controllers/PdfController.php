<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Str;

use PDF;
use App\Models\Leave;
use App\Models\Employee;
use App\Models\Ppk;

class PdfController extends Controller
{

    // Employees
    public function employeesList() {

        // $employees = Employee::where('ppk_id', Auth::user()->ppk_id)
        //                         ->withTrashed()
        //                         ->get();


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

        $data = ['employees' => $employees];
        // view()->share('pdf.employees.index', $employees);

        $pdf = PDF::loadView('pdf.employees.index', $data);

        $pdf->setPaper('a4', 'portrait');
        $pdf->output();
        $canvas = $pdf->getDomPDF()->getCanvas();

        $height = $canvas->get_height();
        $width = $canvas->get_width();

        $canvas->set_opacity(.2,"Multiply");
        $canvas->set_opacity(.2);

        $canvas->page_text($width/5, ($height - 100)/2, '', null,
        45, array(0,0,0),2,2,-30);

        return $pdf->stream('Employees List.pdf');
        // return $pdf->download('Employees List.pdf');
    }





    // Leaves
    public function leavesList() {

        $leaves = Leave::wherehas('employee', function($q) { $q->where('ppk_id', Auth::user()->ppk_id); })->get();

        $pdf = PDF::loadView('pdf.leaves.index', $leaves->toArray());

        return $pdf->stream('Leaves Management.pdf');

    }
}
