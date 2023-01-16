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
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('codUsuario');
            $table->string('usuario', 30)->unique();
            $table->string('contrasena', 255);
            $table->string('nombre', 30);
            $table->string('apellido', 30);
            $table->string('email', 100)->unique();
            $table->integer('telefono')->nullable()->unique();
            $table->string('rol', 200);
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
        Schema::dropIfExists('users');
    }
};
