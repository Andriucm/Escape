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
        $remember = $request->has('remember') ? true : false;
        if(Auth::attempt($credenciales, $remember)) {
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
            'formNombre' => ['required', 'string', 'max:100'],
            'formApe' => ['required', 'string', 'max:200'],
            'formTel' => ['required', 'numeric'],
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
        // $user = User::findOrFail($id);

        // $request->validate([
        //     'formEmail' => ['required','email'],
        //     'formContra' => ['required']
        // ]);
        // $user->save();
        // return redirect()->route('perfil');

        /////////////////////////////////////////////////////////////////////

        // $user = User::findOrFail($id);

        // $this->validate($request, [
        //     'formEmail' => ['required','email'],
        //     'formContra' => ['required']
        // ]);

        // $inputs = $request->all();
        // $user->fill($inputs)->save();

        // return redirect()->back();
 
        //////////////////////////////////////////////////////////////////////

            // public function updateCuenta(Request $request, User $id)

        // $request->validate([
        //     'formEmail' => ['required','email'],
        //     'formContra' => ['required'],
        // ]);

        // $id->update($request->all());

        // return redirect()->route('perfil');
    }
}
// bcrypt()