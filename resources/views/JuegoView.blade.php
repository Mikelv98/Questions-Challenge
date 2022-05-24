<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="{{ url('images\questionChallenge3.png') }}">
    <!-- <link href="css/JuegoStyle.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="css/JuegoStyle.css">
    <title>Question Challenge</title>
</head>

<body id="Juego">
    {{-- <h1>Game</h1> --}}
    @php
        $random = rand(1, $contadorP - 1);
        $randomlist = [];
        array_push($randomlist, $random);
        //  print_r($randomlist);
    @endphp

    <form id="Form" action="{{ route('JuegoPregunta') }}" method="post">
        @csrf


        @php
            $random = rand(1, $contadorP - 1);
            $randomlist = [];
            array_push($randomlist, $random);
            //  print_r($randomlist);
        @endphp
        <h1>{{ $NameJugadores[$turno] }}</h1>
        <h4>{{ $preguntas2[$random]->descripcion }}</h4>

        @if (($random + 1) % 3 == 2)
            <div class="respuesta">
                <div class="respuesta">
                    <input type="radio" name="respuestaselec" id="respuesta1"
                        value="{{ $preguntas2[$random]->respuesta1 }}" class="hidden" />
                    <label for="respuesta1" class="radio respuesta">{{ $preguntas2[$random]->respuesta1 }}</label>
                </div>
                <div class="respuesta">
                    <input type="radio" name="respuestaselec" id="respuesta2"
                        value="{{ $preguntas2[$random]->respuesta2 }}" class="hidden" />
                    <label for="respuesta2" class="radio respuesta">{{ $preguntas2[$random]->respuesta2 }}</label>
                </div>
                <div class="respuesta">
                    <input type="radio" name="respuestaselec" id="respuestacorrecta"
                        value="{{ $preguntas2[$random]->respuestacorrecta }}" class="hidden" />
                    <label for="respuestacorrecta"
                        class="radio respuesta">{{ $preguntas2[$random]->respuestacorrecta }}</label>
                </div>
            </div>
        @elseif (($random + 1) % 3 == 1)
            <div class="respuesta">
                <div class="respuesta">
                    <input type="radio" name="respuestaselec" id="respuesta1"
                        value="{{ $preguntas2[$random]->respuesta1 }}" class="hidden" />
                    <label for="respuesta1" class="radio respuesta">{{ $preguntas2[$random]->respuesta1 }}</label>
                </div>
                <div class="respuesta">
                    <input type="radio" name="respuestaselec" id="respuestacorrecta"
                        value="{{ $preguntas2[$random]->respuestacorrecta }}" class="hidden" />
                    <label for="respuestacorrecta"
                        class="radio respuesta">{{ $preguntas2[$random]->respuestacorrecta }}</label>
                </div>
                <div class="respuesta">
                    <input type="radio" name="respuestaselec" id="respuesta2"
                        value="{{ $preguntas2[$random]->respuesta2 }}" class="hidden" />
                    <label for="respuesta2" class="radio respuesta">{{ $preguntas2[$random]->respuesta2 }}</label>
                </div>
            </div>
        @else
            <div class="respuesta">
                <div class="respuesta">
                    <input type="radio" name="respuestaselec" id="respuestacorrecta"
                        value="{{ $preguntas2[$random]->respuestacorrecta }}" class="hidden" />
                    <label for="respuestacorrecta"
                        class="radio respuesta">{{ $preguntas2[$random]->respuestacorrecta }}</label>
                </div>
                <div class="respuesta">
                    <input type="radio" name="respuestaselec" id="respuesta2"
                        value="{{ $preguntas2[$random]->respuesta2 }}" class="hidden" />
                    <label for="respuesta2" class="radio respuesta">{{ $preguntas2[$random]->respuesta2 }}</label>
                </div>
                <div class="respuesta">
                    <input type="radio" name="respuestaselec" id="respuesta1"
                        value="{{ $preguntas2[$random]->respuesta1 }}" class="hidden" />
                    <label for="respuesta1" class="radio respuesta">{{ $preguntas2[$random]->respuesta1 }}</label>
                </div>
            </div>
        @endif

        @php
            $i = 0;
        @endphp
        @foreach ($ImgJugadores as $item)
            <input hidden name="imagen[]" value="{{ $item }}" />
            <input hidden name="puntaje[]" value="{{ $PuntajeJugadores[$i] }}" />
            <input hidden name="nombre[]" value="{{ $NameJugadores[$i] }}" />
            @php
                $i++;
            @endphp
        @endforeach
        <input hidden name="tematica" value="{{ $preguntas2[$random]->tematica_id }}" />
        <input hidden name="cantjug" value="{{ $NumJug }}" />
        <input hidden name="idpreg" value="{{ $preguntas2[$random]->id}}" />
        <input hidden name="turno" value="{{ $turno }}" />
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
                $ii = $i;
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
                    <input hidden name="imagen[]" value="{{ $item }}" />
                    <input hidden name="puntaje[]" value="{{ $PuntajeJugadores[$i] }}" />
                    <input hidden name="nombre[]" value="{{ $NameJugadores[$i] }}" />
                    @php
                        $i++;
                    @endphp
                @endforeach
                <input hidden name="tematica" value="{{ $preguntas2[$random]->tematica_id }}" />
                <input hidden name="cantjug" value="{{ $NumJug}}" />
                <input hidden name="turno" value="{{ $turno }}" />
                <input class="enviar" type="submit" value="Guardar">
            </form>

            <form class="Accion" action="{{ route('Abandonar') }}" method="post">
                @csrf
                <input class="enviar" type="submit" value="Abandonar">
            </form>
        </div>

    </div>
    {{-- <script type="text/javascript" src="js/sigPreg.js"></script> --}}
    {{-- <script src="{{ url('js\sigPreg.js') }}"></script> --}}
    
    <script type="text/javascript" src="{{ url('js\sigPreg.js') }}"></script>
    <script>
        // let switchColor = document.getElementsByClassName('respuesta');
        // switchColor[0].onclick = () => {

        // }
        // switchColor[1].onclick = () => {

        // }
        // switchColor[2].onclick = () => {

        // }
    </script>
</body>
<style>
    input:checked~.radio {
        color: black;
        background-color: aquamarine;
    }

</style>

</html>
