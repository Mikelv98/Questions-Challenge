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
                <img id="logo" src="images\questionChallenge3.png" alt="Foto de logo" />
            </figure>
            
            <nav>
                <ul id="nav_links">
                    <li><a href="#" >Categorias</a></li>
                    <li><a href="#" >Como Jugar</a></li>
                    <li><a href="#" >Preguntas Frecuentes</a></li>
                </ul>
            </nav>
            <a id="admin" href="#" name ="adminHome"><button>Admin</button></a>
        </header>

        @yield('contenido')
        
    
    </body>
</html>
{{--  class="antialiased" --}}