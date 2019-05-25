<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemleccionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itemlecciones', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('leccion_id');
            $table->string('itemleccion', 100);


            // llaves foraneas
            $table->foreign('leccion_id')->references('id')->on('lecciones')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('itemlecciones');
    }
}
