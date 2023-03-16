<?php

namespace App\Exports;

use App\Models\Employee;
use App\Models\Ppk;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;


class EmployeesMultiSheetExport implements FromView, WithTitle, ShouldAutoSize
{
    protected $ppkCode;

    public function __construct(String $ppkCode)
    {
        $this->ppkCode = $ppkCode;
    }

    /**
     * @return Builder
     */
    public function view() : view
    {
        $ppkId = Ppk::where('code', $this->ppkCode)->first();

        $employees = Employee::where('ppk_id', $ppkId->id)->get();

        // dd($employees);
        return view('excel.employees', ['employees' => $employees]);

    }

    /**
     * @return string
     */
    public function title(): string
    {
        return $this->ppkCode;
    }




}
