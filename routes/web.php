<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProyekController;
use App\Http\Controllers\WilayahKerjaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('components.dashboard');
});

Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::get('/wilayah-kerja', [WilayahKerjaController::class, 'index'])->name('wilayahkerja');
Route::get('/proyek', [ProyekController::class, 'index'])->name('proyek');