<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Leccion extends Model
{
    protected $table= 'lecciones';

    public function nivellecciones ()
    {
        return $this->hasMany(Nivelleccion::class);
    }
}
