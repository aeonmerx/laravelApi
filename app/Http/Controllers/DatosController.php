<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Datos;

class DatosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $datos = Datos::all();
        
       return view("datos.index",compact("datos")) ;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("datos.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    
    

        // Crea un nuevo objeto Datos y asigna los valores recibidos del formulario
        $dato = new Datos();
        $dato->nombre = $request->nombre;
        $dato->edad = $request->edad;
        $dato->ciudad = $request->ciudad;
        
        
        // Guarda el nuevo objeto en la base de datos
        $dato->save();
        return redirect()->route('datos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
