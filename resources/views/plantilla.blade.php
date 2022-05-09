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
        <link 
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
            rel="stylesheet" 
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
            crossorigin="anonymous">
        
    </head>
    <body id="General">
        <header id="navBar">
            <figure>
                <a href="{{ url('/') }}"><img id="logo" src="{{ url('images\questionChallenge3.png')}}" alt="Foto de logo" /></a>
            </figure>
            
            <nav>
                <ul id="nav_links">
                    <li><a href="#" >Categorias</a></li>
                    <li><a href="ComoJugar" >Como Jugar</a></li>
                    <li><a href="Preguntas" >Preguntas Frecuentes</a></li>
                </ul>
            </nav>
            <a id="admin" href="#" name ="adminHome">
                <button type="button"  title="Registro Admin" data-bs-toggle="modal" data-bs-target="#Administrador">Admin</button>
            </a>
        </header>

        @include('modals.Admin')

        @yield('contenido')

        @yield('script')
        
        <script 
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
            crossorigin="anonymous">
        </script>
    
    </body>
</html>
{{--  class="antialiased" --}}