<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;

class KendaraanSpec extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = ['id'];

    public function tipe() : HasOne{
        return $this->hasOne(TipeKendaraan::class,'id','id_tipe_kendaraan');
    }
}
