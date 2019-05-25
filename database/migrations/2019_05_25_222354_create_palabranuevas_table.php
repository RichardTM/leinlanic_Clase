<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePalabranuevasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('palabranuevas', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('lengua_id');
            $table->unsignedInteger('tipopalabra_id');
            $table->string('palabra', 150);
            $table->string('imagen', 150);



            // llaves foraneas
            $table->foreign('lengua_id')->references('id')->on('lenguas')->onDelete('cascade');
            $table->foreign('tipopalabra_id')->references('id')->on('tipopalabras')->onDelete('cascade');

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
        Schema::dropIfExists('palabranuevas');
    }
}
