<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Palabra extends Model
{
    protected $table='palabras';

    // RELACION UN PERFIL PERTENECE A UNA NACIONALIDAD

     public function leccion()
     {
         return $this->belongsTo(Leccion::class);
     }

     public function examenes ()
     {
         return $this->hasMany(Examen::class);
     }
}
