<?php

namespace App\Http\Controllers;

use App\Models\UsuarioPartida;
use App\Http\Requests\StoreUsuarioPartidaRequest;
use App\Http\Requests\UpdateUsuarioPartidaRequest;

class UsuarioPartidaController extends Controller
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
     * @param  \App\Http\Requests\StoreUsuarioPartidaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUsuarioPartidaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UsuarioPartida  $usuarioPartida
     * @return \Illuminate\Http\Response
     */
    public function show(UsuarioPartida $usuarioPartida)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UsuarioPartida  $usuarioPartida
     * @return \Illuminate\Http\Response
     */
    public function edit(UsuarioPartida $usuarioPartida)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUsuarioPartidaRequest  $request
     * @param  \App\Models\UsuarioPartida  $usuarioPartida
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUsuarioPartidaRequest $request, UsuarioPartida $usuarioPartida)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UsuarioPartida  $usuarioPartida
     * @return \Illuminate\Http\Response
     */
    public function destroy(UsuarioPartida $usuarioPartida)
    {
        //
    }
}
