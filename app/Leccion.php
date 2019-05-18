<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Leccion extends Model
{
    protected $table= 'lecciones';

    public function nivellecciones ()
    {
        return $this->hasMany(Nivelleccion::class);
    }

    public function palabras ()
    {
        return $this->hasMany(Palabra::class);
    }

    public function examenes ()
    {
        return $this->hasMany(Examen::class);
    }
}
