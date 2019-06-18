<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    public $primarykey = 'curso_id';

    protected $table = 'cursos';

    public function desarrollador()
    {
        return $this->belongsTo(Desarrollador::class);
    }

    public function lengua()
    {
        return $this->belongsTo(Lengua::class);
    }

    // RELACION PARA JSON DE NIVELES
    public function niveles()
    {
        return $this->hasMany(Nivel::class);
    }

    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }
    public function nivel()
    {
        return $this->hasMany(Nivel::class);
    }
}
