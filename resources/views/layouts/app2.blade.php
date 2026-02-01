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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&family=Raleway:ital,wght@0,100..900;1,100..900&family=Zen+Kaku+Gothic+New&display=swap" rel="stylesheet">

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    @yield('style')

</head>
    <body>
        <nav class="navbar navbar-expand-sm navbar-light bg-dark shadow-sm text-white fixed-top">
            <div class="container">
                <a class="navbar-brand text-white" href="/works">
                    <i class="fa-solid fa-angles-left"></i>Works List
                </a>

                <div class="navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav ms-5 ps-5">
                        <h3 class="m-0 text-start fw-light text-nowrap d-none d-sm-block">
                           
                        </h3>
                    </ul>

                </div>
            </div>
        </nav>

        @yield('content')


    </body>

</html>
