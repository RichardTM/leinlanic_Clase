<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Preguntametodo extends Model
{
    protected $table='preguntametodos';

    public function pregunta()
    {
        return $this->belongsTo(Pregunta::class);
    }

    public function metodoopcion()
    {
        return $this->belongsTo(Metodoopcion::class);
    }

    public function respuesta()
    {
        return $this->belongsTo(Respuesta::class);
    }
}
