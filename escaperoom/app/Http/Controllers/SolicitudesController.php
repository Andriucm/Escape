<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SolicitudesController extends Controller
{
    public function index()
    {
        $usuarios = User::where('estado', 0)->get();
        return view('/solicitudesUsuarios', compact('usuarios'));
    }
    public function aceptar($id)
    {
        $usuario = User::findOrfail($id);
        $usuario->estado = '1';
        $usuario->save();
        return redirect()->back();
    }
    public function rechazar($id)
    {
        $usuario = User::findOrFail($id);
        $usuario->delete();
        return redirect()->back();

    }
}