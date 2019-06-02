<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    protected $table='estudiantes';

    public function perfil()
    {
        return $this->belongsTo(Perfil::class);
    }
    public function curso()
    {
        return $this->belongsTo(Curso::class);
    }

}
