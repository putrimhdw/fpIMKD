<footer class="site-footer">
    <div class="footer-container">

        {{-- LOGO --}}
        <div class="footer-logo">
            <span class="logo-cook">Cook</span><span class="logo-ora">ora</span>
        </div>

        {{-- TAGLINE --}}
        <p class="footer-tagline">
            “Energi baru untuk hidup yang lebih teratur, produktif, dan penuh semangat.”
        </p>

        {{-- NAVIGATION --}}
        <div class="footer-nav">
            <a href="{{ route('home') }}">Beranda</a>
            <a href="{{ route('recipes.search') }}">Cari Resep</a>
            <a href="{{ route('recipes.index') }}">Daftar Resep</a>

        </div>

        {{-- DIVIDER --}}
        <div class="footer-divider"></div>

        {{-- COPYRIGHT --}}
        <div class="footer-copy">
            © Cookora All Rights Reserved. Website by Cookora 2025
        </div>

    </div>
</footer>
