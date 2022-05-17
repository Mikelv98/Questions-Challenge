<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="{{ url('images\questionChallenge3.png') }}">
    <link href="{{ url('css\JuegoStyle.css') }}"  rel="stylesheet">
    <title>Question Challenge</title>
</head>
<body id="Juego">
        {{-- <h1>Game</h1> --}}
        <form id="Form" action="{{route('JuegoPregunta')}}" method="post">
            @csrf

            @php
                $random = rand(1,$contadorP-1);
                $randomlist = [];
                array_push($randomlist,$random);
                print_r($randomlist);
            @endphp
            

            <h1>{{$random}}</h1>
            <h4>{{$preguntas[$random]->Descripcion}}</h4>
            <h3>{{$respuestasc[$random]->RespuestaCorrecta}}</h3>
            <input class="respuesta" type="button" value="{{$preguntas[$random]->Respuesta1}}">
            <input class="respuesta" type="button" value="{{$preguntas[$random]->Respuesta2}}">
            <input class="respuesta" type="button" value="{{$respuestasc[$random]->RespuestaCorrecta}}">
            <input id="enviar" type="submit" value="Enviar">
        </form>
        <figure id="Tablero">
            <img src="{{ url('images\Pantallas\Pantalla1.png') }}" alt="Tablero">
        </figure>

        <div id="Jugadores">
            @php
                $i=0;
            @endphp
            @foreach ($ImgJugadores as $item)
                <figure class="avatares">
                    <img src="{{ $item}}" alt="Avatar{{$i+1}}">
                    <label for="">puntuacion: {{$PuntajeJugadores[$i]}}</label>
                </figure>
                @php
                    $i++;
                @endphp
            @endforeach

            {{-- <figure class="avatares">
                <img src="images/avatares/kemonito.png" alt="Avatar1">
                <label for="">puntuacion: 100</label>
            </figure>
            <figure class="avatares">
                <img src="images/avatares/robot.png" alt="Avatar1">
                <label for="">puntuacion: 100</label>
            </figure> --}}
        </div>


        <!-- <div class="flex justify-between m-4">
        <div class="flex flex-col h-full max-w-lg mx-auto bg-gray-800 rounded-lg">
            <img class="rounded-lg rounded-b-none"
            src="{{ url('images\Pantallas\Pantalla1.png') }}" alt="Tablero" loading="lazy" />
        </div>
    </div> -->
</body>
</html>
