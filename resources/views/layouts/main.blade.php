<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title', 'Cookora')</title>

    <style>
        :root {
            --orange: #EF7722;
            --gray: #666666;
            --light-cream: #FFF3E9;
            --container-width: 1150px;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: "Inter", system-ui, -apple-system, sans-serif;
            background: #ffffff;
            color: #222;
        }

        /* --- NAVBAR --- */
        .navbar {
            width: 100%;
            display: flex;
            justify-content: center;
            border-bottom: 1px solid #eee;
            background: #fff;
            padding: 20px 0;
            position: sticky;
            top: 0;
            z-index: 50;
        }

        .navbar-container {
            width: 90%;
            max-width: var(--container-width);
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .brand {
            font-size: 28px;
            font-weight: 700;
            color: #333;
            text-decoration: none;
        }

        .brand span {
            color: var(--orange);
        }

        .menu {
            display: flex;
            gap: 40px;
            align-items: center;
        }

        .menu a {
            text-decoration: none;
            color: var(--gray);
            /* Warna default #666666 */
            font-weight: 500;
            font-size: 16px;
            transition: color .18s;
            border-bottom: none;
            /* Memastikan tidak ada garis */
        }

        .menu a:hover {
            color: var(--orange);
        }

        /* Style saat menu aktif - TANPA GARIS BAWAH */
        .menu a.active {
            color: var(--orange) !important;
            font-weight: 600;
            border-bottom: none !important;
            text-decoration: none !important;
        }

        /* Mobile */
        .burger {
            display: none;
            cursor: pointer;
            font-size: 24px;
        }

        @media (max-width: 820px) {
            .menu {
                display: none;
                position: absolute;
                right: 0;
                top: 64px;
                background: #fff;
                flex-direction: column;
                border: 1px solid #eee;
                padding: 20px;
                gap: 15px;
                width: 200px;
            }

            .menu.open {
                display: flex;
            }

            .burger {
                display: block;
            }
        }

        /* --- CONTAINER --- */
        .container {
            width: 90%;
            max-width: var(--container-width);
            margin: 0 auto;
            min-height: 60vh;
        }

        /* --- FOOTER (Dikecilkan & Lebih Ramping) --- */
        footer.main-footer {
            background-color: var(--light-cream);
            padding: 30px 0 20px 0;
            /* Dikurangi dari 60px ke 30px */
            text-align: center;
            margin-top: 40px;
            /* Dikurangi dari 60px ke 40px */
        }

        .footer-logo {
            font-size: 28px;
            /* Dikecilkan dari 42px ke 28px */
            font-weight: 700;
            color: #000;
            margin-bottom: 10px;
            /* Jarak dikurangi */
        }

        .footer-logo span {
            color: var(--orange);
        }

        .footer-tagline {
            color: #444;
            font-style: italic;
            font-size: 14px;
            /* Dikecilkan dari 16px ke 14px */
            max-width: 500px;
            margin: 0 auto 20px auto;
            line-height: 1.4;
        }

        .footer-links {
            list-style: none;
            padding: 0;
            display: flex;
            justify-content: center;
            gap: 25px;
            /* Jarak antar link dipersempit */
            margin-bottom: 25px;
        }

        .footer-links a {
            text-decoration: none;
            color: var(--orange);
            font-weight: 500;
            font-size: 14px;
        }

        .footer-divider {
            border: 0;
            border-top: 1px solid #F8B486;
            width: 90%;
            max-width: var(--container-width);
            margin: 0 auto 15px auto;
            opacity: 0.5;
            /* Dibuat lebih tipis agar tidak terlalu mencolok */
        }

        .copyright {
            color: var(--orange);
            font-size: 12px;
            /* Dikecilkan */
            text-align: right;
            width: 90%;
            max-width: var(--container-width);
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <nav class="navbar">
        <div class="navbar-container">
            <a class="brand" href="{{ route('home') }}"><span>Cook</span>ora</a>
            <div class="burger" onclick="toggleMenu()">☰</div>

            <div id="menu" class="menu">
                <a href="{{ route('home') }}" class="{{ request()->is('/') ? 'active' : '' }}">Beranda</a>

                <a href="{{ route('resep.cari') }}" class="{{ request()->is('cari-resep*') ? 'active' : '' }}">Cari
                    Resep</a>

                <a href="{{ route('resep.daftar') }}"
                    class="{{ request()->is('daftar-resep*') ? 'active' : '' }}">Daftar Resep</a>
            </div>
        </div>
    </nav>

    <main class="container">
        @yield('hero')
        @yield('content')
    </main>

    <footer class="main-footer">
        <div class="footer-logo"><span>Cook</span>ora</div>
        <p class="footer-tagline">“Energi baru untuk hidup yang lebih teratur, produktif, dan penuh semangat.”</p>

        <ul class="footer-links">
            <li><a href="{{ route('home') }}">Beranda</a></li>
            <li><a href="{{ route('resep.cari') }}">Cari Resep</a></li>
            <li><a href="{{ route('resep.daftar') }}">Daftar Resep</a></li>
        </ul>

        <hr class="footer-divider">

        <div class="copyright text-sm text-gray-500">
            &copy; {{ date('Y') }} <strong>Cookora</strong>. All Rights Reserved.
        </div>
    </footer>

    <script>
        function toggleMenu() {
            document.getElementById('menu').classList.toggle('open');
        }
    </script>
</body>

</html>
