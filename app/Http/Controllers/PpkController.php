<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\Ppk;

use DataTables;

class PpkController extends Controller
{
    public function index(Request $request) {

        if ($request->ajax()) {

            $ppks = Ppk::all();

            return Datatables::of($ppks)
                    ->addIndexColumn()
                    ->addColumn('name', function($ppk) {
                        return $ppk->code . ' - ' . $ppk->name;
                    })
                    ->rawColumns(['name'])
                    ->make(true);
        }
        
        return view('ppk.index');
    }

    public function directory() {


        $ppks = Ppk::where('wilayah_id', substr(Auth::user()->location, -1))->get();

        return view('directory.index', compact('ppks'));
    }


}
