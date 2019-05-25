<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMetodoopcionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('metodoopciones', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('metodo_id');
            $table->unsignedInteger('opcion_id');


            // llaves foraneas
            $table->foreign('metodo_id')->references('id')->on('metodos')->onDelete('cascade');
            $table->foreign('opcion_id')->references('id')->on('opciones')->onDelete('cascade');

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
        Schema::dropIfExists('metodoopciones');
    }
}
