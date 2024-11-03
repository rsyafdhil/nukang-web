<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Global Routes
Route::get('nukang', function () {
    return view('nukang.index');
});

// Admin Route
Route::get('admin', function () {
    return '<h1>Hi Admin!</h1>';
})->middleware(['auth', 'verified', 'role:admin'])->name('admin');
// pakai ->middleware(['auth', 'verified', 'role:admin'])->name('admin'); untuk kondisi role = admin

// Mitra Route
Route::get('mitra', function () {
    return view('mitra.dashboard');
})->middleware(['auth', 'verified', 'role:mitra'])->name('mitra');
// pakai ->middleware(['auth', 'verified', 'role:mitra'])->name('mitra'); untuk kondisi role = mitra

require __DIR__ . '/auth.php';
