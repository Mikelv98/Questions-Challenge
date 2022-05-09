<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlayerController extends Controller
{
    public function store(Request $request){
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
                return redirect()->route('Juego', compact('Tematica','NumJug','NombreJu1','ImagenJu1','NombreJu2','ImagenJu2','NombreJu3','ImagenJu3', ));
            } else {
                return redirect()->route('Juego', compact('Tematica','NumJug','NombreJu1','ImagenJu1','NombreJu2','ImagenJu2', ));
            }
        }

        // return redirect()->route('Admin');
        // return view('select', compact('tematica'));
    }
}
