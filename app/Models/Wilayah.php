<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Wilayah extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['name'];
    
    public $timestamps = false;


    public function ppk() {
        return $this->hasOne(Ppk::class)->withTrashed();
    }
}
