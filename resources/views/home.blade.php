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
                <a href="{{ route('recipes.search') }}" class="btn-primary">
                    Jelajahi Resep
                </a>

            </div>

            <div class="hero-image">
                <img src="{{ asset('images/chef-illustration.png') }}" alt="Ilustrasi Memasak Cookora"
                    class="hero-illustration">
            </div>


        </div>
    </section>

    {{-- ================= WHY ================= --}}
    <section class="why">
        <h2>Kenapa <span>Cookora</span>?</h2>

        <div class="why-grid">
            <div class="why-card">
                <div class="why-icon-wrap">
                    <img src="{{ asset('images/resep-dapur.png') }}" alt="Resep Terpilih" class="why-icon">
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
                    <img src="{{ asset('images/langkah-jelas.png') }}" alt="Langkah Jelas" class="why-icon">
                </div>

                <h3>Langkah Jelas & Anti Gagal</h3>
                <p>
                    Instruksi ditulis rapi dan ringkas.
                    Cocok untuk pemula, praktis untuk yang sudah jago.
                </p>
            </div>

            <div class="why-card">
                <div class="why-icon-wrap">
                    <img src="{{ asset('images/hemat-waktu.png') }}" alt="Hemat Waktu" class="why-icon">
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
                    'title' => 'Ayam Rica Rica',
                    'slug'  => 'ayam-rica-rica',
                    'time'  => '45 Menit',
                    'serve' => '4 Orang',
                    'img'   => 'https://assets.unileversolutions.com/recipes-v3/125515-default.jpg?im=AspectCrop=(720,459);Resize=(720,459)',
                ],
                [
                    'title' => 'Opor Ayam',
                    'slug'  => 'opor-ayam',
                    'time'  => '60 Menit',
                    'serve' => '4 Orang',
                    'img'   => 'https://assets.unileversolutions.com/recipes-v3/230519-default.jpg?im=AspectCrop=(720,459);Resize=(720,459)',
                ],
                [
                    'title' => 'Tumis Kangkung',
                    'slug'  => 'tumis-kangkung',
                    'time'  => '15 Menit',
                    'serve' => '2 Orang',
                    'img'   => 'https://assets.unileversolutions.com/recipes-v3/230520-default.jpg?im=AspectCrop=(720,459);Resize=(720,459)',
                ],
                [
                    'title' => 'Nasi Kebuli',
                    'slug'  => 'nasi-kebuli',
                    'time'  => '90 Menit',
                    'serve' => '5 Orang',
                    'img'   => 'https://assets.unileversolutions.com/recipes-v3/230922-default.jpg?im=AspectCrop=(720,459);Resize=(720,459)',
                ],
                [
                    'title' => 'Soto Ayam',
                    'slug'  => 'soto-ayam',
                    'time'  => '60 Menit',
                    'serve' => '4 Orang',
                    'img'   => 'https://assets.unileversolutions.com/recipes-v3/125763-default.jpg?im=AspectCrop=(720,459);Resize=(720,459)',
                ],
                [
                    'title' => 'Sayur Lodeh',
                    'slug'  => 'sayur-lodeh',
                    'time'  => '40 Menit',
                    'serve' => '4 Orang',
                    'img'   => 'https://assets.unileversolutions.com/recipes-v3/230915-default.jpg?im=AspectCrop=(720,459);Resize=(720,459)',
                ],
            ];
        @endphp

        @foreach ($featuredRecipes as $recipe)
            <a href="{{ route('recipes.show', $recipe['slug']) }}" class="recipe-card">
                <img
                    src="{{ $recipe['img'] }}"
                    alt="{{ $recipe['title'] }}"
                    class="recipe-img"
                    loading="lazy"
                >

                <h4>{{ $recipe['title'] }}</h4>

                <div class="recipe-meta">
                    <span>⏱ {{ $recipe['time'] }}</span>
                    <span>👥 {{ $recipe['serve'] }}</span>
                </div>
            </a>
        @endforeach
    </div>
</section>



    {{-- ================= CTA ================= --}}
    <section class="cta">
        <h2>Masak Apa Hari Ini?</h2>
        <p>Biarkan Cookora membantumu menemukan inspirasi.</p>
        <a href="{{ route('recipes.search') }}" class="btn-primary">
            Jelajahi Resep
        </a>

    </section>

{{-- ================= RESEP LAINNYA ================= --}}
<section class="more">
    <div class="more-header">
        <h2>Resep <span>Lainnya</span></h2>
    </div>

    <div class="recipe-grid">
        @php
            $moreRecipes = [
                [
                    'title' => 'Sup Krim Ayam Istimewa',
                    'slug'  => 'sup-krim-ayam-istimewa',
                    'time'  => '30 Menit',
                    'serve' => '3 Orang',
                    'img'   => 'https://assets.unileversolutions.com/recipes-v3/125690-default.jpg?im=AspectCrop=(720,459);Resize=(720,459)',
                ],
                [
                    'title' => 'Tumis Tahu Hijau',
                    'slug'  => 'tumis-tahu-hijau',
                    'time'  => '20 Menit',
                    'serve' => '2 Orang',
                    'img'   => 'https://assets.unileversolutions.com/recipes-v3/125720-default.jpg?im=AspectCrop=(720,459);Resize=(720,459)',
                ],
                [
                    'title' => 'Cumi Krispi Cocol Madu',
                    'slug'  => 'cumi-krispi-cocol-madu',
                    'time'  => '25 Menit',
                    'serve' => '3 Orang',
                    'img'   => 'https://assets.unileversolutions.com/recipes-v3/125699-default.jpg',
                ],
            ];
        @endphp

        @foreach ($moreRecipes as $recipe)
            <a href="{{ route('recipes.show', $recipe['slug']) }}" class="recipe-card">
                <img
                    src="{{ $recipe['img'] }}"
                    alt="{{ $recipe['title'] }}"
                    class="recipe-img"
                    loading="lazy"
                >

                <h4>{{ $recipe['title'] }}</h4>

                <div class="recipe-meta">
                    <span>⏱ {{ $recipe['time'] }}</span>
                    <span>👥 {{ $recipe['serve'] }}</span>
                </div>
            </a>
        @endforeach
    </div>
</section>

@endsection
