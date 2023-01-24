<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new User();
        $admin->usuario = 'administrador';
        $admin->nombre = 'admin';
        $admin->apellido = 'root';
        $admin->email = 'admin@gmail.com';
        $admin->telefono = '675689789';
        $admin->password = bcrypt('12345678');
        $admin->rol = 'admin';
        $admin->estado = '1';
        $admin->save();

        $profesor = new User();
        $profesor->usuario = 'profesor';
        $profesor->nombre = 'profesor';
        $profesor->apellido = 'root';
        $profesor->email = 'profesor@gmail.com';
        $profesor->telefono = '675389789';
        $profesor->password = bcrypt('12345678');
        $profesor->rol = 'profesor';
        $profesor->estado = '0';
        $profesor->save();

        $alumno = new User();
        $alumno->usuario = 'alumno';
        $alumno->nombre = 'alumno';
        $alumno->apellido = 'root';
        $alumno->email = 'alumno@gmail.com';
        $alumno->telefono = '675689989';
        $alumno->password = bcrypt('12345678');
        $alumno->rol = 'alumno';
        $alumno->estado = '0';
        $alumno->save();
    }
}