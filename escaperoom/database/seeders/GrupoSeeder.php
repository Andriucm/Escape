<?php

namespace Database\Seeders;

use App\Models\Grupo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GrupoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $informatica = new Grupo();
        $informatica->nombre = 'Informatica';
        $informatica->codigo = '12345';
        $informatica->codUsuario = '1';
        $informatica->save();

        $quimica = new Grupo();
        $quimica->nombre = 'Quimica';
        $quimica->codigo = '12345';
        $quimica->codUsuario = '2';
        $quimica->save();

        $marqueting = new Grupo();
        $marqueting->nombre = 'Marketing';
        $quimica->codigo = '12345';
        $quimica->codUsuario = '3';
        $marqueting->save();
    }
}
