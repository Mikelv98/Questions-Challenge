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

}
