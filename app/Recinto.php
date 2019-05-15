<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recinto extends Model
{
    protected $table= 'recintos';


    public function perfiles ()
    {
        return $this->hasMany(Perfil::class);
    }
}
