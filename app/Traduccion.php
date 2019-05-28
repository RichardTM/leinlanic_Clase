<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\TraduccionController;

class Traduccion extends Model
{
    protected $table='traducciones';

    public function palabranueva()
    {
        return $this->belongsTo(Palabranueva::class);
    }

    public function traduccionpalabra()
    {
        return $this->belongsTo(Traduccionpalabra::class);
    }
}
