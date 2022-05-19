<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partidas extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id','nombre1','avatar1','puntuacion1','nombre2','avatar2','puntuacion2','nombre3','avatar3','puntuacion3','tematica_id'
    ];
}
