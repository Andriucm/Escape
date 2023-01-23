<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GestionUsuariosCotroller extends Controller
{
    public function index()
    {
        $sqlAl = 'SELECT * FROM users WHERE rol != "admin" and estado = "1" limit 15 OFFSET 0';
        $usuarios = DB::select($sqlAl);
        return view('/management', compact('usuarios'));
    }
    public function destroy($id)
    {
        $usuario = User::findOrFail($id);
        $usuario->delete();
        return redirect()->back();

    }
}