@extends('layouts.app')

@section('content')
    {{-- ================= HERO ================= --}}
    <section class="hero">
        <div class="hero-container">
            <div class="hero-text">
                <h1>
                    Masak Lebih Mudah,<br>
                    <span>Hidup Lebih Cerita.</span>
                </h1>
                <p>
                    Cookora membantu kamu menciptakan, mengatur, dan menjalankan ide–ide terbaikmu dengan cara yang lebih
                    mudah dan menyenangkan.
                </p>
                <a href="#" class="btn-primary">Jelajahi Resep</a>
            </div>

<div class="hero-image">
    <img 
        src="{{ asset('images/chef-illustration.png') }}" 
        alt="Ilustrasi Memasak Cookora"
        class="hero-illustration"
    >
</div>


        </div>
    </section>

{{-- ================= WHY ================= --}}
<section class="why">
    <h2>Kenapa <span>Cookora</span>?</h2>

    <div class="why-grid">
        <div class="why-card">
            <div class="why-icon-wrap">
                <img 
                    src="{{ asset('images/resep-dapur.png') }}"
                    alt="Resep Terpilih"
                    class="why-icon"
                >
            </div>

            <h3>Resep Terpilih Dari Dapur Kami</h3>
            <p>
                Semua hidangan di Cookora disusun langsung oleh tim kami.
                Kualitas rasa, langkah yang mudah diikuti, dan bahan yang
                mudah ditemukan.
            </p>
        </div>

        <div class="why-card">
            <div class="why-icon-wrap">
                <img 
                    src="{{ asset('images/langkah-jelas.png') }}"
                    alt="Langkah Jelas"
                    class="why-icon"
                >
            </div>

            <h3>Langkah Jelas & Anti Gagal</h3>
            <p>
                Instruksi ditulis rapi dan ringkas.
                Cocok untuk pemula, praktis untuk yang sudah jago.
            </p>
        </div>

        <div class="why-card">
            <div class="why-icon-wrap">
                <img 
                    src="{{ asset('images/hemat-waktu.png') }}"
                    alt="Hemat Waktu"
                    class="why-icon"
                >
            </div>

            <h3>Hemat Waktu</h3>
            <p>
                Tidak ada fitur rumit, tidak ada upload user, tidak ada kebisingan.
                Hanya resep yang kamu butuhkan, langsung terlihat,
                langsung dipraktikkan.
            </p>
        </div>
    </div>
</section>




{{-- ================= RESEP PILIHAN ================= --}}
<section class="featured">
    <h2>Resep <span>Pilihan</span></h2>

    <div class="recipe-grid">
        @php
            $featuredRecipes = [
                [
                    'title' => 'Ayam Panggang Madu',
                    'time' => '45 Menit',
                    'serve' => '3 Orang',
                    'img' =>     'https://images.unsplash.com/photo-1555939594-58d7cb561ad1',
                ],
                [
                    'title' => 'Pasta Creamy Jamur',
                    'time' => '30 Menit',
                    'serve' => '2 Orang',
                    'img' => 'https://images.unsplash.com/photo-1625943555419-56a2cb596640',
                ],
                [
                    'title' => 'Salmon Saus Lemon',
                    'time' => '25 Menit',
                    'serve' => '2 Orang',
                    'img' => 'https://images.unsplash.com/photo-1603133872878-684f208fb84b',
                ],
                [
                    'title' => 'Rice Bowl Teriyaki',
                    'time' => '20 Menit',
                    'serve' => '1 Orang',
                    'img' =>     'https://images.unsplash.com/photo-1540189549336-e6e99c3679fe',
                ],
                [
                    'title' => 'Sup Sayur Sehat',
                    'time' => '35 Menit',
                    'serve' => '4 Orang',
                    'img' => 'https://images.unsplash.com/photo-1621996346565-e3dbc646d9a9',
                ],
                [
                    'title' => 'Pancake Madu',
                    'time' => '15 Menit',
                    'serve' => '2 Orang',
                    'img' => 'https://images.unsplash.com/photo-1606787366850-de6330128bfc',
                ],
                [
                    'title' => 'Nasi Goreng Spesial',
                    'time' => '20 Menit',
                    'serve' => '2 Orang',
                    'img' =>    'https://images.unsplash.com/photo-1490645935967-10de6ba17061', 
                ],
                [
                    'title' => 'Chicken Steak',
                    'time' => '40 Menit',
                    'serve' => '2 Orang',
                    'img' => 'https://images.unsplash.com/photo-1603133872878-684f208fb84b',
                ],
            ];
        @endphp

        @foreach ($featuredRecipes as $recipe)
            <div class="recipe-card">
                <img 
                    src="{{ $recipe['img'] }}" 
                    alt="{{ $recipe['title'] }}" 
                    class="recipe-img"
                >

                <h4>{{ $recipe['title'] }}</h4>

                <div class="recipe-meta">
                    <span>⏱ {{ $recipe['time'] }}</span>
                    <span>👥 {{ $recipe['serve'] }}</span>
                </div>
            </div>
        @endforeach
    </div>
</section>


    {{-- ================= CTA ================= --}}
    <section class="cta">
        <h2>Masak Apa Hari Ini?</h2>
        <p>Biarkan Cookora membantumu menemukan inspirasi.</p>
        <a href="#" class="btn-primary">Jelajahi Resep</a>
    </section>

    {{-- ================= RESEP LAINNYA ================= --}}
    <section class="more">
        <div class="more-header">
            <h2>Resep <span>Lainnya</span></h2>
            <a href="#" class="more-link">Lihat Resep</a>
        </div>

        <div class="recipe-grid">
            @php
                $moreRecipes = [
                    'https://images.unsplash.com/photo-1540189549336-e6e99c3679fe',
                    'https://images.unsplash.com/photo-1608755728474-2c4d8e43b5b6',
                    'https://images.unsplash.com/photo-1555939594-58d7cb561ad1',
                ];
            @endphp

            @foreach ($moreRecipes as $img)
                <div class="recipe-card">
                    <img src="{{ $img }}" alt="Resep Lainnya" class="recipe-img">

                    <h4>Nama Resep</h4>

                    <div class="recipe-meta">
                        <span>⏱ 25 Menit</span>
                        <span>👥 3 Orang</span>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection
