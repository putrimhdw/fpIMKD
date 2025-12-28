<header class="site-header">
    <div class="header-container">
        <div class="logo">
            <span class="logo-cook">Cook</span><span class="logo-ora">ora</span>
        </div>

        <nav class="nav">
            <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">
                Beranda
            </a>

            <a href="{{ route('recipes.search') }}" class="{{ request()->routeIs('recipes.search') ? 'active' : '' }}">
                Cari Resep
            </a>

            <a href="{{ route('recipes.index') }}" class="{{ request()->routeIs('recipes.index') ? 'active' : '' }}">
                Daftar Resep
            </a>
        </nav>
    </div>
</header>
