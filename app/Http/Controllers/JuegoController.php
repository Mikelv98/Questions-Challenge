<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pregunta;

class JuegoController extends Controller
{
    public function create(){
        return view('JuegoView');
    }

    public function showJuego(Request $request){
        
        return redirect()->route('Juego');
    }

    public function preguntas(Request $request){
        $pregunta = pregunta::all();
        return view('Juego', compact('pregunta'));
        // return redirect()->route('Juego');
    }
}
