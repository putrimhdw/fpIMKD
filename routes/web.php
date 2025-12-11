<?php

use App\Http\Controllers\RecipeController;
use Illuminate\Support\Facades\Route;

// Route untuk Beranda (Pastikan namanya 'home' agar logika active menu jalan)
Route::get('/', function () {
    return view('home'); // atau view beranda Anda
})->name('home');

// Halaman Cari Resep (Berdasarkan Bahan)
Route::get('/cari-resep', [RecipeController::class, 'cari'])->name('resep.cari');

// Halaman Daftar Resep (Semua Resep)
Route::get('/daftar-resep', [RecipeController::class, 'daftar'])->name('resep.daftar');