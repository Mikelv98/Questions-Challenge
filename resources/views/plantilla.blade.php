<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="{{ url('images\questionChallenge3.png') }}">
        <title>@yield('titulo')</title>
        @yield('estilos')
        {{-- <link href="{{ url('css\headerStyle.css') }}" rel="stylesheet"> --}}
        <link href="{{ url('css\plantillaStyle.css') }}" rel="stylesheet">

    </head>
    <body>
        <header id="navBar">
            <figure>
                <a href="{{ url('/') }}"><img id="logo" src="images\questionChallenge3.png" alt="Foto de logo" /></a>
            </figure>

            <nav>
                <ul id="nav_links">
                    <li><a href="#" >Categorias</a></li>
                    <li><a href="ComoJugar" >Como Jugar</a></li>
                    <li><a href="Preguntas" >Preguntas Frecuentes</a></li>
                </ul>
            </nav>

<div >
    @if (Route::has('login'))
        <div class="">
            @auth
                <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
            @else
                <a id="admin" href="{{ route('login') }}" name ="adminHome"><button>Admin</button></a>
            @endauth
        </div>
    @endif

        </header>

        @yield('contenido')


    </body>
</html>
{{--  class="antialiased" --}}
