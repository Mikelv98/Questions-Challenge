<?php

namespace App\Http\Controllers;
// use App\Models\pregunta;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // public function __invoke(){
    //     return view('home');
    // }

    public function create(){
        return view('home');
        // $preguntas = pregunta::all();
        // return view( 'home', compact('preguntas') );
    }
}
