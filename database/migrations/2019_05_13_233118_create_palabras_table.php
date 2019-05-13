<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePalabrasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('palabras', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('español', 150);
            $table->string('miskito', 150);
            $table->unsignedInteger('id_leccion');
            $table->string('imagen', 150);
            $table->string('aciertopalabra', 150);
            $table->unsignedInteger('id_audio');


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
        Schema::dropIfExists('palabras');
    }
}
