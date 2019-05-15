<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nivelleccion extends Model
{
    protected $table= 'nivellecciones';

    // RELACION UN nivel PERTENECE A UN nivelleccion


        public function nivel()
        {
            return $this->belongsTo(Nivel::class);
        }

    public function leccion()
    {
        return $this->belongsTo(Leccion::class);
    }
}
