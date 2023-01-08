<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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


}
