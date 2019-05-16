<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    protected $table= 'municipios';

    public function perfiles ()
    {
        return $this->hasMany(Perfil::class);
    }
}
