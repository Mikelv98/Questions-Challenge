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
        <div>
            <div class='flex flex-col relative max-w-sm w-full rounded-lg overflow-hidden mx-auto'>
                <textarea rows="3" class = 'border-gray-200 focus:border-teal-100 focus:ring focus:ring-yellow-300 focus:ring-opacity-50 rounded-md shadow-sm'></textarea>
            </div>
        </div>
        <div class="flex flex-col h-full max-w-lg mx-auto bg-gray-800 rounded-lg">
            <img class="rounded-lg rounded-b-none"
            src="{{ url('images\Pantallas\Pantalla1.png') }}" alt="Tablero" loading="lazy" />
        </div>
</body>
</html>
