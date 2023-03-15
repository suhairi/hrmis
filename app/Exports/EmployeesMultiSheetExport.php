<?php

namespace App\Exports;

use App\Models\Employee;
use App\Models\Ppks;

use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;


class EmployeesMultiSheetExport implements FromQuery, WithTitle, ShouldAutoSize
{
    private $ppkCode;

    public function __construct(String $ppkCode)
    {
        $this->ppkCode = $ppkCode;
    }

    /**
     * @return Builder
     */
    public function query()
    {
       return Employee::query()->with('ppk')
                    ->whereHas('ppk', function($q) {
                        $q->where('code', $this->ppkCode);
                    });
    }

    /**
     * @return string
     */
    public function title(): string
    {
        return $this->ppkCode;
    }




}
