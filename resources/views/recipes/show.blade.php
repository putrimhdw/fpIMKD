@extends('layouts.app')

@section('content')
@php
$recipes = config('recipes');
$recipe = $recipes[$slug] ?? abort(404);
@endphp

    <section class="recipe-detail">
        {{-- IMAGE --}}
        <img src="{{ $recipe['img'] }}" alt="{{ $recipe['title'] }}" class="recipe-cover">

        {{-- TITLE --}}
        <h1 class="recipe-title">{{ $recipe['title'] }}</h1>

        {{-- INFO CARD --}}
        <div class="recipe-info">
            <div class="info-card">
                <span>⏱</span>
                <p>Waktu Masak</p>
                <strong>{{ $recipe['time'] }}</strong>
            </div>
            <div class="info-card">
                <span>📊</span>
                <p>Kesulitan</p>
                <strong>{{ $recipe['level'] }}</strong>
            </div>
            <div class="info-card">
                <span>👥</span>
                <p>Porsi</p>
                <strong>{{ $recipe['serve'] }}</strong>
            </div>
        </div>

        {{-- BAHAN --}}
        <div class="recipe-section">
            <h3>Bahan</h3>
            <ul>
                @foreach ($recipe['ingredients'] as $item)
                    <li>{{ $item }}</li>
                @endforeach
            </ul>
        </div>

        {{-- CARA MEMASAK --}}
        <div class="recipe-section">
            <h3>Cara Memasak</h3>
            <ol>
                @foreach ($recipe['steps'] as $step)
                    <li>{{ $step }}</li>
                @endforeach
            </ol>
        </div>
    </section>
@endsection
