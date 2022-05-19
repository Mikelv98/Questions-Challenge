<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tematicas extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id','nombre','descripcion','tablero',

    ];
    //relacion de 1 a muchos -1client -n compras
    public function pregunta(){
        return $this->hasMany('App\Models\Preguntas');
    }
    public function partida(){
        return $this->hasMany('App\Models\Partidas');
    }
}
