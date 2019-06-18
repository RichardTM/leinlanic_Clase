<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = 'admins';

    public function curso()
    {
        return $this->hasMany(Curso::class);
    }
}
