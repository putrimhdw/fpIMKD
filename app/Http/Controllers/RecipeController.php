<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecipeController extends Controller
{
    // Untuk menu "Cari Resep"
    public function cari()
    {
        return view('resep.cari');
    }

    // Untuk menu "Daftar Resep"
    public function daftar()
    {
        return view('resep.daftar');
    }
}