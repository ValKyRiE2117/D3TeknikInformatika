<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\AlumniController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AkademikController;
use App\Http\Controllers\HimpunanController;
use App\Http\Controllers\NilaiResController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TahunAjaranController;
use App\Http\Controllers\MahasiswaResController;
use App\Http\Controllers\MatakuliahResController;
use App\Http\Controllers\MonitorProfileController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/akademik', [AkademikController::class, 'index']);
Route::get('/profile', [ProfileController::class, 'index']);
Route::get('/alumni', [AlumniController::class, 'index']);
Route::get('/berita', [BeritaController::class, 'index']);
Route::get('/himpunan', [HimpunanController::class, 'index']);

Route::get('/sistem-monitoring-mahasiswa/login', [LoginController::class, 'index'])->middleware('guest:dosen')->name('login');
Route::post('/sistem-monitoring-mahasiswa/login', [LoginController::class, 'authenticate']);
Route::post('/sistem-monitoring-mahasiswa/logout', [LoginController::class, 'logout']);

Route::get('/sistem-monitoring-mahasiswa', [DashboardController::class, 'index'])->middleware('auth:dosen');

Route::middleware(['auth:dosen'])->group(function () {
    // Resource route for Mahasiswa
    Route::resource('/sistem-monitoring-mahasiswa/mahasiswa', MahasiswaResController::class);
    Route::post('/mahasiswa/import', [MahasiswaResController::class, 'import'])->name('mahasiswa.import');
});

Route::middleware('auth:dosen')->group(function () {
    // Resource route for Mahasiswa
    Route::resource('/sistem-monitoring-mahasiswa/dosen', DosenController::class);
});

// Route::middleware('auth:dosen')->group(function () {
//     // Resource route for Tahun Ajaran
//     Route::resource('/sistem-monitoring-mahasiswa/tahunajar', TahunAjaranController::class);
// });

Route::middleware('auth:dosen')->group(function () {
    // Resource route for Tahun Ajaran
    Route::resource('/sistem-monitoring-mahasiswa/matakuliah', MatakuliahResController::class);
    Route::post('/matakuliah/import', [MatakuliahResController::class, 'import'])->name('matakuliah.import');
});

Route::get('/sistem-monitoring-mahasiswa/profil', [MonitorProfileController::class, 'index'])->middleware('auth:dosen');
Route::post('/update-password', [MonitorProfileController::class, 'updatePassword'])->middleware('auth:dosen')->name('update-password');
Route::put('/profile', [MonitorProfileController::class, 'updateProfile'])->name('profile.update');

Route::middleware('auth:dosen')->group(function () {
    Route::get('sistem-monitoring-mahasiswa/input-nilai', [NilaiResController::class, 'create'])->name('input-nilai.create');
    Route::post('sistem-monitoring-mahasiswa/input-nilai', [NilaiResController::class, 'store'])->name('input-nilai.store'); // Fixed to use 'store'
    Route::resource('sistem-monitoring-mahasiswa/daftar-nilai', NilaiResController::class)->except(['create']);
});