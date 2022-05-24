@extends('plantilla')

@section('estilos')
    {{-- <link href="{{ url('css\homeStyle.css') }}"   rel="stylesheet"> --}}
    {{-- <link href="{{ url('css\selectStyle.css') }}" rel="stylesheet"> --}}
    <link href="{{ url('css\PlayersStyle.css') }}" rel="stylesheet">
@endsection

@section('titulo', 'Questions Challenge')

@section('contenido')
    <section id="Jugadores">
        <h1 class="titulo">Questions Challenge</h1>
        <form id="Opciones" action="{{route('JuegoData')}}" method="post" name = "formPjs">
            @csrf
            <hr class="dividir" />
            <input type="hidden" name="Tematica" id="Tematica" value="{{$Tematica}}">
            <input type="hidden" name="NumJugadores" id="NumJugadores" value="{{$NumeroJugadores}}">
            @for ($i = 0; $i < $NumeroJugadores; $i++)
                <h3>Ingrese el nombre del jugador {{$i+1}}</h3>
                <input type="text" class="Text" name="Nombrejugador{{$i+1}}" id="jugador{{$i+1}}" placeholder="... Nombre del Jugador ...">
                <h3>Selecciona un avatar</h3>

                <div class="switch-field{{$i+1}}">

                    <input type="radio" id="harryPotter{{$i+1}}" name="image{{$i+1}}" value="harryPotter" checked/>
                    <label for="harryPotter{{$i+1}}">
                        <img class="selectPersonajes" src="{{ url('images/avatares/harryPotter.png')}}" alt="">
                    </label>
                    
                    <input type="radio" id="kemonito{{$i+1}}" name="image{{$i+1}}" value="kemonito" />
                    <label for="kemonito{{$i+1}}">
                        <img class="selectPersonajes" src="{{ url('images/avatares/kemonito.png')}}" alt="">
                    </label>

                    <input type="radio" id="perro{{$i+1}}" name="image{{$i+1}}" value="perro" />
                    <label for="perro{{$i+1}}">
                        <img class="selectPersonajes" src="{{ url('images/avatares/perro.png')}}" alt="">
                    </label>

                    <input type="radio" id="pikachu{{$i+1}}" name="image{{$i+1}}" value="pikachu" />
                    <label for="pikachu{{$i+1}}">
                        <img class="selectPersonajes" src="{{ url('images/avatares/pikachu.png')}}" alt="">
                    </label>

                    <input type="radio" id="robot{{$i+1}}" name="image{{$i+1}}" value="robot" />
                    <label for="robot{{$i+1}}">
                        <img class="selectPersonajes" src="{{ url('images/avatares/robot.png')}}" alt="">
                    </label>

                    <input type="radio" id="tabla{{$i+1}}" name="image{{$i+1}}" value="tabla" />
                    <label for="tabla{{$i+1}}">
                        <img class="selectPersonajes" src="{{ url('images/avatares/tabla.png')}}" alt="">
                    </label>
                    
                </div>
            @endfor
            
            <hr class="dividir" />
            <button id="btnEmpezar" type="submit">Empezar</button>
        </form>

    </section>

    
@endsection

@section('scripts')

@endsection