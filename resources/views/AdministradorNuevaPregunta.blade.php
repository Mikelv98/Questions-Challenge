@extends('plantilla')


@section('estilos')
    {{-- <link href="{{ url('css\homeStyle.css') }}"   rel="stylesheet"> --}}
    <link href="{{ url('css\selectStyle.css') }}" rel="stylesheet" />
@endsection
@section('contenido')
    <section id="Seleccion">
        <h1 class="titulo">Nueva Pregunta</h1>

        <form method="POST" id="Opciones" action="{{ url('crearpregunta') }}">
            @csrf
            <div class="mb-8 text-center text-2xl ">
                @if ($errors->any())
                    <div>
                        <h3 class="font-medium text-red-600">{{ __('¡Datos Incorrectos!') }}</h3>
                        <ul class="mt-3 list-disc list-inside text-sm text-red-600">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
            <hr class="dividir" />
            <h3>Escribe la pregunta</h3>
            <input type="text" id="descripcion" name="descripcion" required autofocus autocomplete="descripcion">
            <h3>Respuesta correcta</h3>
            <input type="text" id="respuestacorrecta" name="respuestacorrecta" required autofocus
                autocomplete="respuestacorrecta">
            <h3>Respuesta incorrecta 1</h3>
            <input type="text" id="respuesta1" name="respuesta1" required autofocus autocomplete="respuesta1">
            <h3>Respuesta incorrecta 2</h3>
            <input type="text" id="respuesta2" name="respuesta2" required autofocus autocomplete="respuesta2">
            <h3>Puntaje</h3>
            <input type="text" id="puntaje" name="puntaje" required autofocus autocomplete="puntaje">
            <h3>Tematica</h3>
            <select name="tematica_id" required>
                <option value="">--</option>
                @foreach ($tematicas as $pre)
                    <option value="{{ $pre->id }}" {{ $pre->id }}>
                        {{ $pre->nombre }}</option>
                @endforeach
            </select>
            <hr class="dividir" />
            <button type="submit">Crear</button>
        </form>

    </section>
@endsection
