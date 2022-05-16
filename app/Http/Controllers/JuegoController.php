<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pregunta;
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
        $preguntas = DB::table('preguntas')
        ->get('*')
        ->where('idTematica','=',$request->Tematica);
        
        $respuestasc = DB::table('respuestas')
            ->select('*')
            ->join('preguntas','preguntas.idPregunta','=','respuestas.idPregunta')
            ->where('preguntas.idTematica','=',$request->Tematica)->get();

        $contadorP = DB::table('preguntas')->count();


        



        $Tematica = $request->Tematica;
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
                return view('JuegoView', compact('Tematica','NumJug','ImgJugadores', 'NameJugadores','PuntajeJugadores','preguntas','respuestasc','contadorP'));
            } 
            else {
                $ImgJugadores = [$ImagenJu1,$ImagenJu2];
                $NameJugadores = [$NombreJu1,$NombreJu2];
                $PuntajeJugadores = [$puntajeJugador1,$puntajeJugador2];
                return view('JuegoView', compact('Tematica','NumJug','ImgJugadores', 'NameJugadores','PuntajeJugadores','preguntas','respuestasc','contadorP'));
            }
        }
        else{
            $ImgJugadores = [$ImagenJu1];
            $NameJugadores = [$NombreJu1];
            $PuntajeJugadores = [$puntajeJugador1];
            return view('JuegoView', compact('Tematica','NumJug','ImgJugadores', 'NameJugadores','PuntajeJugadores','preguntas','respuestasc'));
        }

    }

    public function preguntas(Request $request){
        $preguntas = pregunta::all();
        $respuestasc = respuesta::all();
        return view('JuegoView', compact('preguntas','respuestasc'));
        // return redirect()->route('Juego');
    }
}
