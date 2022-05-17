@extends('plantilla')


@section('estilos')
    {{-- <link href="{{ url('css\homeStyle.css') }}"   rel="stylesheet"> --}}
    <link href="{{ url('css\selectStyle.css') }}" rel="stylesheet">
@endsection
@section('contenido')
    <section id="Seleccion">
        <a id="Opciones" href="{{ url('NuevaTematica') }}">
            <h3 class="text-white">Nueva tematica</h3>
            <hr class="dividir" />
        </a>

    </section>
    <section id="Seleccion">
        <table class="table highlight" cellspacing="0" width="75%" id="mytable">
            <thead class="thead" id="th1">
                <tr class="text-white">
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody id="th2">
                <!--enlace con la bdd-->
                @foreach ($tematicas as $tematica)
                    <tr id="">
                        <td>
                            <a class="titulo">{{ $tematica->nombre }}</a>
                        </td>
                        <td>
                            <a class="titulo">{{ $tematica->descripcion }}</a>
                        </td>
                        <td>
                            <a class="titulo" href="{{ url('/EditarTematica', [$tematica->id]) }}">Editar</a>
                        </td>
                        <td>
                            <a class="titulo" href="{{ url('/EliminarTematica', [$tematica->id]) }}">Eliminar</a>
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
    <section id="Seleccion">
        <a id="Opciones">
            {{ $tematicas->links() }}
            <hr class="dividir" />
        </a>

    </section>
@endsection
