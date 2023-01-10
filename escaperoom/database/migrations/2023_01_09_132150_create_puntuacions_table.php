<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('puntuacions', function (Blueprint $table) {
            $table->bigIncrements('codPuntuacion');
            $table->bigInteger('codUsuario')->unsigned();
            $table->bigInteger('codGrupo')->unsigned();
            $table->bigInteger('codPartida')->unsigned();
            $table->foreign('codUsuario')->references('codUsuario')->on('usuarios');
            $table->foreign('codGrupo')->references('codGrupo')->on('grupos');
            $table->foreign('codPartida')->references('codPartida')->on('partidas');

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
        Schema::dropIfExists('puntuacions');
    }
};
