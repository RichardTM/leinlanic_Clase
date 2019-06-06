<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Leccion extends Model
{
    protected $table='lecciones';

    public function nivel()
    {
        return $this->belongsTo(Nivel::class);
    }

    public function leccionpreguntas()
    {
        return $this->hasMany(LeccionPregunta::class);
    }
}
