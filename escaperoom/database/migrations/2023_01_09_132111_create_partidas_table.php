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
        Schema::create('partidas', function (Blueprint $table) {
            $table->bigIncrements('codPartida');
            $table->string('dificultad', 100);
            $table->bigInteger('codUsuario')->unsigned();
            $table->bigInteger('puntos')->default('0');
            $table->enum('nivel', ['0','1','2','3','4','5','6'])->default('0');
            $table->timestamps();
            $table->foreign('codUsuario')->references('codUsuario')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('partidas');
    }
};
