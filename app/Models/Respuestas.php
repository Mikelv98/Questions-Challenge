<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Respuestas extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id','respuestacorrecta','preguntas_id'

    ];

    public function pregunta(){
        return $this->belongsTo('App\Models\Preguntas');
      }

}
