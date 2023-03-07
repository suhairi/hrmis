<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use PDF;
use App\Models\Leave;

class PdfController extends Controller
{
    public function leavesList() {

        $leaves = Leave::wherehas('employee', function($q) { $q->where('ppk_id', Auth::user()->ppk_id); })->get();

        $pdf = PDF::loadView('pdf.leaves.index', $leaves->toArray());

        return $pdf->download('Leaves Management.pdf');

    }
}
