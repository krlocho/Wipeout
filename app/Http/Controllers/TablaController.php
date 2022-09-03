<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTablaRequest;
use App\Http\Requests\UpdateTablaRequest;
use App\Models\Tabla;

class TablaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tablas= Tabla::orderBy('id','desc')->get();
        return view('tabla.index', compact('tablas'));
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
     * @param  \App\Http\Requests\StoreTablaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTablaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tabla  $tabla
     * @return \Illuminate\Http\Response
     */
    public function show(Tabla $tabla)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tabla  $tabla
     * @return \Illuminate\Http\Response
     */
    public function edit(Tabla $tabla)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTablaRequest  $request
     * @param  \App\Models\Tabla  $tabla
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTablaRequest $request, Tabla $tabla)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tabla  $tabla
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tabla $tabla)
    {
        //
    }
}
