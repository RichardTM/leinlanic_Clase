<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sexo extends Model
{
    protected $table= 'sexos';

    // RELACION UN SEXO TIENE MUCHOS PERFILES

    public function perfiles ()
    {
        return $this->hasMany(Perfil::class);
    }
}
