@extends('plantilla')

@section('estilos')
    {{-- <link href="{{ url('css\homeStyle.css') }}"   rel="stylesheet"> --}}
    <link href="{{ url('css\selectStyle.css') }}" rel="stylesheet">
@endsection

@section('titulo', 'Questions Challenge')

@section('contenido')
    <section id="Seleccion">
        <h1 class="titulo">Questions Challenge</h1>
        <form id="Opciones" action="{{route('Config')}}" method="post" name = "formPjs">
            @csrf
            <hr class="dividir" />
            <h3>Seleccione una tematica</h3>
            <select id="Tematica" name="Tematica">
                @foreach($tematica as $tematicas)
                    <option value="{{$tematicas->idTematica}}">{{$tematicas->Nombre}}</option>
                @endforeach
            </select>

            <h3>Seleccione el numero de jugadores</h3>
            <select id="cantJug" name="numJug">
                <option value="1">Un Jugador</option>
                <option selected value="2">Dos Jugadores</option>
                <option value="3">Tres Jugadores</option>
            </select>


            {{-- <h3>Escoja un personaje</h3>
            <figure id="selectImg">

                <img class="selectPersonaje" src="images\avatares\harryPotter.png" alt="harryPotter">
                <img class="selectPersonaje" src="images\avatares\kemonito.png" alt="kemonito">
                <img class="selectPersonaje" src="images\avatares\perro.png" alt="perro">
                <img class="selectPersonaje" src="images\avatares\pikachu.png" alt="pikachu">
                <img class="selectPersonaje" src="images\avatares\robot.png" alt="robot">
                <img class="selectPersonaje" src="images\avatares\tabla.png" alt="tabla">

            </figure>
            <button type="button" class="startSelect1" id="startSelect" data-bs-toggle="modal" data-bs-target="#Jugadores1">Seleccionar</button>

            <input type="hidden" id="playerUno" name="playerUno">
            <input type="hidden" id="playerDos" name="playerDos">
            <input type="hidden" id="playerTres" name="playerTres"> --}}
            <hr class="dividir"/>
            <button id="btnEmpezar" type="submit">Siguiente</button>
        </form>

    </section>
    @include('modals.Jugadores')
@endsection

@section('script')
    {{-- <script
                src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
                crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="{{ url('js\variables.js') }}"></script> --}}
@endsection
