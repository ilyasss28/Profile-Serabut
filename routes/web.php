<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\GaleryController;
use App\Http\Controllers\KomoditasController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProyekController;
use App\Http\Controllers\PublikasiController;
use App\Http\Controllers\WilayahKerjaController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::get('/wilayah-kerja', [WilayahKerjaController::class, 'index'])->name('wilayahkerja');
Route::get('/komoditas', [KomoditasController::class, 'index'])->name('komoditas');
Route::get('/komoditas/detail/{slug}', [KomoditasController::class, 'indexDetail'])->name('detail-komoditas');
Route::get('/proyek', [ProyekController::class, 'index'])->name('proyek');
Route::get('/proyek/detail/{program:slug}', [ProyekController::class, 'indexDetail'])->name('detail-proyek');
Route::get('/publikasi', [PublikasiController::class, 'index'])->name('publikasi');
Route::get('/publikasi/detail/{slug}', [PublikasiController::class, 'indexDetail'])->name('detail-publikasi');
Route::get('/FAQ', [FaqController::class, 'index'])->name('faq');
Route::get('/galery',[GaleryController::class, 'index'])->name('galery');
