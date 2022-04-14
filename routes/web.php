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

Route::get('/', function () {
    return view('kas',[
        "title"=>"Kas Kantor"
    ]);
});

Route::get('/pengeluaran', function () {
    return view('pengeluaran',[
        "title"=>"Data Pengeluaran"
    ]);
});

Route::get('/karyawan', function () {
    return view('karyawan',[
        "title"=>"Data Karyawan"
    ]);
});
Route::get('/laptop', function () {
    return view('laptop',[
        "title"=>"Data Laptop"
    ]);
});

