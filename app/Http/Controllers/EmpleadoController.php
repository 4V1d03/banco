<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado; //Referencia de modelo (Empleado)

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $empleados = Empleado::all();
        return view('empleado.index')->with('empleados', $empleados);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('empleado.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $empleado = new Empleado();

        $empleado -> codempleado = $request -> get('codempleado');
        $empleado -> nombre = $request -> get('nombre');
        $empleado -> apellido = $request -> get('apellido');
        $empleado -> nivel = $request -> get('nivel');
        $empleado -> telefono = $request -> get('telefono');

        $empleado -> save();

        return redirect('empleado');


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
        $empleadoEditado = Empleado::find($id);
        return view('empleado.edit')->with('empleadoEditado', $empleadoEditado);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $empleadoEditado = Empleado::find($id);

        $empleadoEditado -> codempleado = $request -> get('codempleado');
        $empleadoEditado -> nombre = $request -> get('nombre');
        $empleadoEditado -> apellido = $request -> get('apellido');
        $empleadoEditado -> nivel = $request -> get('nivel');
        $empleadoEditado -> telefono = $request -> get('telefono');

        $empleadoEditado ->save();
        return redirect('empleado');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $eliminarempleado=Empleado::find($id);
        $eliminarempleado->delete();

        return redirect('empleado');
    }
}
