<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pregunta;
use App\Models\Preguntas;
use App\Models\Tematicas;
use App\Models\Partidas;
use App\Models\respuesta;
use Illuminate\Support\Facades\DB;

class JuegoController extends Controller
{
    public function create(){
        $preguntas = DB::table('preguntas')
            ->get('*')
            ->where('idTematica','=',1);
        $respuestasc = DB::table('respuestas')
            ->get('*')
            ->where('idTematica','=',1);
        return view('JuegoView', compact('preguntas','respuestasc'));
    }

    public function showJuego(Request $request){

        /*$preguntas = DB::table('preguntas')
        ->get('*')
        ->where('idTematica','=',$request->Tematica);*/
        //

        /*$respuestasc = DB::table('respuestas')
            ->select('*')
            ->join('preguntas','preguntas.idPregunta','=','respuestas.idPregunta')
            ->where('preguntas.idTematica','=',$request->Tematica)->get();
*/
        $preguntas2=DB::table('preguntas')->where('tematica_id',$request->Tematica)->join('tematicas','preguntas.tematica_id','tematicas.id')
                        ->join('respuestas','respuestas.preguntas_id','preguntas.id')->select('preguntas.*','tematicas.nombre','respuestas.respuestacorrecta')->get();
       // print_r($preguntas2);

        $contadorP = DB::table('preguntas')->count();
        //print_R($contadorP);


        $NumJug = $request->NumJugadores;
        $NombreJu1 = $request->Nombrejugador1;
        $ImagenJu1 = 'images/avatares/'.$request->image1.'.png';
        $puntajeJugador1 = 0;

        if($request->Nombrejugador2 !== null){
            $NombreJu2 = $request->Nombrejugador2;
            $ImagenJu2 = 'images/avatares/'.$request->image2.'.png';
            $puntajeJugador2 = 0;

            if ($request->Nombrejugador3 !== null) {
                $NombreJu3 = $request->Nombrejugador3;
                $ImagenJu3 = 'images/avatares/'.$request->image3.'.png';
                $puntajeJugador3 = 0;
                $ImgJugadores = [$ImagenJu1,$ImagenJu2,$ImagenJu3];
                $NameJugadores = [$NombreJu1,$NombreJu2,$NombreJu3];
                $PuntajeJugadores = [$puntajeJugador1,$puntajeJugador2,$puntajeJugador3];
                return view('JuegoView', compact('NumJug','ImgJugadores', 'NameJugadores','PuntajeJugadores','preguntas2','contadorP'));
            }
            else {
                $ImgJugadores = [$ImagenJu1,$ImagenJu2];
                $NameJugadores = [$NombreJu1,$NombreJu2];
                $PuntajeJugadores = [$puntajeJugador1,$puntajeJugador2];
                return view('JuegoView', compact('NumJug','ImgJugadores', 'NameJugadores','PuntajeJugadores','preguntas2','contadorP'));
            }
        }
        else{
            $ImgJugadores = [$ImagenJu1];
            $NameJugadores = [$NombreJu1];
            $PuntajeJugadores = [$puntajeJugador1];
            return view('JuegoView', compact('NumJug','ImgJugadores', 'NameJugadores','PuntajeJugadores','preguntas2','contadorP'));
        }

    }

    public function preguntas(Request $request){
        $preguntas = pregunta::all();
        $respuestasc = respuesta::all();
        return view('JuegoView', compact('preguntas','respuestasc'));
        // return redirect()->route('Juego');
    }
    public function guardar(Request $request, $i){
        //dd($i);
        $partida= new Partidas;
        $partida->nombre1= $request->nombre[0];
        $partida->avatar1= $request->imagen[0];
        $partida->puntuacion1= $request->puntaje[0];
        $partida->tematica_id= $request->tematica;
        if($i >= 2){
            $partida->nombre2= $request->nombre[1];
            $partida->avatar2= $request->imagen[1];
            $partida->puntuacion2= $request->puntaje[1];
        }
        if ($i == 3) {
            $partida->nombre3= $request->nombre[2];
            $partida->avatar3= $request->imagen[2];
            $partida->puntuacion3= $request->puntaje[2];
        }
        $partida ->save();
        $id = DB::getPdo()->lastInsertId();
        return redirect('NumPartida/'.$id);
    }
    public function numpartida($id){
        //dd($id);
        return view('NumPartida', compact('id'));
        // return redirect()->route('Juego');
    }
    public function abandonar(Request $request){
        $preguntas = pregunta::all();
        $respuestasc = respuesta::all();
        return view('JuegoView', compact('preguntas','respuestasc'));
        // return redirect()->route('Juego');
    }
}
