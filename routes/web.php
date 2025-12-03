<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MatakuliahController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MultipleuploadsController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\HomeController;


// ================= BASIC ROUTES =================
Route::get('/pcr', fn() => 'Selamat Datang di Website Kampus PCR!');
Route::get('/mahasiswa', fn() => 'Hallo Mahasiswa');
Route::get('/nama/{param1}', fn($param1) => 'Nama saya: '.$param1);
Route::get('/nim/{param1?}', fn($param1 = '') => 'Nim saya: '.$param1);
Route::get('/mahasiswa/{param1}', [MahasiswaController::class, 'show']);
Route::get('/about', fn() => view('halaman-about'));


// ================= LATIHAN =================
Route::get('/mkindex', [MatakuliahController::class, 'index']);
Route::get('/mkcreate', [MatakuliahController::class, 'create']);
Route::get('/mkstore', [MatakuliahController::class, 'store']);
Route::get('/mkshow', [MatakuliahController::class, 'show']);
Route::get('/mkedit', [MatakuliahController::class, 'edit']);
Route::get('/mkupdate', [MatakuliahController::class, 'update']);
Route::get('/mkdestroy', [MatakuliahController::class, 'destroy']);
Route::get('/matakuliah/show/{id?}', [MatakuliahController::class, 'show']);


// GUEST ONLY 
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'index'])->name('login'); // ganti showLoginForm → index
    Route::post('/login', [AuthController::class, 'login'])->name('login.post');
});


// AUTH ONLY 
Route::middleware('auth')->group(function () {

    // logout
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    // Tanya Jawab User
    Route::post('question/store', [QuestionController::class, 'store'])->name('question.store');

    // Profile User
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile/delete', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Admin Only
    Route::middleware('role:admin')->prefix('admin')->group(function () {
        Route::resource('user', UserController::class);
        Route::resource('pelanggan', PelangganController::class);
    });
});


// DEFAULT REDIRECT
Route::get('/', fn() => redirect()->route('dashboard'));


// MULTIPLE UPLOADS
Route::get('/multipleuploads', [MultipleuploadsController::class, 'index'])->name('uploads');
Route::post('/save', [MultipleuploadsController::class, 'store'])->name('uploads.store');