<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PreguntaRespuesta extends Model
{
    protected $table='pregunta_respuestas';

    public function pregunta()
    {
        return $this->belongsTo(Pregunta::class);
    }
    public function respuesta()
    {
        return $this->belongsTo(Respuesta::class);
    }
}
