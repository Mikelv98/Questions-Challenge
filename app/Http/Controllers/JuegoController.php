<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pregunta;
use Illuminate\Support\Facades\DB;

class JuegoController extends Controller
{
    public function create(){
        return view('JuegoView');
    }

    public function showJuego(Request $request){
        $preguntas = DB::table('preguntas')->get('*')->where('idTematica','=',$request->Tematica);
        $Tematica = $request->Tematica;
        $NumJug = $request->NumJugadores;
        $NombreJu1 = $request->Nombrejugador1;
        $ImagenJu1 = $request->image1;
        
        if($request->Nombrejugador2 !== null){
            $NombreJu2 = $request->Nombrejugador2;
            $ImagenJu2 = $request->image2;
            if ($request->Nombrejugador3 !== null) {
                $NombreJu3 = $request->Nombrejugador3;
                $ImagenJu3 = $request->image3;
                return view('JuegoView', compact('Tematica','NumJug','NombreJu1','ImagenJu1','NombreJu2','ImagenJu2','NombreJu3','ImagenJu3','preguntas' ));
                // return redirect()->route('Juego', compact('Tematica','NumJug','NombreJu1','ImagenJu1','NombreJu2','ImagenJu2','NombreJu3','ImagenJu3', ));
            } else {
                return view('JuegoView', compact('Tematica','NumJug','NombreJu1','ImagenJu1','NombreJu2','ImagenJu2','preguntas'));
                // return redirect()->route('Juego', compact('Tematica','NumJug','NombreJu1','ImagenJu1','NombreJu2','ImagenJu2', ));
            }
        }
        // return redirect()->route('Juego');
    }

    public function preguntas(Request $request){
        $pregunta = pregunta::all();
        return view('Juego', compact('pregunta'));
        // return redirect()->route('Juego');
    }
}
