<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTraduccionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('traducciones', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('palabranueva_id');
            $table->unsignedInteger('traduccionpalabra_id');



            // llaves foraneas
            $table->foreign('palabranueva_id')->references('id')->on('palabranuevas')->onDelete('cascade');
            $table->foreign('traduccionpalabra_id')->references('id')->on('traduccionpalabras')->onDelete('cascade');


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
        Schema::dropIfExists('traducciones');
    }
}
