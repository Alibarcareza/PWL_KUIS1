<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\ContactusController;
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
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/pegawai', [App\Http\Controllers\PegawaiController::class, 'pegawai'])->name('pegawai');
Route::get('/pelanggan', [App\Http\Controllers\PelangganController::class, 'pelanggan'])->name('pelanggan');
Route::get('/barang', [App\Http\Controllers\BarangController::class, 'barang'])->name('barang');
Route::get('/supplier', [App\Http\Controllers\SupplierController::class, 'supplier'])->name('supplier');
Route::get('/contactUs', [App\Http\Controllers\ContactusController::class, 'contactUs'])->name('contactUs');

// Route::get('/', function () {
//     return view('welcome');
// });
