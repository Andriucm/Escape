<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;




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
}