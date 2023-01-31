<?php

namespace App\Http\Controllers;

use App\Models\Grupo;
use App\Http\Requests\StoreGrupoRequest;
use App\Http\Requests\UpdateGrupoRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GrupoController extends Controller
{

    public function index()
    {
        if (Auth::user()->rol == 'admin') {
            $grupos = Grupo::all();
        } else if (Auth::user()->rol == 'profesor') {
            $grupos = Grupo::where('codUsuario', Auth::user()->codUsuario)->get();
        } else if (Auth::user()->rol == 'alumno') {
            if (Auth::user()->codGrupo == null) {
                $grupos = Grupo::all();
            } else
                $grupos = Grupo::where('codGrupo', Auth::user()->codGrupo)->get();
        }
        return view('grupos/index', compact('grupos'));
    }


    public function create()
    {
        return view('grupos/create');
    }


    public function store(Request $request)
    {
        $request->validate(
            [
                'nombre' => [
                    'required',
                    'min:4',
                    'max:30',
                ],
                'codigo' => [
                    'required',
                    'min:4',
                    'max:30',
                ],
            ]
        );

        $grupo = new Grupo;
        $grupo->codUsuario = Auth::user()->codUsuario;
        $grupo->nombre = $request->nombre;
        $grupo->codigo = $request->codigo;
        $grupo->save();
        return redirect('/groups');
    }

    public function show($id)
    {
        if (Grupo::findorfail($id)) {
            $alumnos = User::where('codGrupo', $id)->get();
            return view('grupos/show', compact('alumnos'));
        }

    }

    public function update(Request $request, $id)
    {
        if ($grupo = Grupo::findorfail($id)) {
            $request->validate(
                [
                    'codigo' => [
                        'required',
                        'min:4',
                        'max:30',
                    ],
                ]
            );
            if ($grupo->codigo == $request->codigo) {
                $usuario = Auth::user();
                $usuario->codGrupo = $id;
                $usuario->save();
                return redirect('/groups')->with('success', 'Has entrado al grupo');
            }
            return redirect('/groups')->with('warning', 'Codigo incorrecto');


        }

    }
    public function eliminarGrupo($id)
    {
        if ($usuario = User::findorfail($id)) {
            $usuario->codGrupo = null;
            $usuario->save();

        }
        return redirect()->back();
    }

    public function destroy($id)
    {
        $grupo = Grupo::findOrFail($id);
        $grupo->delete();
        return redirect('/groups');
    }
}