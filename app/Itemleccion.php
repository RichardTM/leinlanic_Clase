<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Itemleccion extends Model
{
    protected $table='itemlecciones';

    public function leccion()
    {
        return $this->belongsTo(Leccion::class);
    }
}
