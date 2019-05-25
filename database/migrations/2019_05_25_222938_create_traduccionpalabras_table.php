<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTraduccionpalabrasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('traduccionpalabras', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('palabranueva_id');
            $table->unsignedInteger('lengua_id');
            $table->string('traduccion', 150);



            // llaves foraneas
            $table->foreign('palabranueva_id')->references('id')->on('palabranuevas')->onDelete('cascade');
            $table->foreign('lengua_id')->references('id')->on('lenguas')->onDelete('cascade');
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
        Schema::dropIfExists('traduccionpalabras');
    }
}
