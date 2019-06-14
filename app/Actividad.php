<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
    protected $table= "actividades";

    public function leccion()
    {
        return $this->belongsTo(Leccion::class);
    }


    public function preguntas ()
    {
        return $this->hasMany(Pregunta::class);
    }


}
