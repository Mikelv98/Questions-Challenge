<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\avatare;
use App\Models\tematica;

class SelectController extends Controller
{
    public function create(){
        $tematica = tematica::all();
        return view('select', compact('tematica'));
    }

    public function store(Request $request){
        // return ($request);
        $Tematica = $request->Tematica;
        $NumeroJugadores = $request->numJug;
        return view('PlayersView', compact('Tematica', 'NumeroJugadores'));
        // return redirect()->route('Admin');
    }

}
