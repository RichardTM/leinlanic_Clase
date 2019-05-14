<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePerfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perfiles', function (Blueprint $table) {

        //    agregar campos
            $table->bigIncrements('id');
            $table->string('nombres', 150);
            $table->string('apellidos', 150);
            $table->unsignedBigInteger('sexo_id');
            $table->unsignedBigInteger('recinto_id');
            $table->unsignedBigInteger('carrera_id');
            $table->unsignedBigInteger('area_id');
            $table->unsignedBigInteger('modalidad_id');
            $table->unsignedBigInteger('etnia_id');
            $table->unsignedBigInteger('municipio_id');
            $table->unsignedBigInteger('departamento_id');
            $table->unsignedBigInteger('nacionalidad_id');
            $table->string('carnet', 150);

            // agregar fechas
            $table->timestamps();

            // llaves foraneas
            $table->foreign('sexo_id')->references('id')->on('sexos')->onDelete('cascade');
            $table->foreign('recinto_id')->references('id')->on('recintos')->onDelete('cascade');
            $table->foreign('carrera_id')->references('id')->on('carreras')->onDelete('cascade');
            $table->foreign('modalidad_id')->references('id')->on('modalidades')->onDelete('cascade');
            $table->foreign('etnia_id')->references('id')->on('etnias')->onDelete('cascade');
            $table->foreign('municipio_id')->references('id')->on('municipios')->onDelete('cascade');
            $table->foreign('departamento_id')->references('id')->on('departamentos')->onDelete('cascade');
            $table->foreign('nacionalidad_id')->references('id')->on('nacionalidad')->onDelete('cascade');



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('perfiles');
    }
}
