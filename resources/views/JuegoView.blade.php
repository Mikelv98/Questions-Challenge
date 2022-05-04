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
            <h4>Aqui va la pregunta</h4>
            <input class="respuesta" type="button" value="Respuesta 1">
            <input class="respuesta" type="button" value="Respuesta 2">
            <input class="respuesta" type="button" value="Respuesta 3">
            <input id="enviar" type="submit" value="Enviar">
        </form>
        <figure id="Tablero">
            <img src="{{ url('images\Pantallas\Pantalla1.png') }}" alt="Tablero">
        </figure>
        
        <div id="Jugadores">
            <figure class="avatares">
                <img src="images/avatares/harryPotter.png" alt="Avatar1">
                <label for="">puntuacion: 100</label>
            </figure>
            <figure class="avatares">
                <img src="images/avatares/kemonito.png" alt="Avatar1">
                <label for="">puntuacion: 100</label>
            </figure>
            <figure class="avatares">
                <img src="images/avatares/robot.png" alt="Avatar1">
                <label for="">puntuacion: 100</label>
            </figure>
        </div>
        

        <!-- <div class="flex justify-between m-4">
        <div class="flex flex-col h-full max-w-lg mx-auto bg-gray-800 rounded-lg">
            <img class="rounded-lg rounded-b-none"
            src="{{ url('images\Pantallas\Pantalla1.png') }}" alt="Tablero" loading="lazy" />
        </div>
    </div> -->
</body>
</html>