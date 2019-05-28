<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model
{
    protected $table='preguntas';

    public function itemleccion()
    {
        return $this->belongsTo(Itemleccion::class);
    }
}
