<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Metodoopcion extends Model
{
    protected $table='metodoopciones';

    public function metodos()
    {
        return $this->belongsTo(Metodo::class);
    }
    public function opciones()
    {
        return $this->belongsTo(Opcion::class);
    }
}
