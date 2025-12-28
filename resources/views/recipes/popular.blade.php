@extends('layouts.app')

@section('content')
<section class="popular-page">

    <div class="popular-header">
        <h1><span>Resep</span> Populer</h1>
    </div>

    <div class="popular-grid">
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
                [
                    'title' => 'Nasi Kebuli',
                    'slug'  => 'nasi-kebuli',
                    'time'  => '90 Menit',
                    'serve' => '6 Orang',
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
                [
                    'title' => 'Sop Buntut',
                    'slug'  => 'sop-buntut',
                    'time'  => '120 Menit',
                    'serve' => '4 Orang',
                    'img'   => 'https://assets.unileversolutions.com/recipes-v3/125214-default.jpg?im=AspectCrop=(720,459);Resize=(720,459)',
                ],
                [
                    'title' => 'Tumis Sapi Saos Bawang',
                    'slug'  => 'tumis-sapi-saus-bawang',
                    'time'  => '30 Menit',
                    'serve' => '3 Orang',
                    'img'   => 'https://assets.unileversolutions.com/recipes-v3/125570-default.jpg?im=AspectCrop=(720,459);Resize=(720,459)',
                ],
                [
                    'title' => 'Rawon Daging Sapi',
                    'slug'  => 'rawon-daging-sapi',
                    'time'  => '90 Menit',
                    'serve' => '4 Orang',
                    'img'   => 'https://assets.unileversolutions.com/recipes-v3/125611-default.jpg?im=AspectCrop=(720,459);Resize=(720,459)',
                ],
            ];
        @endphp

        @foreach ($popularRecipes as $recipe)
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
