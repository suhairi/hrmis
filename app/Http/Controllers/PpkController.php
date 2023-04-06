<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Arr;

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
                    ->addColumn('address', function($ppk) {
                        return $ppk->address . ' <br /> ' . $ppk->address2 . '<br />' . $ppk->address3 . '<br />' . $ppk->address4;
                    })
                    ->addColumn('telephone', function($ppk) {
                        return $ppk->phone;
                    })
                    
                    ->rawColumns(['name', 'address', 'telephone'])
                    ->make(true);
        }
        
        return view('ppk.index');
    }

    public function directory() {

        $ppks = Ppk::where('wilayah_id', substr(Auth::user()->location, -1))->get();

        return view('directory.index', compact('ppks'));
    }


}
