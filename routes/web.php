<?php

use Illuminate\Support\Facades\Route;

/* ================= HOME ================= */
Route::get('/', function () {
    return view('home');
})->name('home');

/* ================= DAFTAR RESEP ================= */
Route::get('/recipes', function () {
    return view('recipes.index');
})->name('recipes.index');

/* ================= CARI RESEP ================= */
Route::get('/recipes/search', function () {
    return view('recipes.search');
})->name('recipes.search');

/* ================= RESEP POPULER ================= */
Route::get('/recipes/popular', function () {
    return view('recipes.popular');
})->name('recipes.popular');

/* ================= RESEP TERKINI ================= */
Route::get('/recipes/latest', function () {
    return view('recipes.latest');
})->name('recipes.latest');

/* ================= DETAIL RESEP (WAJIB PALING BAWAH) ================= */
Route::get('/recipes/{slug}', function ($slug) {
    return view('recipes.show', compact('slug'));
})->name('recipes.show');
