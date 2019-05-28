<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $table='cursos';
    //REALCION UN CURSO PÉRTENCE A UN PERFIL
     public function perfil()
     {
         return $this->belongsTo(Perfil::Class);
     }
//REALCION UN CURSO PÉRTENCE A UN LENGUA
     public function lengua()
     {
         return $this->belongsTo(Lengua::Class);
     }
//REALCION UN CURSO PÉRTENCE A UN DESARROLLADOR
     public function desarrollador()
     {
         return $this->belongsTo(desarrollador::Class);
     }
}
