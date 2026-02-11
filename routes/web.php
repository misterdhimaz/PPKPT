<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaporanController;

// Halaman Utama
Route::get('/', [LaporanController::class, 'index'])->name('home');

// Halaman Daftar Penanganan (Nanti dibuat)
Route::get('/daftar-penanganan', [LaporanController::class, 'daftar'])->name('laporan.index');

// Form Lapor
Route::post('/lapor', [LaporanController::class, 'store'])->name('laporan.store');

// Halaman Edukasi (Static)
Route::get('/edukasi', function () {
    return view('edukasi');
});

Route::get('/lapor', [LaporanController::class, 'create'])->name('lapor.create');
