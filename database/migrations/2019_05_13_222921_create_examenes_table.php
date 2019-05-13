<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExamenesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('examenes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('id_nivellecion');
            $table->unsignedInteger('id_palabra');
            $table->string('aciertos', 150);

            $table->foreign('id_nivellecion')->references('id')->on('lecciones')->onDelete('cascade');
            $table->foreign('id_palabra')->references('id')->on('palabras')->onDelete('cascade');
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
        Schema::dropIfExists('examenes');
    }
}
