@extends('plantilla')

@section('estilos')
    {{-- <link href="{{ url('css\homeStyle.css') }}"   rel="stylesheet"> --}}
    <link href="{{ url('css\selectStyle.css') }}" rel="stylesheet">
@endsection

@section('titulo', 'Questions Challenge')

@section('contenido')
    <section id="Seleccion">
        <h1 class="titulo">Questions Challenge</h1>
        <form id="Opciones" action="{{route('JuegoData')}}" method="post" name = "formPjs">
            @csrf
            <hr class="dividir" />
            <h3>Seleccione una tematica</h3>
            <select id="Tematica">
                <!-- <option value="uno">Tematica 1</option>
                <option value="dos">Tematica 2</option>
                <option value="tres">Tematica 3</option> -->
                @foreach($tematica as $tematicas)
                <option value="">{{$tematicas->Nombre}}</option>
                @endforeach
            </select>

            <h3>Seleccione el numero de jugadores</h3>
            <select id="cantJug" name="numJug">
                <option value="1">Un Jugador</option>
                <option selected value="2">Dos Jugadores</option>
                <option value="3">Tres Jugadores</option>
            </select>

            <h3>Escoja un personaje</h3>
            <figure id="selectImg">
                
                <img class="selectPersonaje" src="images/avatares/harryPotter.png" alt="">
                <img class="selectPersonaje" src="images/avatares/kemonito.png" alt="">
                <img class="selectPersonaje" src="images/avatares/perro.png" alt="">
                <img class="selectPersonaje" src="images/avatares/pikachu.png" alt="">
                <img class="selectPersonaje" src="images/avatares/robot.png" alt="">
                <img class="selectPersonaje" src="images/avatares/tabla.png" alt="">
            </figure>
            <button type="button" class="startSelect1" id="startSelect" data-bs-toggle="modal" data-bs-target="#Jugadores1">Seleccionar</button>
            <hr class="dividir"/>
            <input type="hidden" id="playerUno" name="playerUno">
            <input type="hidden" id="playerDos" name="playerDos">
            <input type="hidden" id="playerTres" name="playerTres">
            <button id="btnEmpezar" type="submit">Empezar</button>
        </form>

    </section>
           
@endsection
@include('modals.Jugadores')

<script 
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
            crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<script src="{{ url('js\variables.js') }}"></script>