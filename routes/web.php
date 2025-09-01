<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('components.dashboard');
});

Route::get('/profile', [ProfileController::class, 'index'])->name('profile');