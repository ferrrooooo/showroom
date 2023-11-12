<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    function createOrder(Request $request)
    {
        Order::create([
            "id_pelanggans" => $request->pelanggan,
            "id_kendaraan_specs" => $request->kendaraan
        ]);

        return redirect(route("orders"));
    }
}
