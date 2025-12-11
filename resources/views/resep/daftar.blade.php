@extends('layouts.main') {{-- Pastikan nama file layout utama Anda benar --}}

@section('title', 'Daftar Resep - Cookora')

@push('styles')
    <style>
        .recipe-header {
            text-align: center;
            padding: 50px 0 30px;
        }

        .recipe-header h1 {
            font-size: 32px;
            color: #222;
            margin-bottom: 10px;
        }

        .recipe-header p {
            color: var(--gray);
        }

        .recipe-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 30px;
            padding-bottom: 60px;
        }

        .recipe-card {
            background: #fff;
            border-radius: 20px;
            overflow: hidden;
            border: 1px solid #f0f0f0;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .recipe-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.05);
        }

        .recipe-image {
            width: 100%;
            height: 200px;
            background-color: #f5f5f5;
            object-fit: cover;
        }

        .recipe-content {
            padding: 20px;
        }

        .recipe-category {
            color: var(--orange);
            font-size: 13px;
            font-weight: 600;
            text-transform: uppercase;
            margin-bottom: 8px;
            display: block;
        }

        .recipe-title {
            font-size: 20px;
            font-weight: 700;
            color: #222;
            margin: 0 0 10px 0;
            line-height: 1.4;
        }

        .recipe-desc {
            color: #777;
            font-size: 14px;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .btn-detail {
            display: inline-block;
            color: var(--orange);
            text-decoration: none;
            font-weight: 600;
            font-size: 15px;
            transition: gap 0.2s;
        }

        .btn-detail:hover {
            text-decoration: underline;
        }
    </style>
@endpush

@section('content')
    <div class="container">
        <header class="recipe-header">
            <h1>Semua Daftar Resep</h1>
            <p>Temukan inspirasi masak harian Anda di sini.</p>
        </header>

        <div class="recipe-grid">
            <div class="recipe-card">
                <img src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?w=500" alt="Resep" class="recipe-image">
                <div class="recipe-content">
                    <span class="recipe-category">Makan Siang</span>
                    <h3 class="recipe-title">Salad Sehat Musim Panas</h3>
                    <p class="recipe-desc">Kombinasi sayuran segar dengan dressing lemon yang membangkitkan semangat.</p>
                    <a href="#" class="btn-detail">Lihat Detail →</a>
                </div>
            </div>

            <div class="recipe-card">
                <img src="https://images.unsplash.com/photo-1512621776951-a57141f2eefd?w=500" alt="Resep"
                    class="recipe-image">
                <div class="recipe-content">
                    <span class="recipe-category">Tradisional</span>
                    <h3 class="recipe-title">Nasi Goreng Kampung</h3>
                    <p class="recipe-desc">Cita rasa autentik dengan bumbu rempah pilihan warisan keluarga.</p>
                    <a href="#" class="btn-detail">Lihat Detail →</a>
                </div>
            </div>

            <div class="recipe-card">
                <img src="https://images.unsplash.com/photo-1565299624946-b28f40a0ae38?w=500" alt="Resep"
                    class="recipe-image">
                <div class="recipe-content">
                    <span class="recipe-category">Snack</span>
                    <h3 class="recipe-title">Pizza Homemade Tipis</h3>
                    <p class="recipe-desc">Adonan tipis renyah dengan topping keju mozzarella melimpah.</p>
                    <a href="#" class="btn-detail">Lihat Detail →</a>
                </div>
            </div>

        </div>
    </div>
@endsection
