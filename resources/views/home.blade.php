@extends('plantilla')

@section('estilos')
    <link href="{{ url('css\homeStyle.css') }}"   rel="stylesheet">
    {{--<link href="{{ url('css\selectStyle.css') }}" rel="stylesheet"> --}}
@endsection

@section('titulo', 'Questions Challenge')

@section('contenido')
    <section>
        <figure id="logoHome">
            <img src="images\questionChallenge.png" alt="Foto de logo" />
        </figure>
        <a class="jugarHome" href="Select" name ="JugarHome"><button>Jugar</button></a>
    </section>
@endsection