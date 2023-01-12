<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateUsuarioRequest;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreUsuarioRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
          'username' => ['required', 'min:4','max:30'],
          'email'=>['required'],
          'name'=>['required'],
        'surname'=>['required'],
        // 'telefono'=>
        'password'=>['required', 'min:8','max:30'],
        ]);

        $usuario = new Usuario;
        $usuario->usuario = $request->input('username');
        $usuario->email = $request->input('email');
        $usuario->nombre = $request->input('name');
        $usuario->apellido = $request->input('surname');
        $usuario->telefono = $request->input('tel');
        $usuario->contrasena = $request->input('password');
        $usuario->rol = 'alumno';
        $usuario->save();

            return view('index');
        
        

        

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function show(Usuario $usuario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function edit(Usuario $usuario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUsuarioRequest  $request
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUsuarioRequest $request, Usuario $usuario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Usuario $usuario)
    {
        //
    }
}
