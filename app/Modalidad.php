<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modalidad extends Model
{
    protected $table= 'modalidades';

    public function perfiles ()
    {
        return $this->hasMany(Perfil::class);
    }
}
