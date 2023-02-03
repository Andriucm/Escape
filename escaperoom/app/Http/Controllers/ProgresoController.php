<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePuntuacionRequest;
use App\Http\Requests\UpdatePuntuacionRequest;

use App\Models\User;
use Illuminate\Support\Facades\DB;

class ProgresoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $totales = DB::table('partidas')->where('codUsuario','=',$id)->sum('puntos');

        $sql = 'SELECT partidas.codPartida, partidas.dificultad, partidas.nivel, 
        partidas.puntos from partidas 
        where partidas.codUsuario = ' . $id;

        $progresos = DB::select($sql);

        return view('progreso', compact('totales', 'progresos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePuntuacionRequest  $request
     * @return \Illuminate\Http\Response
     */
}
