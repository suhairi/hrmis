<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leave extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_id',
        'start_date',
        'end_date',
        'type',
        'duration',
    ];

    protected $casts = [
        'start_date' => 'datetime:d-m-Y',
        'end_date' => 'datetime:d-m-Y',
    ];

    public function employee() {

        return $this->belongsTo(Employee::class)->withTrashed();
    }
}
