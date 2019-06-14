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
            $table->string('titulo',150)->nullable();
            $table->string('respuesta',150)->nullable();
            $table->string('imagen',150)->nullable();
            $table->unsignedInteger('pregunta_id');
            $table->boolean('is_correct');

            // llaves foraneas
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
        Schema::dropIfExists('respuestas');
    }
}
