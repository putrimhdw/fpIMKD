@extends('layouts.app')

@section('content')
<section class="popular-page">

    <div class="popular-header">
        <h1><span>Resep</span> Terkini</h1>
    </div>

    <div class="popular-grid">
        @php
            $latestRecipes = [
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
                [
                    'title' => 'Telur Gembung',
                    'slug'  => 'telur-gembung',
                    'time'  => '15 Menit',
                    'serve' => '2 Orang',
                    'img'   => 'https://assets.unileversolutions.com/recipes-v3/125615-default.jpg?im=AspectCrop=(720,459);Resize=(720,459)',
                ],
                [
                    'title' => 'Risoles Ayam Telur Asin',
                    'slug'  => 'risoles-ayam-telur-asin',
                    'time'  => '60 Menit',
                    'serve' => '5 Orang',
                    'img'   => 'https://assets.unileversolutions.com/recipes-v3/125634-default.jpg?im=AspectCrop=(720,459);Resize=(720,459)',
                ],
                [
                    'title' => 'Makaroni Keju',
                    'slug'  => 'makaroni-keju',
                    'time'  => '30 Menit',
                    'serve' => '3 Orang',
                    'img'   => 'https://assets.unileversolutions.com/recipes-v3/125548-default.jpg?im=AspectCrop=(720,459);Resize=(720,459)',
                ],
                [
                    'title' => 'Nasi Goreng Spicy',
                    'slug'  => 'nasi-goreng-spicy',
                    'time'  => '20 Menit',
                    'serve' => '2 Orang',
                    'img'   => 'https://assets.unileversolutions.com/recipes-v3/125572-default.jpg?im=AspectCrop=(720,459);Resize=(720,459)',
                ],
                [
                    'title' => 'Ifumie Saos Jamur',
                    'slug'  => 'ifumie-saus-jamur',
                    'time'  => '35 Menit',
                    'serve' => '3 Orang',
                    'img'   => 'https://assets.unileversolutions.com/recipes-v3/125588-default.jpg?im=AspectCrop=(720,459);Resize=(720,459)',
                ],
                [
                    'title' => 'Ikan Goreng Telur Asin',
                    'slug'  => 'ikan-goreng-telur-asin',
                    'time'  => '35 Menit',
                    'serve' => '3 Orang',
                    'img'   => 'https://assets.unileversolutions.com/recipes-v3/125541-default.jpg?im=AspectCrop=(720,459);Resize=(720,459)',
                ],
            ];
        @endphp

        @foreach ($latestRecipes as $recipe)
            <a href="{{ route('recipes.show', $recipe['slug']) }}" class="popular-card">
                <img
                    src="{{ $recipe['img'] }}"
                    alt="{{ $recipe['title'] }}"
                    loading="lazy"
                >

                <h3>{{ $recipe['title'] }}</h3>

                <div class="popular-meta">
                    <span>⏱ {{ $recipe['time'] }}</span>
                    <span>👤 {{ $recipe['serve'] }}</span>
                </div>
            </a>
        @endforeach
    </div>

</section>
@endsection
