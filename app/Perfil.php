<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    protected $table = 'perfiles';

    // RELACION UN PERFIL PERTENECE A UN SEXO

    public function sexo()
    {
        return $this->belongsTo(Sexo::class);
    }


    // RELACION UN PERFIL PERTENECE A UN RECINTO

    public function recinto()
    {
        return $this->belongsTo(Recinto::class);
    }

        // RELACION UN PERFIL PERTENECE A UNA CARRERA

    public function carrera()
    {
        return $this->belongsTo(Carrera::class);
    }

        // RELACION UN PERFIL PERTENECE A UN AREA

    public function area()
    {
        return $this->belongsTo(Area::class);
    }

     // RELACION UN PERFIL PERTENECE A UN MODALIDAD

     public function modalidad()
     {
         return $this->belongsTo(Modalidad::class);
     }

      // RELACION UN PERFIL PERTENECE A UN ETNIA

    public function etnia()
    {
        return $this->belongsTo(Etnia::class);
    }

     // RELACION UN PERFIL PERTENECE A UN MUNICIPIO

     public function municipio()
     {
         return $this->belongsTo(Municipio::class);
     }

      // RELACION UN PERFIL PERTENECE A UN DEPARTAMENTO

    public function departamento()
    {
        return $this->belongsTo(Departamento::class);
    }

     // RELACION UN PERFIL PERTENECE A UNA NACIONALIDAD

     public function nacionalidad()
     {
         return $this->belongsTo(Nacionalidad::class);
     }
}
