<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLeccionPreguntasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leccion_preguntas', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('leccion_id');
            $table->unsignedInteger('pregunta_id');


            // llaves foraneas
            $table->foreign('leccion_id')->references('id')->on('lecciones')->onDelete('cascade');
            $table->foreign('pregunta_id')->references('id')->on('preguntas')->onDelete('cascade');

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
        Schema::dropIfExists('leccion_preguntas');
    }
}
