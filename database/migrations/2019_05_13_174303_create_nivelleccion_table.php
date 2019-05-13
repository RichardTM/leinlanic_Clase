<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNivelleccionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nivelleccion', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('id_nivel');
            $table->unsignedInteger('id_leccion');

            $table->foreign('id_nivel')->references('id')->on('niveles')->onDelete('cascade');
            $table->foreign('id_leccion')->references('id')->on('lecciones')->onDelete('cascade');


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
        Schema::dropIfExists('nivelleccion');
    }
}
