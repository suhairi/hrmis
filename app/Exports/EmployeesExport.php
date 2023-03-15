<?php

namespace App\Exports;

use App\Models\Employee;
use App\Models\Ppk;

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

        $ppks = Ppk::all();

        foreach($ppks as $ppk) {
            $sheets[] = new EmployeesMultiSheetExport($ppk->code);
        }

        // for ($month = 1; $month <= 12; $month++) {
        //     $sheets[] = new EmployeesMultiSheetExport($this->year, $month);
        // }

        return $sheets;
    }





}
