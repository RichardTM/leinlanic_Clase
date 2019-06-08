<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nivel extends Model
{
    protected $table='niveles';
    // protected $fillable = ['nombre', 'descripcion', 'curso_id'];


    public function curso()
    {
        return $this->belongsTo(Curso::class);
    }

    //RELACION PARA CREAR JS

public function lecciones()
{
    return $this->hasMany(Leccion::class);
}

}
