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
    return view('welcome');
});

Route::get('/halaman2', function () {
    return view('animals');
});

Route::get('/halaman3', function () {
    return view('fruits');
});

Route::get('/About', function () {
    $nama = "Novita ayu";
    $jenis_kelamin = "perempuan";
    $pendidikan_terakhir = "smk";
    $pekerjaan = "pengusaha";

    return view('Biodata',compact('nama', 'jenis_kelamin', 'pendidikan_terakhir', 'pekerjaan'));
});

// parameter 
Route::get('/sample/{nama}', function (Request $request, $nama) {
    $nama2 = $nama;
    return view('sample',compact('nama2'));
});



