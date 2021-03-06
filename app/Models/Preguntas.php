<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Preguntas extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id','descripcion','respuesta1','respuesta2','puntaje','tematica_id'

    ];
    //relacion de uno a muchos -recibe
    public function tematica(){
        return $this->belongsTo('App\Models\Tematicas');
      }

      public function respuesta(){
        return $this->hasOne('App\Models\Respuestas');
    }
}
