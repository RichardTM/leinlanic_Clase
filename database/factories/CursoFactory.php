<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Curso;
use Faker\Generator as Faker;
use App\Lengua;
use App\Desarrollador;

$factory->define(Curso::class, function (Faker $faker) {
    return [
        
        'curso' => $faker->curso,

        'lengua_id' => function () {
            return factory(Lengua::class)->create()->id;
        },
        'desarrollador_id' => function () {
            return factory(Desarrollador::class)->create()->id;
        },


    ];
});
