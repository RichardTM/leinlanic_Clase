<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('curso');
            $table->unsignedInteger('perfil_id');
            $table->unsignedInteger('lengua_id');
            $table->unsignedInteger('desarrollador_id');


            // llaves foraneas
            $table->foreign('perfil_id')->references('id')->on('perfiles')->onDelete('cascade');
            $table->foreign('lengua_id')->references('id')->on('lenguas')->onDelete('cascade');
            $table->foreign('desarrollador_id')->references('id')->on('desarrolladores')->onDelete('cascade');


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
        Schema::dropIfExists('cursos');
    }
}
