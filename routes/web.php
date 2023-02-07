<?php

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

// index
Route::get('/', function () {
    return view('index');
});

//tampil
Route::get('/tampil', [App\Http\Controllers\controller_barang::class, 'getAll']);

// transaksi
Route::get('/transaksi', [App\Http\Controllers\controller_cud::class, 'transaksi']);

//dashboard
Route::get('/dash', [App\Http\Controllers\controller_cud::class, 'getAll']);


// tambah
Route::get('/tambah', function () {
    return view('tambah_barang');
});

// input
Route::post('/input', [App\Http\Controllers\controller_cud::class, 'input']);

// delete
Route::get('/delete/{id}', [App\Http\Controllers\controller_cud::class, 'delete']);

// update
Route::get('/update/{id}', [App\Http\Controllers\controller_cud::class, 'update']);
Route::post('/proses_update', [App\Http\Controllers\controller_cud::class, 'proses_update']);

//style
Route::get('/style', function () {
    return view('<css>');
});
