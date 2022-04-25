<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\avatare;

class SelectController extends Controller
{
    public function create(){
        $avatar = avatare::all();
        return view('select', compact('avatar'));
    }

}
