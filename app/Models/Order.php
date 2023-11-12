<?php

namespace App\Models;

use App\Models\Pelanggan;
use App\Models\KendaraanSpec;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = ['id'];

    public function pelanggan(): HasOne
    {
        return $this->hasOne(Pelanggan::class, 'id', 'id_pelanggans');
    }
    public function specs(): HasOne
    {
        return $this->hasOne(KendaraanSpec::class, 'id', 'id_kendaraan_specs');
    }
}
