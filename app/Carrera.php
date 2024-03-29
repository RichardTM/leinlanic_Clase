<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
    protected $table = 'carreras';

    public function perfiles ()
    {
        return $this->hasMany(Perfil::class);
    }
}
