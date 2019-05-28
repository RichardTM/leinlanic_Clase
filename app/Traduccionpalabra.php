<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Traduccionpalabra extends Model
{
    protected $table='traduccionpalabras';

    public function palabranueva()
    {
        return $this->belongsTo(Palabranueva::class);
    }
    public function lengua()
    {
        return $this->belongsTo(Lengua::class);
    }
}
