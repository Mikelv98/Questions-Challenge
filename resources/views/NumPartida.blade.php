@extends('plantilla')
@extends('layouts.app')

@section('estilos')
    {{-- <link href="{{ url('css\homeStyle.css') }}"   rel="stylesheet"> --}}
    <link href="{{ url('css\selectStyle.css') }}" rel="stylesheet">
@endsection
@section('contenido')
<section id="Seleccion">
    <a id="Opciones" href="/">
        <h1 class="titulo">Tu número de partida es: {{ $id }}</h1>
        <hr class="dividir" />
    </a>
    <a id="Opciones" href="/">
        <h1 class="titulo">Aceptar</h1>
    </a>
</section>
@endsection
