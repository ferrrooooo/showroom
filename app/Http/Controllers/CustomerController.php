<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    function createCustomer(Request $request)
    {
        Pelanggan::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'no_telp' => $request->notelp,
            'id_pengenal' => $request->idcard,
        ]);

        return redirect(route("customers"));
    }
    function updateCustomer(Request $request, $id)
    {
        Pelanggan::find($id)->update([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'no_telp' => $request->notelp,
            'id_pengenal' => $request->idcard,
        ]);

        return redirect(route("customers"));
    }
    function deleteCustomer($id)
    {
        Pelanggan::find($id)->delete();

        return redirect(route("customers"));
    }
}
