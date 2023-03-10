<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

use Illuminate\Validation\Rules;

class ProfesorController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'usuario' => [
                'required',
                'min:4',
                'max:30',
            ],
            'email' => [
                'required',
                'email',
            ],
            'name' => [
                'required',
                'string',
            ],
            'surname' => [
                'required',
                'string',
            ],
            'telefono' => ['required', 'integer', 'min:9'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $usuario = User::create([
            'usuario' => $request->usuario,
            'email' => $request->email,
            'nombre' => $request->name,
            'apellido' => $request->surname,
            'telefono' => $request->telefono,
            'password' => bcrypt($request->password),
            'rol' => 'profesor',
            'estado' => '0'

        ]);

        return to_route('index')->with('success', 'Profesor creado correctamente');
    }

}