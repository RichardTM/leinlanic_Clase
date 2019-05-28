<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Palabranueva extends Model
{
    protected $table='palabranuevas';

    public function  lengua()
    {
        return $this->belongsTo(Lengua::class);
    }
    public function  tipopalabra()
    {
        return $this->belongsTo(Tipopalabra::class);
    }
}
