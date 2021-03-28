<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDifusionesCorreosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('difusiones_correos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_correo');
            $table->unsignedBigInteger('id_difusion');
            $table->timestamps();
            $table->foreign('id_correo')->references('id')->on('correos');
            $table->foreign('id_difusion')->references('id')->on('difusiones');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('difusiones_correos');
    }
}
