<?php

namespace App\Http\Controllers;

use App\Models\hora_grupo;
use Illuminate\Http\Request;

class HoraGrupoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hora_grupo= hora_grupo::simplePaginate();
        return view('hora_grupo.index',compact('hora_grupo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $hora_grupo = hora_grupo::all();
        return view('hora_grupo.create', compact('hora_grupo','hora_grupo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $hora_grupo= new hora_grupo();
        $hora_grupo->hora_lunes = $request->lunes;
        $hora_grupo->hora_martes = $request->martes;
        $hora_grupo->hora_miercoles = $request->miercoles;
        $hora_grupo->hora_jueves = $request->jueves;
        $hora_grupo->hora_viernes = $request->viernes;

        $hora_grupo->save();

        return 'Nuevo grupo agregado con exito';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\hora_grupo  $hora_grupo
     * @return \Illuminate\Http\Response
     */
    public function show(hora_grupo $hora_grupo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\hora_grupo  $hora_grupo
     * @return \Illuminate\Http\Response
     */
    public function edit(hora_grupo $hora_grupo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\hora_grupo  $hora_grupo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, hora_grupo $hora_grupo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\hora_grupo  $hora_grupo
     * @return \Illuminate\Http\Response
     */
    public function destroy(hora_grupo $hora_grupo)
    {
        //
    }
}
