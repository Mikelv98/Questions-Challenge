<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\avatare;
use App\Models\tematica;

class SelectController extends Controller
{
    // public function create(){
    //     $avatar = avatare::all();
    //     return view('select', compact('avatar'));
    // }

    public function create2(){
        $tematica = tematica::all();
        return view('select', compact('tematica'));
    }
}
