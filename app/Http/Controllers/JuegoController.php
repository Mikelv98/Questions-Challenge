<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JuegoController extends Controller
{
    public function create(){
        return view('JuegoView');
    }

    public function showJuego(Request $request){
        
        return redirect()->route('Juego');
    }
}
