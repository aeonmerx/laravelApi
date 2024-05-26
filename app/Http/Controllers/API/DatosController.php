<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Datos;


class DatosController extends Controller
{

    public function index()
    {
        //
        $datos = Datos::all();
        return $datos ;
       // return view("datos.index",compact("datos")) ;
    }
    public function store(Request $request)
    {
        // Validar los datos recibidos
        $request->validate([
            'nombre' => 'required|string|max:255',
            'edad' => 'required|integer',
            'ciudad' => 'required|string|max:255',
        ]);

        // Crear un nuevo objeto Datos y asignar los valores recibidos del JSON
        $dato = new Datos();
        $dato->nombre = $request->nombre;
        $dato->edad = $request->edad;
        $dato->ciudad = $request->ciudad;

        // Guardar el nuevo objeto en la base de datos
        $dato->save();

        // Retornar una respuesta JSON con los datos guardados
        return response()->json([
            'success' => true,
            'data' => $dato,
            'message' => 'Datos guardados correctamente'
        ], 201);
    }
}
