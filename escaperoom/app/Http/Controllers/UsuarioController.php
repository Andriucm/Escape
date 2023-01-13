<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules;
use App\Models\Usuario;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateUsuarioRequest;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;

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
            'usuario' => ['required', 'min:4', 'max:30', ],
            'email' => ['required', 'email', ],
            'name' => ['required', 'string',
            ],
            'surname' => ['required', 'string',
            ],
            'telefono' => ['required', 'integer','min:9' ],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $usuario = Usuario::create([
            'usuario' => $request->usuario,
            'email' => $request->email,
            'nombre' => $request->name,
            'apellido' => $request->surname,
            'telefono' => $request->telefono,
            'contrasena' => bcrypt($request->password),
            'rol' => 'alumno'
        ]);

        // Autologin
        // Auth::login($usuario);
        // Iniciar sesion despues de haberse registrado

        return to_route('login')->with('status', 'Cuenta creada correctamente');

        // $usuario = new Usuario;



        // $usuario = new Usuario;
        // $usuario->usuario = $request->input('username');
        // $usuario->email = $request->input('email');
        // $usuario->nombre = $request->input('name');
        // $usuario->apellido = $request->input('surname');
        // $usuario->telefono = $request->input('tel');
        // $usuario->contrasena = $request->input('password');
        // $usuario->rol = 'alumno';
        // $usuario->save();

        //     return view('index');





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