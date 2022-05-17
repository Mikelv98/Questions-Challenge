@extends('plantilla')
@extends('layouts.app')

@section('estilos')
    {{-- <link href="{{ url('css\homeStyle.css') }}"   rel="stylesheet"> --}}
    <link href="{{ url('css\selectStyle.css') }}" rel="stylesheet">
@endsection
@section('contenido')
<section id="Seleccion">
    <a id="Opciones" href="{{ url('AdministradorTematicas') }}">
        <h1 class="titulo">Crear tematicas</h1>
        <hr class="dividir" />
    </a>
    <a id="Opciones" href="{{ url('AdministradorPreguntas') }}">
        <h1 class="titulo">Crear preguntas</h1>

    </a>

</section>
@endsection
