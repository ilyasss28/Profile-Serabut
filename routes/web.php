<?php

use App\Http\Controllers\KomoditasController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProyekController;
use App\Http\Controllers\PublikasiController;
use App\Http\Controllers\WilayahKerjaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('components.dashboard');
});

Route::get('/FAQ', function () {
    return view('components.detail-faq');
});

Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::get('/wilayah-kerja', [WilayahKerjaController::class, 'index'])->name('wilayahkerja');
Route::get('/komoditas', [KomoditasController::class, 'index'])->name('komoditas');
Route::get('/komoditas/detail', [KomoditasController::class, 'indexDetail'])->name('detail-komoditas');
Route::get('/proyek', [ProyekController::class, 'index'])->name('proyek');
Route::get('/proyek/detail', [ProyekController::class, 'indexDetail'])->name('detail-proyek');
Route::get('/publikasi', [PublikasiController::class, 'index'])->name('publikasi');
Route::get('/publikasi/detail', [PublikasiController::class, 'indexDetail'])->name('detail-publikasi');
