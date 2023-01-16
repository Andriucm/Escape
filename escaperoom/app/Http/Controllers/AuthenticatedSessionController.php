<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Http\Requests\UpdateUsuarioRequest;
use Illuminate\Validation\ValidationException;


class AuthenticatedSessionController extends Controller
{
    public function store(Request $request)
    {
        $credenciales = $request->validate([
            'usuario' => ['required'],
            'password' => ['required'],
        ]);
        $remember=($request->has('remember')? true : false);
        if (Auth::attempt($credenciales, $remember)) {
            $request->session()->regenerate();

            return redirect()->view('index');
        } else {
            throw ValidationException::withMessages([
                'usuario' => __('auth.failed')
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
}