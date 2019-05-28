<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lengua extends Model
{
    protected $table = 'lenguas';

    public function curso()
    {
        return $this->hasMany(Curso::class);
    }
}
