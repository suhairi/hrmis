<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ppk extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'code', 'wilayah_id'];

    public $timestamps = false;


    public function wilayahs() {
        return $this->belongsTo(Ppk::class);
    }

    public function employees() {
        return $this->hasMany(Employee::class);
    }
}
