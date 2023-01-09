<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

use OwenIt\Auditing\Contracts\Auditable;

class Ppk extends Model implements Auditable
{
    use HasFactory, SoftDeletes;
    use \OwenIt\Auditing\Auditable;

    protected $fillable = ['name', 'code', 'wilayah_id'];

    public $timestamps = false;


    public function wilayah() {
        return $this->belongsTo(Wilayah::class)->withTrashed();
    }

    public function employee() {
        return $this->hasOne(Employee::class)->withTrashed();
    }
}
