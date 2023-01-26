<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Grupo;
use App\Models\Partida;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        User::factory(10)->create();
        // $this->call(PartidaSeeder::class);
        Partida::factory(10)->create();
        // $this->call(GrupoSeeder::class);
        Grupo::factory(10)->create();

    }
}
