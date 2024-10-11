<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AlumniController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AkademikController;
use App\Http\Controllers\HimpunanController;
use App\Http\Controllers\DashboardController;

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
