<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Wilayah;

use DataTables;

class WilayahController extends Controller
{
    public function index(Request $request) {

        if($request->ajax()) {

            $wilayahs = Wilayah::all();

            return Datatables::of($wilayahs)
                    ->addIndexColumn()
                    ->addColumn('name', function($wilayah) {
                        return $wilayah->name;
                    })
                    ->rawColumns(['name'])
                    ->make(true);
        }

        return view('wilayah.index');
    }
    
}
