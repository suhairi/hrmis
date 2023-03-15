<?php

namespace App\Exports;

use App\Models\Employee;
use App\Models\Ppk;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;


class EmployeesExport implements FromView, ShouldAutoSize, WithStyles, Exportables, WithMultipleSheets
{
    use Exportables;

    protected $ppkCode;

    public function __construct(string $ppkCode)
    {
        $this->ppkCode = $ppkCode;
    }

    public function sheets() : array 
    {
        $sheets = [];

        $ppks = Ppk::all();

        foreach($ppks as $ppk) {
            $sheets[] = new EmployeePerPpkShhet($ppk);
        }
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        return view('excel.employees', [
            'employees' => Employee::with('ppk')->get()
        ]);
    }

    // WithCustomStartCell is only supported for FromCollection exports.
    // public function startCell(): string 
    // {
    //     return 'A8';
    // }

    public function styles(Worksheet $sheet) 
    {
        return $sheet = [
            1 => ['font' => ['bold' => true]]
        ];
    }





}
