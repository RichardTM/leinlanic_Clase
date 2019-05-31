<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoPregunta extends Model
{
    protected $table='tipo_preguntas';

    public function preguntas ()
    {
        return $this->hasMany(Pregunta::class);
    }
}
