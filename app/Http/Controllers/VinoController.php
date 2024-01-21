<?php

namespace App\Http\Controllers;

use App\Models\Vino;
use Illuminate\Http\Request;

class VinoController extends Controller
{

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        return view('formularioVino', ["id" => $id]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'ano' => 'required|string',
            'porcentaje_alcohol' => 'required|integer',
            'tipo_vino' => 'required|string',
            'bodega_id' => 'required|exists:bodegas,id',
        ]);

        Vino::create($request->all());

        return redirect()->route('bodega.show', ["id" => $request->post("bodega_id")])->with('success', 'Vino registrado correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $vino = Vino::findOrFail($id);
        return view('showVino', compact('vino'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $vino = Vino::findOrFail($id);
        return view('formularioVinoEdit', compact('vino'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        /*
        $validatedData = $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'ano' => 'required|string',
            'porcentaje_alcohol' => 'required|integer',
            'tipo_vino' => 'required|string',
            'bodega_id' => 'required|exists:bodegas,id',
        ]);
        */

        $vino = Vino::findOrFail($id);
        $vino->update($request->all());
        return redirect()->route('index')->with('success', 'Vino actualizado correctamente.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $bodegaId, string $id)
    {
        $vino = Vino::findOrFail($id);
        $vino->delete();

        return redirect()->route('bodega.show', ["id" => $bodegaId])->with('success', 'Vino eliminado correctamente.');
    }
}
