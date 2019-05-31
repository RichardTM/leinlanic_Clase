<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model
{
    protected $table = 'preguntas';



    public function leccion_pregunta()
    {
        return $this->belongsTo(LeccionPregunta::class);
    }

    public function respuesta()
    {
        return $this->belongsTo(Respuesta::class);
    }

    public function tipo_pregunta()
    {
        return $this->belongsTo(TipoPregunta::class);
    }

    public function leccionpreguntas ()
    {
        return $this->hasMany(LeccionPregunta::class);
    }



    public function respuestas()
    {
        return $this->hasMany(Respuesta::class);
    }

}
