@extends('plantilla')

@section('estilos')
    {{-- <link href="{{ url('css\homeStyle.css') }}"   rel="stylesheet"> --}}
    <link href="{{ url('css\selectStyle.css') }}" rel="stylesheet">
@endsection

@section('titulo', 'Questions Challenge')

@section('contenido')
<section id="Seleccion">
    <h1>Preguntas Frecuentes</h1>
    <div style="visibility: hidden; position: absolute; width: 0px; height: 0px;">
        <svg xmlns="http://www.w3.org/2000/svg">
            <symbol viewBox="0 0 24 24" id="expand-more">
                <path d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6z"/><path d="M0 0h24v24H0z" fill="none"/>
            </symbol>
            <symbol viewBox="0 0 24 24" id="close">
                <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/><path d="M0 0h24v24H0z" fill="none"/>
            </symbol>
        </svg>
    </div>
    <details open> <!--Pueden poner "open" en la pregunta para que por defecto aparezca como abierta -->
        <summary>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolore commodi consectetur, laborum cum obcaecati error. Dolorem dicta corporis eaque, libero dignissimos consequatur? Laboriosam, commodi illum debitis nesciunt perspiciatis aperiam nulla.
            <svg class="control-icon control-icon-expand" width="24" height="24" role="presentation"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#expand-more" /></svg>
            <svg class="control-icon control-icon-close" width="24" height="24" role="presentation"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#close" /></svg>
        </summary>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolore commodi consectetur, laborum cum obcaecati error.</p>
    </details>
    <details>
        <summary>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolore commodi consectetur, laborum cum obcaecati error. Dolorem dicta corporis eaque, libero dignissimos consequatur? Laboriosam, commodi illum debitis nesciunt perspiciatis aperiam nulla.
            <svg class="control-icon control-icon-expand" width="24" height="24" role="presentation"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#expand-more" /></svg>
            <svg class="control-icon control-icon-close" width="24" height="24" role="presentation"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#close" /></svg>
        </summary>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolore commodi consectetur, laborum cum obcaecati error.</p>
    </details>
</section>
    
@endsection