<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Qme')</title>
    @vite(['resources/css/app.scss'])
</head>
<body>
    <x-header />
    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} Qme</p>
    </footer>

    @vite(['resources/js/app.js'])
</body>
</html>
