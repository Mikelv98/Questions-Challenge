@extends('plantilla')


@section('estilos')
    {{-- <link href="{{ url('css\homeStyle.css') }}"   rel="stylesheet"> --}}
    <link href="{{ url('css\selectStyle.css') }}" rel="stylesheet" />
@endsection
@section('contenido')
    <section id="Seleccion">
        <h1 class="titulo">Continuar con partida</h1>

        <form method="POST" id="Opciones" action="{{ url('RecuperarPartida') }}">
            @csrf
            <div class="mb-8 text-center text-2xl ">
                @if ($errors->any())
                    <div>
                        <div class="font-medium text-red-600">{{ __('¡Datos Incorrectos!') }}</div>

                        <ul class="mt-3 list-disc list-inside text-sm text-red-600">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
            <hr class="dividir" />
            <h3>Folio de la partida</h3>
            <input type="text" id="id" name="id" required autofocus autocomplete="id">
            <h3>Temática de la partida</h3>
            <select name="tematica_id" required>
                <option value="">--</option>
                @foreach ($tematicas as $pre)
                    <option value="{{ $pre->id }}" {{ $pre->id }}>
                        {{ $pre->nombre }}</option>
                @endforeach
            </select>
            <hr class="dividir" />
            <button type="submit">Aceptar</button>
        </form>

    </section>
@endsection
