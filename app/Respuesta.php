<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Respuesta extends Model
{
    protected $table='respuestas';


    public function pregunta()
    {
        return $this->belongsTo(Pregunta::class);
    }


// RELACION PARA JSON
    // public function preguntas()
    // {
    //     return $this->hasMany(Pregunta::class);
    // }


    public function preguntarespuestas()
    {
        return $this->hasMany(PreguntaRespuesta::class);
    }
}
