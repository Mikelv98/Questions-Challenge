@extends('plantilla')
@extends('layouts.app')

@section('estilos')
    {{-- <link href="{{ url('css\homeStyle.css') }}"   rel="stylesheet"> --}}
    <link href="{{ url('css\selectStyle.css') }}" rel="stylesheet">
@endsection
@section('contenido')
<section id="Seleccion">
    <a id="Opciones" href="/">
        <h1 class="titulo">El ganador es: {{ $Ganador }}</h1>
        <hr class="dividir" />
        <h1 class="titulo">Tu puntuacion es de: {{ $Puntuacion }}</h1>
    </a>
    <a id="Opciones" href="/">
        <h1 class="titulo">Aceptar</h1>
    </a>
</section>
@endsection
