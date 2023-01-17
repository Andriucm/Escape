<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules;
use App\Http\Requests\UpdateUsuarioRequest;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;

class RegisteredUserController extends Controller
{
    public function store(Request $request)
    {
         $request->validate([
            'usuario' => ['required', 'min:4', 'max:30', ],
            'email' => ['required', 'email', ],
            'name' => ['required', 'string',
            ],
            'surname' => ['required', 'string',
            ],
            'telefono' => ['required', 'integer','min:9' ],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $usuario = User::create([
            'usuario' => $request->usuario,
            'email' => $request->email,
            'nombre' => $request->name,
            'apellido' => $request->surname,
            'telefono' => $request->telefono,
            'password' => bcrypt($request->password),
            'rol' => 'alumno'
        ]);

        // Autologin
        // Auth::login($usuario);
        // Iniciar sesion despues de haberse registrado

        return to_route('login')->with('status', 'Cuenta creada correctamente');



    }

}
