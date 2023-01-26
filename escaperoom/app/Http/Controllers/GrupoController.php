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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->rol == 'admin') {
            $grupos = Grupo::all();
        } else if (Auth::user()->rol == 'profesor') {
            $grupos = Grupo::where('codUsuario', Auth::user()->codUsuario)->get();
        } else if (Auth::user()->rol == 'alumno') {
            if (Auth::user()->codGrupo == null) {
                $grupos = Grupo::all();
            } else $grupos = Grupo::where('codGrupo', Auth::user()->codGrupo)->get();
        }


        return view('grupos/index', compact('grupos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('grupos/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreGrupoRequest  $request
     * @return \Illuminate\Http\Response
     */
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
        Grupo::create([
            'nombre' => $request->nombre,
            'codigo' => $request->codigo,
            'codUsuario' => Auth::user()->codUsuario,
        ]);
        return redirect('/groups');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Grupo  $grupo
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (Grupo::findorfail($id)) {
            $alumnos = User::where('codUsuario', $id);
            return view('grupos/show', compact('alumnos'));
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Grupo  $grupo
     * @return \Illuminate\Http\Response
     */
    public function edit(Grupo $grupo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGrupoRequest  $request
     * @param  \App\Models\Grupo  $grupo
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        if (Grupo::findorfail($id)) {
            $usuario = Auth::user();
            $usuario->codGrupo = $id;
            $usuario->save();

        }
        return redirect('/groups');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Grupo  $grupo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $grupo = Grupo::findOrFail($id);
        $grupo->delete();
        return redirect('/groups');
    }
}
