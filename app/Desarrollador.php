<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Desarrollador extends Model
{
    protected $table='desarrolladores';

    public function curso()
    {
        return $this->hasMany(Curso::class);
    }

}
