@extends('plantilla')

@section('estilos')
    {{-- <link href="{{ url('css\homeStyle.css') }}"   rel="stylesheet"> --}}
    {{-- <link href="{{ url('css\selectStyle.css') }}" rel="stylesheet"> --}}
    <link href="{{ url('css\PlayersStyle.css') }}" rel="stylesheet">
@endsection

@section('titulo', 'Questions Challenge')

@section('contenido')
    <section id="Jugadores">
        <h1 class="titulo">Questions Challenge</h1>
        <form id="Opciones" action="{{route('JuegoData')}}" method="post" name = "formPjs">
            @csrf
            <hr class="dividir" />
            <input type="hidden" name="Tematica" id="Tematica" value="{{$Tematica}}">
            <input type="hidden" name="NumJugadores" id="NumJugadores" value="{{$NumeroJugadores}}">

            @for ($i = 0; $i < $NumeroJugadores; $i++)
                <h3>Ingrese el nombre del jugador {{$i+1}}</h3>
                <input type="text" class="Text" name="Nombrejugador{{$i+1}}" id="jugador{{$i+1}}" placeholder="... Nombre del Jugador ...">
                <h3>Selecciona un avatar</h3>

                <div class="switch-field{{$i+1}}">
                    
                    @if ($i == 0)
                        <input type="radio" class="radiocheck{{$i+1}}" id="harryPotter{{$i+1}}" name="image{{$i+1}}" value="harryPotter" checked/>
                    @else
                        <input type="radio" class="radiocheck{{$i+1}}" id="harryPotter{{$i+1}}" name="image{{$i+1}}" value="harryPotter"/>
                    @endif
                    <label for="harryPotter{{$i+1}}">
                        <img class="selectPersonajes img{{$i+1}}" src="{{ url('images/avatares/harryPotter.png')}}" alt="">
                    </label>
                    
                    @if ($i == 1)
                        <input type="radio" class="radiocheck{{$i+1}}" id="kemonito{{$i+1}}" name="image{{$i+1}}" value="kemonito" checked/>
                    @else
                        <input type="radio" class="radiocheck{{$i+1}}" id="kemonito{{$i+1}}" name="image{{$i+1}}" value="kemonito"/>
                    @endif
                    <label for="kemonito{{$i+1}}">
                        <img class="selectPersonajes img{{$i+1}}" src="{{ url('images/avatares/kemonito.png')}}" alt="">
                    </label>

                    @if ($i == 2)
                        <input type="radio" class="radiocheck{{$i+1}}" id="perro{{$i+1}}" name="image{{$i+1}}" value="perro" checked/>
                    @else
                        <input type="radio" class="radiocheck{{$i+1}}" id="perro{{$i+1}}" name="image{{$i+1}}" value="perro" />
                    @endif
                    <label for="perro{{$i+1}}">
                        <img class="selectPersonajes img{{$i+1}}" src="{{ url('images/avatares/perro.png')}}" alt="">
                    </label>

                    <input type="radio" class="radiocheck{{$i+1}}" id="pikachu{{$i+1}}" name="image{{$i+1}}" value="pikachu" />
                    <label for="pikachu{{$i+1}}">
                        <img class="selectPersonajes img{{$i+1}}" src="{{ url('images/avatares/pikachu.png')}}" alt="">
                    </label>

                    <input type="radio" class="radiocheck{{$i+1}}" id="robot{{$i+1}}" name="image{{$i+1}}" value="robot" />
                    <label for="robot{{$i+1}}">
                        <img class="selectPersonajes img{{$i+1}}" src="{{ url('images/avatares/robot.png')}}" alt="">
                    </label>

                    <input type="radio" class="radiocheck{{$i+1}}" id="tabla{{$i+1}}" name="image{{$i+1}}" value="tabla" />
                    <label for="tabla{{$i+1}}">
                        <img class="selectPersonajes img{{$i+1}}" src="{{ url('images/avatares/tabla.png')}}" alt="">
                    </label>
                    
                </div>
            @endfor
            
            <hr class="dividir" />
            <button id="btnEmpezar" type="submit">Empezar</button>
        </form>

    </section>

@endsection

