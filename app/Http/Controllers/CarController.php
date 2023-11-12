<?php

namespace App\Http\Controllers;

use App\Models\KendaraanSpec;
use Illuminate\Http\Request;

class CarController extends Controller
{
    function createCar(Request $request)
    {
        KendaraanSpec::create([
            'tahun' => $request->tahun,
            'harga' => $request->harga,
            'model' => $request->model,
            'id_tipe_kendaraan' => $request->tipe
        ]);
    }
}
