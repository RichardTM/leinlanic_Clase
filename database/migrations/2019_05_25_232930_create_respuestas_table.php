<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRespuestasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('respuestas', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('pregunta_id');
            $table->unsignedInteger('metodoopcion_id');


            // llaves foraneas
            $table->foreign('pregunta_id')->references('id')->on('preguntas')->onDelete('cascade');
            $table->foreign('metodoopcion_id')->references('id')->on('metodoopciones')->onDelete('cascade');

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
        Schema::dropIfExists('respuestas');
    }
}
