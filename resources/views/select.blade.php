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
                @foreach ($avatar as $avatares)

                <h2
                class="mb-2 leading-tight tracking-tight font-bold text-gray-800 text-2xl md:text-3xl">
                {{ $avatares->foto }}</h2>
                <img class="h-full w-auto bg-cover mt-2"

                                                    src="data:image/png;base64,'.base64_encode(stripslashes({{ $avatares->foto }})) .' "
                                                    alt="{{ $avatares->name }}">
                @endforeach
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
