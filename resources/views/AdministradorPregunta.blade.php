@extends('plantilla')


@section('estilos')
    {{-- <link href="{{ url('css\homeStyle.css') }}"   rel="stylesheet"> --}}
    <link href="{{ url('css\selectStyle.css') }}" rel="stylesheet">
@endsection
@section('contenido')
    <section id="Seleccion">
        <a id="Opciones" href="{{ url('NuevaPregunta') }}">
            <h3 class="text-white">Nueva pregunta</h3>
            <hr class="dividir" />
        </a>

    </section>
    <section id="Seleccion">
        <table class="table highlight" cellspacing="0" width="75%" id="mytable">
            <thead class="thead" id="th1">
                <tr class="text-white">
                    <th>Descripcion</th>
                    <th>Respuesta Correcta</th>
                    <th>Respuesta 1</th>
                    <th>Respuesta 2</th>
                    <th>Puntaje</th>
                    <th>Tematica</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody id="th2">
                <!--enlace con la bdd-->
                @foreach ($preguntas as $pregunta)
                    <tr id="">
                        <td>
                            <a class="titulo">{{ $pregunta->descripcion }}</a>
                        </td>
                        <td>
                            <a class="titulo">{{ $pregunta->respuesta->respuestacorrecta }}</a>
                        </td>
                        <td>
                            <a class="titulo">{{ $pregunta->respuesta1 }}</a>
                        </td>
                        <td>
                            <a class="titulo">{{ $pregunta->respuesta2 }}</a>
                        </td>
                        <td>
                            <a class="titulo">{{ $pregunta->puntaje }}</a>
                        </td>
                        <td>
                            <a class="titulo">{{ $pregunta->tematica->nombre }}</a>
                        </td>
                        <td>
                            <a class="titulo" href="{{ url('/EditarPregunta', [$pregunta->id]) }}">Editar</a>
                        </td>
                        <td>
                            <a class="titulo" href="{{ url('/EliminarPregunta', [$pregunta->id]) }}">Eliminar</a>
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
    <section id="Seleccion">
        <a id="Opciones">
            {{ $preguntas->links() }}
            <hr class="dividir" />
        </a>

    </section>
@endsection
