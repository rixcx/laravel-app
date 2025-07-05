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
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @vite(['resources/css/app.scss'])
    @yield('styles')
</head>
    <body>
      <x-header />
       <main class="main">
          @yield('content')
       </main>
    
    <x-footer />
    @vite(['resources/js/app.js'])
    </body>
</html>
