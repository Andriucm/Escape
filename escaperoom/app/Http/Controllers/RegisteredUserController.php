<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\URL;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
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
            'telefono' => [
                'required',
                'integer',
                'min:9'
            ],
            'password' => [
                'required',
                'confirmed',
                Rules\Password::defaults()
            ],
            'foto' => [
                'required',
                'max:2048'
            ],
        ]);

        if ((User::where('usuario', $request->usuario)->first() != null) || (User::where('email', $request->email)->first() != null) ) {
            return to_route('register')->with('warning', 'Este usuario ya existe');
        } else {
            $usuario = User::create([
                'usuario' => $request->usuario,
                'email' => $request->email,
                'nombre' => $request->name,
                'apellido' => $request->surname,
                'telefono' => $request->telefono,
                'password' => bcrypt($request->password),
                'rol' => 'alumno',
                'foto' => $request->usuario . '.' . pathinfo($_FILES['foto']['name'], PATHINFO_EXTENSION),
            ]);
            move_uploaded_file($request->foto, 'imagenes/perfil/' . $request->usuario . '.' . pathinfo($_FILES['foto']['name'], PATHINFO_EXTENSION));
            return to_route('login')->with('status', 'Cuenta creada correctamente');
        }
        // Autologin
        // Auth::login($usuario);
        // Iniciar sesion despues de haberse registrado




    }

}