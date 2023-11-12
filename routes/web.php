<?php

use App\Http\Controllers\CarController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrderController;
use App\Models\KendaraanSpec;
use App\Models\Order;
use App\Models\Pelanggan;
use App\Models\TipeKendaraan;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::view('/', 'welcome')->name("dashboard");
Route::prefix("/admin")->group(function () {
    Route::view('/orders', 'orders', [
        'data' => Order::with(['spec', 'user']),
        'no' => 1
    ])->name("orders");
    Route::view('/customers', 'customers', ['pelanggan' => Pelanggan::all(), 'no' => 1])->name("customers");
    Route::view('/create-orders', 'create-orders', ['pelanggan' => Pelanggan::all(), 'model' => KendaraanSpec::all()])->name("createOrder");
    Route::view('/create-customers', 'create-customer')->name("createCustomer");
    Route::view('/create-mobil', 'create-mobil', ['data' => TipeKendaraan::all()])->name("createMobil");
    Route::view('/mobils', 'mobils', ['data' => KendaraanSpec::all(), 'no' => 1])->name("mobils");
    Route::get('/update-customers/{id}', function ($id) {
        return view("update-customer", ['customer' => Pelanggan::find($id), 'id' => $id]);
    })->name("updateCustomer");
    Route::get('/delete-customer/{id}', [CustomerController::class, 'deleteCustomer'])->name("deleteCustomer");
    Route::post('/create-orders', [OrderController::class, 'createOrder'])->name("createOrderPost");
    Route::post('/create-mobils', [CarController::class, 'createCar'])->name("createMobilPost");
    Route::post('/update-customers/{id}', [CustomerController::class, 'updateCustomer'])->name("updateCustomerPost");
    Route::post('/create-customers', [CustomerController::class, 'createCustomer'])->name("createCustomerPost");
});
