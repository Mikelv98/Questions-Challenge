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
                <option>Tematicas</option>
                @foreach ($tematicas as $tema)
                <option value="{{ $tema->id }}" {{ $tema->id }}>
                    {{ $tema->nombre }}</option>
            @endforeach>
            </select>

            <h3>Seleccione el número de jugadores</h3>
            <select id="Jugadores">
                <option>Jugadores</option>
                <option value="uno">1 Jugador</option>
                <option value="dos">2 Jugadores</option>
                <option value="tres">3 Jugadores</option>
            </select>

            <h3>Escoja un personaje</h3>
            <figure id="selectImg">

                <img class="selectPersonaje" src="images\avatares\harryPotter.png" alt="harryPotter">
                <img class="selectPersonaje" src="images\avatares\kemonito.png" alt="kemonito">
                <img class="selectPersonaje" src="images\avatares\perro.png" alt="perro">
                <img class="selectPersonaje" src="images\avatares\pikachu.png" alt="pikachu">
                <img class="selectPersonaje" src="images\avatares\robot.png" alt="robot">
                <img class="selectPersonaje" src="images\avatares\tabla.png" alt="tabla">

            </figure>

            <hr>

            <button type="submit">Empezar</button>
        </form>

    </section>

@endsection
