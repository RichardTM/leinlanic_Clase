<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Opcion extends Model
{
    protected $table='ocpiones';

    public function traduccion()
    {
        return $this->belongsTo(Traduccion::class);
    }
}
