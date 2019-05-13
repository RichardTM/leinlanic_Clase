<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombres', 150);
            $table->string('apellidos', 150);
            $table->unsignedInteger('id_sexo');
            $table->string('email', 150);
            $table->unsignedInteger('id_recinto');
            $table->unsignedInteger('id_carrera');
            $table->unsignedInteger('id_area');
            $table->unsignedInteger('id_modalidad');
            $table->unsignedInteger('id_etnia');
            $table->unsignedInteger('id_municipio');
            $table->unsignedInteger('id_departamento');
            $table->unsignedInteger('id_nacionalidad');
            $table->string('carnet', 150);

            $table->foreign('id_sexo')->references('id')->on('sexos')->onDelete('cascade');
            $table->foreign('id_recinto')->references('id')->on('recintos')->onDelete('cascade');
            $table->foreign('id_carrera')->references('id')->on('carreras')->onDelete('cascade');
            $table->foreign('id_area')->references('id')->on('areas')->onDelete('cascade');
            $table->foreign('id_modalidad')->references('id')->on('modalidades')->onDelete('cascade');
            $table->foreign('id_etnia')->references('id')->on('etnias')->onDelete('cascade');
            $table->foreign('id_municipio')->references('id')->on('municipio')->onDelete('cascade');
            $table->foreign('id_departamento')->references('id')->on('departamentos')->onDelete('cascade');
            $table->foreign('id_nacionalidad')->references('id')->on('nacionalidad')->onDelete('cascade');








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
        Schema::dropIfExists('usuarios');
    }
}
