@extends('layouts.app')

@section('content')
    <div class="page">

        {{-- SEARCH --}}
        <div class="search-section">
            <input type="text" class="search-input" placeholder="Cari Resep Disini">
        </div>

{{-- ================= RESEP POPULER ================= --}}
<section class="section">
    <div class="section-header">
        <h2 class="section-title">
            <span>Resep</span> Populer
        </h2>
        <a href="{{ route('recipes.popular') }}" class="section-link">
            Lihat Resep
        </a>
    </div>

    <div class="recipe-grid">
        @php
            $popularRecipes = [
                [
                    'title' => 'Ayam Rica-Rica',
                    'slug'  => 'ayam-rica-rica',
                    'time'  => '45 Menit',
                    'serve' => '6 Orang',
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
            ];
        @endphp

        @foreach ($popularRecipes as $recipe)
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


{{-- RESEP TERKINI --}}
<section class="section">
    <div class="section-header">
        <h2 class="section-title">
            <span>Resep</span> Terkini
        </h2>
        <a href="{{ route('recipes.latest') }}" class="section-link">
            Lihat Resep
        </a>
    </div>

    <div class="recipe-grid">
        @php
            $latestPreview = [
                [
                    'title' => 'Tumis Tahu Hijau',
                    'slug'  => 'tumis-tahu-hijau',
                    'time'  => '25 Menit',
                    'serve' => '3 Orang',
                    'img'   => 'https://assets.unileversolutions.com/recipes-v3/125720-default.jpg?im=AspectCrop=(720,459);Resize=(720,459)',
                ],
                [
                    'title' => 'Cumi Krispi Cocol Madu',
                    'slug'  => 'cumi-krispi-cocol-madu',
                    'time'  => '25 Menit',
                    'serve' => '3 Orang',
                    'img'   => 'https://assets.unileversolutions.com/recipes-v3/125699-default.jpg?im=AspectCrop=(720,459);Resize=(720,459)',
                ],
                [
                    'title' => 'Nasi Goreng Cumi',
                    'slug'  => 'nasi-goreng-cumi',
                    'time'  => '20 Menit',
                    'serve' => '2 Orang',
                    'img'   => 'https://assets.unileversolutions.com/recipes-v3/125733-default.jpg?im=AspectCrop=(720,459);Resize=(720,459)',
                ],
            ];
        @endphp

        @foreach ($latestPreview as $recipe)
            <a href="{{ route('recipes.show', $recipe['slug']) }}" class="recipe-card">
                <img
                    src="{{ $recipe['img'] }}"
                    class="recipe-img"
                    alt="{{ $recipe['title'] }}"
                    loading="lazy"
                >

                <div class="recipe-name">{{ $recipe['title'] }}</div>

                <div class="recipe-meta">
                    <span>⏱ {{ $recipe['time'] }}</span>
                    <span>👤 {{ $recipe['serve'] }}</span>
                </div>
            </a>
        @endforeach
    </div>
</section>


{{-- RESEP LAINNYA --}}
<section class="section">
    <div class="section-header">
        <h2 class="section-title">
            <span>Resep</span> Lainnya
        </h2>
    </div>

    <div class="recipe-grid">
        @php
            $otherPreview = [
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
                    'time'  => '25 Menit',
                    'serve' => '3 Orang',
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

        @foreach ($otherPreview as $recipe)
            <a href="{{ route('recipes.show', $recipe['slug']) }}" class="recipe-card">
                <img
                    src="{{ $recipe['img'] }}"
                    class="recipe-img"
                    alt="{{ $recipe['title'] }}"
                    loading="lazy"
                >

                <div class="recipe-name">{{ $recipe['title'] }}</div>

                <div class="recipe-meta">
                    <span>⏱ {{ $recipe['time'] }}</span>
                    <span>👤 {{ $recipe['serve'] }}</span>
                </div>
            </a>
        @endforeach
    </div>
</section>


    </div>
@endsection
