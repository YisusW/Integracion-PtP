<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-laravel navbar-dark navbar-p2p-black">
            <div class="container">

                <a class="navbar-brand" href="{{ url('http://www.placetopay.com') }}" target="_blank">
                    <img src="{{ asset('images/p2p-logo_White.svg') }}" width="100" height="auto" class="d-inline-block align-top" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        <li class="nav-item">
                            <a class="nav-link text-success" href="{{ url('home') }}">{{ config( 'app.commerce_name' , 'Nombre comercio no configurado' ) }}</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('fqa') }}">{{ __('Preguntas Frecuentes (FAQ)') }}</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4 mb-5">
            @yield('content')
        </main>

        <!-- Footer -->
        <footer class="footer">
            <div class="mt-4 mb-3">
              Integración Ambiente de Prueba <b class="text-success" >{{ config( 'app.commerce_name' , 'Nombre comercio no configurado' ) }}</b>
            </div>
        </footer>
        <!-- Footer -->

    </div>
</body>
</html>
