@extends('layouts.main')

@section('title','Beranda - Cookora')

@section('hero')
<section class="hero">
    <div class="left">
        <h1><span style="color:var(--orange)">Masak Lebih Mudah</span>, Hidup Lebih Cerita.</h1>
        <p>Cookora membantu kamu menciptakan, mengatur, dan menjalankan ide-ide terbaikmu dengan cara yang lebih mudah dan menyenangkan.</p>
        <a href="/resep" class="btn-cta">Jelajahi Resep</a>
    </div>
    <div class="right">
        <!-- letakkan file ilustrasi di public/images/chef.png -->
        <img src="{{ asset('images/chef-illustration.png') }}" alt="Chef illustration">
    </div>
</section>
@endsection

@section('content')
<section style="padding:40px 0;">
    <h2 style="text-align:center">Kenapa <span style="color:var(--orange)">Cookora</span> ?</h2>
    <p style="max-width:800px;margin:18px auto;text-align:center;color:#666">Deskripsi singkat ...</p>
    <!-- tambahkan card-icon seperti desain -->
</section>
@endsection
