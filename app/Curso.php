<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $table = 'cursos';

    public function desarrollador()
    {
        return $this->belongsTo(Desarrollador::class);
    }

    public function lengua()
    {
        return $this->belongsTo(Lengua::class);
    }
}
