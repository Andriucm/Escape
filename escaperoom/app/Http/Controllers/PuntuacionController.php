<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePuntuacionRequest;
use App\Http\Requests\UpdatePuntuacionRequest;

use App\Models\User;
use Illuminate\Support\Facades\DB;

class PuntuacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $sql = 'SELECT users.usuario, sum(partidas.puntos) as puntos 
            from users, partidas 
            where partidas.codUsuario = users.codUsuario 
            group by partidas.codUsuario, users.usuario';
        $usuarios = DB::select($sql);


        return view('puntuaciones', compact('usuarios'));
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
     * @param  \App\Http\Requests\StorePuntuacionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePuntuacionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Puntuacion  $puntuacion
     * @return \Illuminate\Http\Response
     */
    public function show(Puntuacion $puntuacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Puntuacion  $puntuacion
     * @return \Illuminate\Http\Response
     */
    public function edit(Puntuacion $puntuacion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePuntuacionRequest  $request
     * @param  \App\Models\Puntuacion  $puntuacion
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePuntuacionRequest $request, Puntuacion $puntuacion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Puntuacion  $puntuacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Puntuacion $puntuacion)
    {
        //
    }
}