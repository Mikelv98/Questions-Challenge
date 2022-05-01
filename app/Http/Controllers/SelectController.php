<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tematicas;//del modal
use App\Models\Avatares;//del modal
use DB;
use Auth;
class SelectController extends Controller
{
    public function create(){
        $tematica = tematica::all();
        return view('select', compact('tematica'));
    }

}
