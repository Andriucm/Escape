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
        Schema::create('usuario_partidas', function (Blueprint $table) {
            $table->unsignedBigInteger('codUsuario');
            $table->unsignedBigInteger('codPartida');
            $table->foreign('codUsuario')->references('codUsuario')->on('usuarios')->ononDelete('cascade');
            $table->foreign('codPartida')->references('codPartida')->on('partidas')->ononDelete('cascade');
            $table->unique(['codUsuario','codPartida']);
            $table->bigIncrements('codUsuarioPartida');
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
        Schema::dropIfExists('usuario_partidas');
    }
};
