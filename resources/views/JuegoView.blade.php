<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="{{ url('images\questionChallenge3.png') }}">
    <!-- <link href="css/JuegoStyle.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="css/JuegoStyle.css">
    <script type="text/javascript" src="js/sigPreg.js"></script>
    <title>Question Challenge</title>
</head>

<body id="Juego">
    {{-- <h1>Game</h1> --}}
    <form id="Form" action="{{ route('JuegoPregunta') }}" method="post">
        @csrf

        @php
            $random = rand(1, $contadorP - 1);
            $randomlist = [];
            array_push($randomlist, $random);
            //  print_r($randomlist);
        @endphp



        <h4>{{ $preguntas2[$random]->descripcion }}</h4>
        
        @if (($random + 1) % 3 == 2)
            <input class="respuesta" type="button" value="{{ $preguntas2[$random]->respuesta1 }}">
            <input class="respuesta" type="button" value="{{ $preguntas2[$random]->respuesta2 }}">
            <input class="respuesta" type="button" value="{{ $preguntas2[$random]->respuestacorrecta }}">
        @elseif (($random + 1) % 3 == 1)
            <input class="respuesta" type="button" value="{{ $preguntas2[$random]->respuesta1 }}">
            <input class="respuesta" type="button" value="{{ $preguntas2[$random]->respuestacorrecta }}">
            <input class="respuesta" type="button" value="{{ $preguntas2[$random]->respuesta2 }}">
        @else
        <input class="respuesta" type="button" value="{{ $preguntas2[$random]->respuestacorrecta }}">
        <input class="respuesta" type="button" value="{{ $preguntas2[$random]->respuesta2 }}">
        <input class="respuesta" type="button" value="{{ $preguntas2[$random]->respuesta1 }}">
        @endif



        <input class="enviar" type="submit" value="Enviar">
    </form>

    <figure class='tablero'>
        <img id="imgTab" src="{{ url('images\Pantallas\Pantalla1.png') }}" alt="tablero de juego">
    </figure>

    <div id="Jugadores">
        @php
            $i = 0;
        @endphp
        @foreach ($ImgJugadores as $item)
            <figure class="avatares">
                <label for="">nombre: {{ $NameJugadores[$i] }}</label>
                <img src="{{ $item }}" alt="Avatar{{ $i + 1 }}">
                <label for="">puntuacion: {{ $PuntajeJugadores[$i] }}</label>
            </figure>
            @php
                $i++;
                $ii=$i;
            @endphp
        @endforeach

        <div id="Acciones">
            <form class="Accion" class="pr-8" action="{{ url('GuardarPartida', $ii) }}"
                method="post">
                @csrf
                @php
                    $i = 0;
                @endphp
                @foreach ($ImgJugadores as $item)

                        <input hidden name="imagen[]" value="{{ $item }}"/>
                        <input hidden name="puntaje[]" value="{{ $PuntajeJugadores[$i] }}" />
                        <input hidden name="nombre[]" value="{{ $NameJugadores[$i] }}"/>
                    @php
                        $i++;
                    @endphp

                @endforeach
                <input hidden name="tematica" value="{{ $preguntas2[$random]->tematica_id }}"/>
                <input class="enviar" type="submit" value="Guardar">
            </form>

            <form class="Accion" action="{{ route('AbandonarPartida') }}" method="post">
                @csrf
                <input class="enviar" type="submit" value="Abandonar">
            </form>
        </div>
        
    </div>

</body>

</html>
