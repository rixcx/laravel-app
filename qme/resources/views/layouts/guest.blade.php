<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>
    @hasSection('title')
        @yield('title') - Qme
    @else
        Qme
    @endif
    </title>
    @vite(['resources/css/app.scss'])
    @stack('styles')
    
    <!-- @vite(['resources/css/app.css', 'resources/js/app.js']) -->
    @vite(['resources/css/app.scss'])

</head>
<body>
    <x-header />
    <main class="main">
        @yield('content')
    </main>
    <x-footer />
    <!-- @if (Route::has('login'))
        <div class="h-14.5 hidden lg:block">hoge</div>
    @endif -->
    @vite(['resources/js/app.js'])
</body>
</html>
