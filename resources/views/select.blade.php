@extends('plantilla')

@section('estilos')
    {{-- <link href="{{ url('css\homeStyle.css') }}"   rel="stylesheet"> --}}
    <link href="{{ url('css\selectStyle.css') }}" rel="stylesheet">
@endsection

@section('titulo', 'Questions Challenge')

@section('contenido')
    <section id="Seleccion">
        <h1>Questions Challenge</h1>
        <form id="Opciones" method="post">
            <hr>
            <h3>Seleccione una tematica</h3>
            <select id="Tematica">
                <option value="uno">Tematica 1</option>
                <option value="dos">Tematica 2</option>
                <option value="tres">Tematica 3</option>
            </select>

            <h3>Seleccione el numero de jugadores</h3>
            <select id="Jugadores">
                <option value="uno">Un Jugador</option>
                <option value="dos">Dos Jugadores</option>
                <option value="tres">Tres Jugadores</option>
            </select>

            <h3>Escoja un personaje</h3>
            <figure id="selectImg">
                <img class="selectPersonaje" src="images\questionChallenge3.png" alt="Personaje 1">
                <img class="selectPersonaje" src="images\questionChallenge3.png" alt="Personaje 2">
                <img class="selectPersonaje" src="images\questionChallenge3.png" alt="Personaje 3">
                <img class="selectPersonaje" src="images\questionChallenge3.png" alt="Personaje 4">
                <img class="selectPersonaje" src="images\questionChallenge3.png" alt="Personaje 5">
                <img class="selectPersonaje" src="images\questionChallenge3.png" alt="Personaje 6">
            </figure>

            <hr>

            <button type="submit">Empezar</button>
        </form>

    </section>

@endsection