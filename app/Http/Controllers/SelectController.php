<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tematicas;//del modal
use App\Models\tematica;//del modal
use App\Models\Avatares;//del modal
use DB;
use Auth;
class SelectController extends Controller
{
    public function index()
    {
        $tematicas=Tematicas::orderby('nombre','ASC')->get();
        $avatar=Avatares::orderby('name','ASC')->get();
        //dd($avatar);
        return view('Select', compact('tematicas','avatar'));
    }


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
