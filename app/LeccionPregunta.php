<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LeccionPregunta extends Model
{
    protected $table='leccion_preguntas';

    public function preguntas ()
    {
        return $this->hasMany(Pregunta::class);
    }

    public function leccion()
    {
        return $this->belongsTo(Leccion::class);
    }

    public function pregunta()
    {
        return $this->belongsTo(Pregunta::class);
    }
}
