<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use App\Models\User;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Validation\Rules\Password;



class AuthenticatedSessionController extends Controller
{
    public function store(Request $request)
    {
        $credenciales = $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);
        $remember = $request->has('remember') ? true : false;
        if (Auth::attempt($credenciales, $remember)) {
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

        $request->validate([
            'formNombre' => ['required', 'alpha', 'max:100'],
            'formApe' => ['required', 'alpha', 'max:200'],
            'formTel' => ['required', 'numeric', 'digits:9'],
        ]);

        $nombre = $request->input('formNombre');
        $apellido = $request->input('formApe');
        $tel = $request->input('formTel');

        $user->nombre = $nombre;
        $user->apellido = $apellido;
        $user->telefono = $tel;

        $user->save();

        return redirect()->route('perfil');
    }

    public function updateCuenta(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $email = $request->input('formEmail');
        $pw = bcrypt($request->input('formContra'));
        $pwSinEncriptar = $request->input('formContra');

        if ($pwSinEncriptar=="") {
            $request->validate([
                'formEmail' => ['required', 'email']
            ]);
            $user->email = $email;
        } else {
            $request->validate([
                'formEmail' => ['required', 'email'],
                'formContra' => [Password::min(8)->numbers()]
            ]);
            $user->email = $email;
            $user->password = $pw;
        }

        $user->save();

        return redirect()->route('perfil');
    }
}
