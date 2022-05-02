@extends('plantilla')

@section('estilos')
    {{-- <link href="{{ url('css\homeStyle.css') }}"   rel="stylesheet"> --}}
    <link href="{{ url('css\selectStyle.css') }}" rel="stylesheet">
@endsection

@section('titulo', 'Questions Challenge')

@section('contenido')
    <section id="Seleccion">
        <h1 class="titulo">Cómo Jugar</h1>
        <div class="container">
            <article class="episode">
                <div class="episode__number">1</div>
                <div class="episode__content">
                    <div class="title"><h3>Lorem</h3></div>
                    <div class="story">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fuga, adipisci hic! Dolore aspernatur ullam facere laborum nesciunt itaque ad libero cumque asperiores magni dignissimos, fuga quis? Ex voluptatibus nobis earum.</p>
                    </div>
                </div>
            </article>
            <article class="episode">
                <div class="episode__number">2</div>
                <div class="episode__content">
                    <div class="title"><h3>Lorem</h3></div>
                    <div class="story">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fuga, adipisci hic! Dolore aspernatur ullam facere laborum nesciunt itaque ad libero cumque asperiores magni dignissimos, fuga quis? Ex voluptatibus nobis earum.</p>
                    </div>
                </div>
            </article>
        </div>
    </section>

@endsection