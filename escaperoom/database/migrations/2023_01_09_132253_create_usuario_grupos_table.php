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
        Schema::create('usuario_grupos', function (Blueprint $table) {
            $table->unsignedBigInteger('codUsuario');
            $table->unsignedBigInteger('codGrupo');
            $table->foreign('codUsuario')->references('codUsuario')->on('usuarios')->ononDelete('cascade');
            $table->foreign('codGrupo')->references('codGrupo')->on('grupos')->ononDelete('cascade');
            $table->unique(['codUsuario','codGrupo']);
            $table->bigIncrements('codUsuarioGrupo');
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
        Schema::dropIfExists('usuario_grupos');
    }
};
