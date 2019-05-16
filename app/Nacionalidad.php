<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nacionalidad extends Model
{
    protected $table= 'nacionalidades';

    public function perfiles ()
    {
        return $this->hasMany(Perfil::class);
    }
}
