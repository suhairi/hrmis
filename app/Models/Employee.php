<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 
        'nokp', 
        'gender', 
        'start_date',
        'employment_status',
        'education_id',
        'position_id',
        'basic_salary',
        'allowance',
        'service_status',
        'kwsp_no',
        'location',
        'ppk_id',
        'edu_major',
    ];


    public function ppks() {
        return $this->belongsTo(Employee::class);
    }
}
