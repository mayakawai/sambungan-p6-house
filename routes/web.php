<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiController;

Route::get('/pegawai', [PegawaiController::class, 'index']);
Route::post('/pegawai', [PegawaiController::class, 'show']);


Route::get('/dashboard', function () {
    if (!session('username')) {
        return redirect('/auth')->withErrors(['Silakan login dulu!']);
    }
    return view('dashboard');

});