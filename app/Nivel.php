<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nivel extends Model
{
    protected $table= 'niveles';

    public function nivellecciones ()
    {
        return $this->hasMany(Nivelleccion::class);
    }

}
