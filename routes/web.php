<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;

Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/user', [UserController::class, 'index'])->name('user.index');
Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
Route::post('/user/store', [UserController::class, 'store'])->name('user.store');

//terbaru 
Route::get('/dashboard', function () {return view('admin.dashboard');})->name('dashboard');
Route::resource('user', App\Http\Controllers\UserController::class);
Route::get('/logout', function () {return redirect('/login');})->name('logout');

//tambahan untuk cek email data user
Route::get('/login', [UserController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [UserController::class, 'login'])->name('login');
Route::post('/logout', [UserController::class, 'logout'])->name('logout');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::resource('user', UserController::class);
Route::get('/dashboard', function () {return view('admin.dashboard'); 
})->name('dashboard')->middleware('auth');