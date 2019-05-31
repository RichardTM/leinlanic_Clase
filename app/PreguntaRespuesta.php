<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PreguntaRespuesta extends Model
{
    protected $table='pregunta_respuestas';

    // public function pregunta()
    // {
    //     return $this->hasMany(Pregunta::class);
    // }
    // public function respuesta()
    // {
    //     return $this->hasMany(Respuesta::class);
    // }
}
