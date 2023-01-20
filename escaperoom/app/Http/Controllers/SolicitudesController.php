<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SolicitudesController extends Controller
{
    public function index(){
        $usuarios=User::where('estado','like','1');
        return view('/solicitudesUsuarios', compact('usuarios'));
    }
}
