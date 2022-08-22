<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\SalesDetController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [SalesController::class, 'index']);
Route::get('/baranginput', function () {
    return view('baranginput', [
        "title" => "Tambah Barang",
    ]);
});
Route::get('/customerinput', function () {
    return view('customerinput', [
        "title" => "Tambah Customer",
    ]);
});
Route::resource('/barang', BarangController::class);
Route::resource('/customer', CustomerController::class);

Route::get('/sales', [SalesController::class, 'index']);
Route::get('/sales/add', [SalesDetController::class, 'index']);
// Route::get('/barang', [BarangController::class, 'index']);
