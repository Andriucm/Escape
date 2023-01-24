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
        $informatica->save();

        $quimica = new Grupo();
        $quimica->nombre = 'Quimica';
        $quimica->save();

        $marqueting = new Grupo();
        $marqueting->nombre = 'Marketing';
        $marqueting->save();
    }
}
