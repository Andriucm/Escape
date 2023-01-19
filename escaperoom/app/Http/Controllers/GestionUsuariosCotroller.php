<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GestionUsuariosCotroller extends Controller
{
    public function index()
    {
        $sqlAl = 'SELECT * FROM users WHERE rol = "alumno" limit 15 OFFSET 0';
        $alumnos = DB::select($sqlAl);
        $sqlProf = 'SELECT * FROM users WHERE rol = "profesor" limit 15 OFFSET 0';
        $profesores = DB::select($sqlProf);
        return view('/management', compact('alumnos', 'profesores'));
    }
    public function destroy($id)
    {
        $usuario = User::findOrFail($id);
        $usuario->delete();
        return redirect()->back();

    }

   
}