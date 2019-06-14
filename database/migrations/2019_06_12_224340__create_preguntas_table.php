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
            $table->string('titulo',150)->nullable();
            $table->string('pregunta',150)->nullable();
            $table->string('imagen',150)->nullable();
            $table->unsignedInteger('tipo_pregunta_id');
            $table->unsignedInteger('atividad_id');



            // llaves foraneas
            $table->foreign('tipo_pregunta_id')->references('id')->on('tipo_preguntas')->onDelete('cascade');
            $table->foreign('atividad_id')->references('id')->on('actividades')->onDelete('cascade');


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
