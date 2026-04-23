<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

// Halaman Login
Route::get('/', [PageController::class, 'showLogin'])->name('login');
Route::post('/login', [PageController::class, 'login'])->name('login.submit');

// Halaman Dashboard
Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');

// Halaman Pengelolaan
Route::get('/pengelolaan', [PageController::class, 'pengelolaan'])->name('pengelolaan');

// Halaman Profile
Route::get('/profile', [PageController::class, 'profile'])->name('profile');

// Logout
Route::get('/logout', [PageController::class, 'logout'])->name('logout');
