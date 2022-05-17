<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function create(){
        return view('welcome');
    }
    public function home(){
        if(Auth::user()->tipo_jugador!="administrador"){
            return view('welcome');
        }
        return view('AdministradorView');
    }
}
