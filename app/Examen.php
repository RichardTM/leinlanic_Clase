<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Examen extends Model
{

    protected $table='examenes';

    public function leccion()
    {
        return $this->belongsTo(Leccion::class);
    }

    public function palabra()
    {
        return $this->belongsTo(Palabra::class);
    }
}