@section('script')

    <script>
        let RespuestasJugador1 = document.getElementsByClassName('radiocheck1');
        let RespuestasJugador2 = document.getElementsByClassName('radiocheck2');
        let RespuestasJugador3 = document.getElementsByClassName('radiocheck3');

        let FilasAvatares = [
            RespuestasJugador1,
            RespuestasJugador2,
            RespuestasJugador3
        ];

        let ImagenesAvatares = [
            document.getElementsByClassName('img1'),
            document.getElementsByClassName('img2'),
            document.getElementsByClassName('img3')
        ];

        if(FilasAvatares[1].length != 0){
            if(FilasAvatares[2].length == 0){

                FilasAvatares[0][1].disabled = true;
                FilasAvatares[0][1].style.background = "red";
                ImagenesAvatares[0][1].style.background = "red";

                FilasAvatares[1][0].disabled = true;
                FilasAvatares[1][0].style.background = "red";
                ImagenesAvatares[1][0].style.background = "red";

                for (let i = 0; i < FilasAvatares.length; i++) {
                    if (i == 0) {
                        for (let j = 0; j < FilasAvatares[0].length; j++) {
                            FilasAvatares[i][j].addEventListener("click",
                                () => {
                                    if(!FilasAvatares[i][j].disabled){
                                        for (let k = 0; k < FilasAvatares[0].length; k++) {
                                            if(FilasAvatares[i+1][k].disabled){
                                                FilasAvatares[i+1][k].disabled = false;
                                                FilasAvatares[i+1][k].style.background = "#edf0f1";
                                                ImagenesAvatares[i+1][k].style.background = "#edf0f1";
                                                FilasAvatares[i][k].disabled = false;
                                                FilasAvatares[i][k].style.background = "#edf0f1";
                                                ImagenesAvatares[i+1][k].style.background = "#edf0f1";
                                            }
                                        }

                                        FilasAvatares[i+1][j].disabled = true;
                                        FilasAvatares[i+1][j].style.background = "red";
                                        ImagenesAvatares[i+1][j].style.background = "red";
                                    }
                                }
                                
                            ); 
                        }
                    } else {
                        for (let j = 0; j < FilasAvatares[0].length; j++) {
                            FilasAvatares[i][j].addEventListener("click",
                                (e) => {
                                    if(!FilasAvatares[i][j].disabled){
                                        for (let k = 0; k < FilasAvatares[0].length; k++) {
                                            if(FilasAvatares[i-1][k].disabled){
                                                FilasAvatares[i-1][k].disabled = false;
                                                FilasAvatares[i-1][k].style.background = "#edf0f1";
                                                ImagenesAvatares[i-1][k].style.background = "#edf0f1";
                                                FilasAvatares[i][k].disabled = false;
                                                FilasAvatares[i][k].style.background = "#edf0f1";
                                                ImagenesAvatares[i-1][k].style.background = "#edf0f1";
                                            }
                                        }

                                        FilasAvatares[i-1][j].disabled = true;
                                        FilasAvatares[i-1][j].style.background = "red";
                                        ImagenesAvatares[i-1][j].style.background = "red";
                                    }
                                }
                            ); 
                        } 
                    }
                }
            } 
            else{
                FilasAvatares[1][0].disabled = true;
                FilasAvatares[1][0].style.background = "red";
                ImagenesAvatares[1][0].style.background = "red";
                FilasAvatares[2][0].disabled = true;
                FilasAvatares[2][0].style.background = "red";
                ImagenesAvatares[2][0].style.background = "red";

                FilasAvatares[0][1].disabled = true;
                FilasAvatares[0][1].style.background = "red";
                ImagenesAvatares[0][1].style.background = "red";
                FilasAvatares[2][1].disabled = true;
                FilasAvatares[2][1].style.background = "red";
                ImagenesAvatares[2][1].style.background = "red";

                FilasAvatares[1][2].disabled = true;
                FilasAvatares[1][2].style.background = "red";
                ImagenesAvatares[1][2].style.background = "red";
                FilasAvatares[0][2].disabled = true;
                FilasAvatares[0][2].style.background = "red";
                ImagenesAvatares[0][2].style.background = "red";

                for (let i = 0; i < FilasAvatares.length; i++) {
                    if (i == 0) {
                        for (let j = 0; j < FilasAvatares[0].length; j++) {
                            FilasAvatares[i][j].addEventListener("click",
                                () => {
                                    if(!FilasAvatares[i][j].disabled){
                                        for (let k = 0; k < FilasAvatares[0].length; k++) {
                                            if(FilasAvatares[i+2][k].disabled && FilasAvatares[i+1][k].disabled){
                                                FilasAvatares[i+2][k].disabled = false;
                                                FilasAvatares[i+2][k].style.background = "#edf0f1";
                                                ImagenesAvatares[i+2][k].style.background = "#edf0f1";

                                                FilasAvatares[i+1][k].disabled = false;
                                                FilasAvatares[i+1][k].style.background = "#edf0f1";
                                                ImagenesAvatares[i+1][k].style.background = "#edf0f1";

                                                FilasAvatares[i][k].disabled = false;
                                                FilasAvatares[i][k].style.background = "#edf0f1";
                                                ImagenesAvatares[i+1][k].style.background = "#edf0f1";
                                            }
                                        }

                                        
                                        FilasAvatares[i+1][j].disabled = true;
                                        FilasAvatares[i+1][j].style.background = "red";
                                        ImagenesAvatares[i+1][j].style.background = "red";
                                        FilasAvatares[i+2][j].disabled = true;
                                        FilasAvatares[i+2][j].style.background = "red";
                                        ImagenesAvatares[i+2][j].style.background = "red";
                                    }
                                }
                                
                            ); 
                        }
                    }
                    else if(i == 1){
                        for (let j = 0; j < FilasAvatares[0].length; j++) {
                            FilasAvatares[i][j].addEventListener("click",
                                () => {
                                    if(!FilasAvatares[i][j].disabled){
                                        for (let k = 0; k < FilasAvatares[0].length; k++) {
                                            if(FilasAvatares[i+1][k].disabled && FilasAvatares[i-1][k].disabled){

                                                FilasAvatares[i-1][k].disabled = false;
                                                FilasAvatares[i-1][k].style.background = "#edf0f1";
                                                ImagenesAvatares[i-1][k].style.background = "#edf0f1";

                                                FilasAvatares[i+1][k].disabled = false;
                                                FilasAvatares[i+1][k].style.background = "#edf0f1";
                                                ImagenesAvatares[i+1][k].style.background = "#edf0f1";

                                                FilasAvatares[i][k].disabled = false;
                                                FilasAvatares[i][k].style.background = "#edf0f1";
                                                ImagenesAvatares[i][k].style.background = "#edf0f1";
                                            }
                                        }

                                        FilasAvatares[i-1][j].disabled = true;
                                        FilasAvatares[i-1][j].style.background = "red";
                                        ImagenesAvatares[i-1][j].style.background = "red";
                                        FilasAvatares[i+1][j].disabled = true;
                                        FilasAvatares[i+1][j].style.background = "red";
                                        ImagenesAvatares[i+1][j].style.background = "red";
                                    }
                                }
                                
                            ); 
                        }
                    } else {
                        for (let j = 0; j < FilasAvatares[0].length; j++) {
                            FilasAvatares[i][j].addEventListener("click",
                                (e) => {
                                    if(!FilasAvatares[i][j].disabled){
                                        for (let k = 0; k < FilasAvatares[0].length; k++) {
                                            if(FilasAvatares[i-2][k].disabled && FilasAvatares[i-1][k].disabled){

                                                FilasAvatares[i-2][k].disabled = false;
                                                FilasAvatares[i-2][k].style.background = "#edf0f1";
                                                ImagenesAvatares[i-2][k].style.background = "#edf0f1";

                                                FilasAvatares[i-1][k].disabled = false;
                                                FilasAvatares[i-1][k].style.background = "#edf0f1";
                                                ImagenesAvatares[i-1][k].style.background = "#edf0f1";

                                                FilasAvatares[i][k].disabled = false;
                                                FilasAvatares[i][k].style.background = "#edf0f1";
                                                ImagenesAvatares[i][k].style.background = "#edf0f1";

                                            }
                                        }

                                        FilasAvatares[i-2][j].disabled = true;
                                        FilasAvatares[i-2][j].style.background = "red";
                                        ImagenesAvatares[i-2][j].style.background = "red";

                                        FilasAvatares[i-1][j].disabled = true;
                                        FilasAvatares[i-1][j].style.background = "red";
                                        ImagenesAvatares[i-1][j].style.background = "red";
                                    }
                                }
                            ); 
                        } 
                    }
                }
            }
        }

        
    </script>
@endsection