<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdministradorController extends Controller
{
    public function create(){
        return view('AdministradorView');
    }

    public function login(Request $request){
        return redirect()->route('Administrador');
    }

}
