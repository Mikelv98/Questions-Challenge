@extends('plantilla')


@section('estilos')
    {{-- <link href="{{ url('css\homeStyle.css') }}"   rel="stylesheet"> --}}
    <link href="{{ url('css\selectStyle.css') }}" rel="stylesheet">
@endsection
@section('contenido')
    <section id="Seleccion">
        <h1 class="titulo">Editar Tematica</h1>

        <form method="POST" id="Opciones" action="{{ url('updatetematica', [$tematicas->id]) }}">
            @csrf @method('PATCH')
            <div class="mb-8 text-center text-2xl ">
                @if ($errors->any())
                    <div >
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
            <h3>Nombre de la tematica</h3>
            <input type="text" id="nombre" name="nombre" required autofocus autocomplete="nombre" value="{{ $tematicas->nombre }}">
            <h3>Descripción de la tematica</h3>
            <input type="text" id="descripcion" name="descripcion" required autofocus autocomplete="descripcion" value="{{ $tematicas->descripcion }}">
            <hr class="dividir" />
            <button type="submit">Editar</button>
        </form>

    </section>
@endsection
