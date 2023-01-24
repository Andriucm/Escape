<?php

namespace Database\Seeders;

use App\Models\Partida;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PartidaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $juego1 = new Partida();
        $juego1->codPartida = '1';
        $juego1->nombre = 'Nivel 1';
        $juego1->dificultad = 'facil';
        $juego1->codusuario = '1';
        $juego1->save();

        $juego2 = new Partida();
        $juego2->codPartida = '2';
        $juego2->nombre = 'Nivel 2';
        $juego2->dificultad = 'normal';
        $juego2->codusuario = '1';
        $juego2->save();

        $juego3 = new Partida();
        $juego3->codPartida = '3';
        $juego3->nombre = 'Nivel 3';
        $juego3->dificultad = 'dificil';
        $juego3->codusuario = '1';
        $juego3->save();
    }
}
