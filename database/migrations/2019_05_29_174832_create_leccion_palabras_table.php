<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLeccionPalabrasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leccion_palabras', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('traduccion_id');
            $table->unsignedInteger('leccion_id');

            // llaves foraneas
            $table->foreign('traduccion_id')->references('id')->on('traducciones')->onDelete('cascade');
            $table->foreign('leccion_id')->references('id')->on('lecciones')->onDelete('cascade');

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
        Schema::dropIfExists('leccion_palabras');
    }
}
