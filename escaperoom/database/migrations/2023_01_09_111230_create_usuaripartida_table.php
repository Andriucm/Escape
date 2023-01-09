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
        Schema::create('usuaripartida', function (Blueprint $table) {
            $table->unsignedBigInteger('codUsuario');
            $table->unsignedBigInteger('codPartida');
            $table->foreign('codUsuario')->references('codUsuario')->on('usuario')->ononDelete('cascade');
            $table->foreign('codPartida')->references('codPartida')->on('partida')->ononDelete('cascade');
            $table->primary(['codUsuario','codPartida']);
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
        Schema::dropIfExists('usuaripartida');
    }
};
