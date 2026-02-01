<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> @yield('title', 'PLUM')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <link rel="shortcut icon" href="{{ asset('images/plum_logo_p3.png') }}">

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
<body  style="background-image: url('{{ asset('images/main.png') }}');">
<div class="bg-overlay"></div>
    <div id="app">
                <nav class="navbar navbar-expand-sm navbar-light bg-dark shadow-sm text-white fixed-top">
            <div class="container">
                <a class="navbar-brand text-white" href="/">
                    <i class="fa-solid fa-angles-left"></i>Home
                </a>

                <div class="navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mx-auto">
                        <h3 class="m-0 text-center fw-light text-nowrap d-none d-sm-block me-5 pe-5">
                            WORKS
                        </h3>
                    </ul>

                </div>
            </div>
        </nav>

        <main class="container-sm text-center">
                @yield('content')
        </main>
    </div>
</body>
</html>
