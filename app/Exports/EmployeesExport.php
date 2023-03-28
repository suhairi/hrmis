<?php

namespace App\Exports;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

use App\Models\Employee;
use App\Models\Ppk;
// use App\Models\Wilayah;

use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;

use App\Exports\EmployeesMultiSheetExport;


class EmployeesExport implements WithMultipleSheets
{
    use Exportable;

    /**
     * @return array
     */
    public function sheets(): array
    {
        $sheets = [];

        // Should filter by user level
        if(Auth::user()->location == 'PPK') {

            $ppks = Ppk::where('id', Auth::user()->ppk->id)->get();

        } else if(Str::contains(Auth::user()->location, 'WILAYAH')) {

            $wilayah = str_replace('WILAYAH ', '', Auth::user()->location);
            $ppks = Ppk::where('wilayah_id', $wilayah)->get();

        } else {
            $ppks = Ppk::all();    
        }        

        foreach($ppks as $ppk) {
            $sheets[] = new EmployeesMultiSheetExport($ppk->code);
        }

        return $sheets;
    }





}
