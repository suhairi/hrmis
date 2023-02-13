<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

use OwenIt\Auditing\Contracts\Auditable;

class Employee extends Model implements Auditable
{
    use HasFactory, SoftDeletes;
    use \OwenIt\Auditing\Auditable;

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
        'deleted_at'
    ];

    protected $dates = ['start_date'];


    public function ppk() {
        return $this->belongsTo(Ppk::class)->withTrashed();
    }

    public function position() {
        return $this->belongsTo(Position::class)->withTrashed();
    }

    public function education() {
        return $this->belongsTo(Education::class)->withTrashed();
    }

}
