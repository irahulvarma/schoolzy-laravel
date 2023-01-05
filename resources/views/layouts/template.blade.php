<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Schoolzy') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="d-flex flex-column min-vh-100">
    <div id="app"></div>
    <nav class="navbar bg-primary bg-body-tertiary">
        <div class="container-fluid">
            <span class="navbar-brand mb-0 h1">{{ config('app.name', 'Schoolzy') }}</span>
        </div>
    </nav>

    <main class="py-4">
        @yield('content')
    </main>

    <footer class="bg-primary mt-auto text-center text-lg-start">
        <!-- Copyright -->
        <div class="text-center p-3">
            ©{{ now()->year }} Copyright:
            <a class="text-dark" href="#">schoolzy.com</a>
        </div>
        <!-- Copyright -->
    </footer>    
</body>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>
</html>
