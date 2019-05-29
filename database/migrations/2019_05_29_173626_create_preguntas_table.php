<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePreguntasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('preguntas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('leccion_pregunta_id', 50);
            $table->string('pregunta',150);
            $table->string('imagen',255);
            $table->unsignedInteger('tipo_pregunta_id');
            $table->string('respuesta_id', 50);



            // llaves foraneas
            $table->foreign('tipo_pregunta_id')->references('id')->on('tipo_preguntas')->onDelete('cascade');


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
        Schema::dropIfExists('preguntas');
    }
}
