<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Ppk extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['name', 'code', 'wilayah_id'];

    public $timestamps = false;


    public function wilayah() {
        return $this->belongsTo(Wilayah::class)->withTrashed();
    }

    public function employee() {
        return $this->hasOne(Employee::class)->withTrashed();
    }
}
