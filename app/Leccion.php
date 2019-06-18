<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Leccion extends Model
{
    protected $table='lecciones';

    protected $fillable = ['leccion', 'descripcion', 'nivel_id'];


    public function nivel()
    {
        return $this->belongsTo(Nivel::class);
    }

    public function leccionpreguntas()
    {
        return $this->hasMany(LeccionPregunta::class);
    }
// RELACION PARA JSON
    public function actividades ()
    {
        return $this->hasMany(Actividad::class);
    }
}
