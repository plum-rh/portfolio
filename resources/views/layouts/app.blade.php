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
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark shadow-sm text-white fixed-top fw-bold">
            <div class="container">
                <a class="navbar-brand text-white" href="/">
                    <img src='{{ asset ("images/plum_logo_p2.png")}}' alt="plum_logo" style="width: 75px;">
                    {{-- <i class="fa-solid fa-angles-left"></i>Works List --}}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent" >
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav  me-auto">
                        <li class="nav-item">
                            <a class="nav-link fs-5 mt-1 p-0 pe-3" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-5 mt-1 p-0 pe-3" href="/#about">About Me</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-5 mt-1 p-0 pe-3" href="/works">Works List</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled fs-5 mt-1 p-0 pe-3" href="/works">Blog</a>
                        </li>

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
