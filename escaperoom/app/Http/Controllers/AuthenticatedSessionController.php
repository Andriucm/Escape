<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\UpdateUsuarioRequest;
use Illuminate\Validation\ValidationException;


class AuthenticatedSessionController extends Controller
{
    public function store(Request $request)
    {
        ($request->boolean('remember'));
        $credenciales = $request->validate([
            'usuario' => ['required'],
            'password' => ['required'],
        ]);

        if (!Auth::attempt($credenciales, $request->boolean('remember'))) {
            throw ValidationException::withMessages([
                'usuario' => __('auth.failed')
            ]);
        }
        $request->session()->regenerate();
        return redirect()->intended();
    }
}