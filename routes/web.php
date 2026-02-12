<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaporanController;

// 1. Jalur HOME (Tampilan Awal)
// Ini mengarah langsung ke view 'home' tanpa lewat LaporanController
Route::get('/', function () {
    return view('home');
})->name('home');

// 2. Jalur EDUKASI
Route::get('/edukasi', function () {
    return view('edukasi');
})->name('edukasi');

// 3. Jalur DAFTAR PENANGANAN
// Ini baru mengarah ke LaporanController fungsi index
Route::get('/daftar-penanganan', [LaporanController::class, 'index'])->name('laporan.index');

// 4. Jalur PELAPORAN (Untuk tombol "Buat Laporan")
// Arahkan sementara ke # atau halaman lapor jika sudah ada
Route::get('/lapor', function () {
    return view('lapor'); // Pastikan view 'lapor.blade.php' ada, atau ganti return redirect ke yang lain
})->name('lapor.create');
