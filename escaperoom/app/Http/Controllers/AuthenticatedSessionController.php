<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use App\Models\User;


class AuthenticatedSessionController extends Controller
{
    public function store(Request $request)
    {
        $credenciales = $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);
        if(Auth::attempt($credenciales, $request->boolean('remember'))) {
            $request->session()->regenerate();
            return to_route('index');
        } else {
            throw ValidationException::withMessages([
                'email' => __('auth.failed')
            ]);
        }

    }
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return to_route('login');

    }
    public function updateDatos(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $nombre = $request->input('formNombre');
        $apellido = $request->input('formApe');
        $tel = $request->input('formTel');

        $user->nombre = $nombre;
        $user->apellido = $apellido;
        $user->telefono = $tel;

        $user->save();
        return redirect()->route('perfil');
    }
    // public function updateCuenta(Request $request, $id)
    // {
    //     $user = User::findOrFail($id);

    //     $email = $request->input('formEmail');
    //     $pw = $request->input('formContra');

    //     $user->email = $email;
    //     $user->contrasena = $pw;

    //     $user->save();
    //     return redirect()->route('perfil');
    // }
}