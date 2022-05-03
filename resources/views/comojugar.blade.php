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
                    <div class="title"><h3>Botón de jugar</h3></div>
                    <div class="story">
                        <p>Dale clic al botón de jugar, para comenzar con el juego.</p>
                    </div>
                </div>
            </article>
            <article class="episode">
                <div class="episode__number">2</div>
                <div class="episode__content">
                    <div class="title"><h3>Seleción de tematica</h3></div>
                    <div class="story">
                        <p>Selecciona la tematica del juego.</p>
                    </div>
                </div>
            </article>
            <article class="episode">
                <div class="episode__number">3</div>
                <div class="episode__content">
                    <div class="title"><h3>Selección de cantidad de jugadores</h3></div>
                    <div class="story">
                        <p>Selecciona cuantas personas van a estar jugando.</p>
                    </div>
                </div>
            </article>
            <article class="episode">
                <div class="episode__number">4</div>
                <div class="episode__content">
                    <div class="title"><h3>Ingreso de nombre y selccion de avatar de cada jugador</h3></div>
                    <div class="story">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fuga, adipisci hic! Dolore aspernatur ullam facere laborum nesciunt itaque ad libero cumque asperiores magni dignissimos, fuga quis? Ex voluptatibus nobis earum.</p>
                    </div>
                </div>
            </article>
            <article class="episode">
                <div class="episode__number">5</div>
                <div class="episode__content">
                    <div class="title"><h3>Empezar</h3></div>
                    <div class="story">
                        <p>Dale clic al botón de empezar, para iniciar el juego.</p>
                    </div>
                </div>
            </article>
            <article class="episode">
                <div class="episode__number">6</div>
                <div class="episode__content">
                    <div class="title"><h3>Contestar las preguntas correctamente</h3></div>
                    <div class="story">
                        <p>Para cada jugador se le presentará una pregunta de diferente dificultad, contesta correctamente para poder avanzar en el tablero.</p>
                        <p>Si contestas erroneamente, se te mostrara la respeusta correcta despues de seleccionar una respuesta.</p>
                    </div>
                </div>
            </article>
            <article class="episode">
                <div class="episode__number">7</div>
                <div class="episode__content">
                    <div class="title"><h3>Avanzar en el tablero</h3></div>
                    <div class="story">
                        <p>Sigue contestando correctamente, para llegar a la meta.</p>
                    </div>
                </div>
            </article>
            <article class="episode">
                <div class="episode__number">8</div>
                <div class="episode__content">
                    <div class="title"><h3>Ganar</h3></div>
                    <div class="story">
                        <p>Llega a la meta antes que nadie para ganar.</p>
                    </div>
                </div>
            </article>
        </div>
    </section>

@endsection
