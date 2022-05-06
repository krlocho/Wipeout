<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreReparacionRequest;
use App\Http\Requests\UpdateReparacionRequest;
use App\Models\Reparacion;
use App\Models\Cliente;
use App\Models\Tabla;

class ReparacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        $reparaciones = Reparacion::orderBy('id', 'desc')->get();



        return view('reparacion.index', compact('reparaciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$tablas=Tabla::pluck('Modelo,','id');
        return view('reparacion.create'/* , compact('tablas') */);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreReparacionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreReparacionRequest $request)
    {
        $datos_reparacion = $request->except('_token');
        Reparacion::insert($datos_reparacion);
        return response()->json($datos_reparacion);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reparacion  $reparacion
     * @return \Illuminate\Http\Response
     */
    public function show(Reparacion $reparacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reparacion  $reparacion
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $reparacion=Reparacion::findOrFail($id);
        return view('reparacion.edit', compact('reparacion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateReparacionRequest  $request
     * @param  \App\Models\Reparacion  $reparacion
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateReparacionRequest $request, $id)
    {
        $datos_reparacion = $request->except('_token','_method');
        Reparacion::where('id','=', $id)->update($datos_reparacion);
        $reparacion=Reparacion::findOrFail($id);
        return view('reparacion.edit', compact('reparacion'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reparacion  $reparacion
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        Reparacion::destroy($id);
        return redirect('reparaciones')->with('success', 'Reparación eliminada');
    }
}
