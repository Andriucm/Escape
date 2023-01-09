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
        Schema::create('puntuacion', function (Blueprint $table) {
            $table->bigIncrements('codPuntuacion');
            $table->bigInteger('codUsuario')->unsigned();
            $table->bigInteger('codGrupo')->unsigned();
            $table->bigInteger('codPartida')->unsigned();
            $table->foreign('codUsuario')->references('codUsuario')->on('usuario');
            $table->foreign('codGrupo')->references('codGrupo')->on('grupo');
            $table->foreign('codPartida')->references('codPartida')->on('partida');

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
        Schema::dropIfExists('puntuacion');
    }
};
