<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Inicio</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- Scripts -->
        <script src="{{ asset(mix('js/app.js')) }}" defer></script>
        <!-- Styles -->
        <link href="{{ asset(mix('css/app.css')) }}" rel="stylesheet">
        <link rel="stylesheet" href="{!! asset('css/navbar.css') !!}">
        <link rel="stylesheet" href="{!! asset('css/welcome.css') !!}">
    </head>
    <body>
        <!-- <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif -->

        <nav class="navbar navbar-expand-lg navbar-light bg-light"  >
            <div class="container-fluid">
                <a class="navbar-brand" >Tatleon</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Inicio</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="/services">Servicios</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="/support">Soporte</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="/about">Acerca </a>
                    </li>
                </ul>
                <span class="navbar-text">
                    <a class="nav-link" href="/register">Registrarse</a>
                </span>
                <span class="navbar-text">
                    <a class="nav-link" href="/login">Iniciar Sesión</a>
                </span>
                </div>
            </div>
        </nav>

        <br>

        <div class="container" align="center" style="padding:2%;">
            <img src="{!! asset('img/unsa_logo.png') !!}" alt="UNSA Logo" id="logo">
        </div>

        @if (1==1)
        <?php
        echo "<br>";
        echo "<div class=\"container\" align=\"center\">";
        echo "<h3 class=\"display-5\" > Bienvenido(a) " . "</h3>";
        echo "</div>";
        ?>
        @endif


        <div class="container" align="center">
            <br>

            <div class="container" id="button_box">
                <br><br>
                <div class="container" align="center">
                    <a href="services/link_repository" class="btn btn-primary"> Repositorio de Enlaces</a>
                    <a href="services/teacher_record" class="btn btn-danger"> Registro de Docentes</a>
                    <a href="services/shared_resources" class="btn btn-warning"> Recursos Compartidos</a>
                    <br>
                    <a href="#" class="btn btn-primary index_button"> Coming soon... </a>
                    <a href="#" class="btn btn-danger index_button"> Coming soon... </a>
                    <a href="#" class="btn btn-warning index_button"> Coming soon... </a>
                    <br>
                    <a href="#" class="btn btn-primary index_button"> Coming soon... </a>
                    <a href="#" class="btn btn-danger index_button"> Coming soon... </a>
                    <a href="#" class="btn btn-warning index_button"> Coming soon... </a>
                </div>
                <br><br>

        </div>
    <br><br>

    <div class="container" style="display: block;">
        Made by
        <img src="{!! asset('img/equipo_logo.jpg') !!}" alt="The Delta Team Logo" id="TDT_logo">
    </div>

    </body>
</html>
