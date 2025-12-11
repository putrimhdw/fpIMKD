@extends('layouts.main') {{-- Ganti 'layouts.app' dengan nama file layout utama Anda --}}

@section('title', 'Cari Resep - Cookora')

@section('content')
    <div style="padding: 100px 0; text-align: center;">
        <h2 style="color: var(--orange);">Cari Resep Berdasarkan Bahan</h2>
        <p style="color: var(--gray);">Masukkan bahan yang Anda miliki di dapur.</p>

        <div style="margin-top: 30px;">
            <input type="text" placeholder="Contoh: Ayam, Telur, Wortel..."
                style="padding: 12px; width: 300px; border: 1px solid #ddd; border-radius: 8px;">
            <button
                style="padding: 12px 25px; background: var(--orange); color: white; border: none; border-radius: 8px; cursor: pointer;">
                Cari
            </button>
        </div>
    </div>
@endsection
