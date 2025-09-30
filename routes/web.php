<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MatakuliahController;

Route::get('/', function () {
    return ('Selamat datang di website kampus pcr');
});

Route::get('/mahasiswa', function () {
    return ('halo mahasiswa');
});

Route::get('/nama/maya', function ($maya) {
    return ('nama saya : '.$maya);
});

Route::get('/nim/maya', function ($maya='') {
    return ('nim saya: '.$maya);
});

Route::get('/about', function () {
    return view('halaman-about');
});

Route::get('/matakuliah/show', [MatakuliahController::class, 'show']);