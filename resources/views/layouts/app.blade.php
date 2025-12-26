<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Cookora')</title>
@vite('resources/js/app.js')

</head>

<body class="min-h-screen flex flex-col bg-gray-50">

    @include('layouts.header')

    <main class="flex-1">
        @yield('content')
    </main>

    @include('layouts.footer')

</body>
</html>
