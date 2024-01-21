<?php

namespace App\Http\Controllers;

use App\Models\Bodega;
use Illuminate\Http\Request;

class BodegaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bodegas = Bodega::all();
        return view("welcome", compact('bodegas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {
        return view("formularioBodega");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'direccion' => 'required|string|max:255',
            'telefono' => 'required|string|max:20',
            'persona_contacto' => 'required|string|max:255',
            'ano_fundacion' => 'required|integer',
            'descripcion' => 'nullable|string',
            'restaurante' => 'required|integer|in:1,0',
            'hotel' => 'required|integer|in:1,0',
        ]);

        Bodega::create([
            'nombre' => $request->input('nombre'),
            'email' => $request->input('email'),
            'direccion' => $request->input('direccion'),
            'telefono' => $request->input('telefono'),
            'persona_contacto' => $request->input('persona_contacto'),
            'ano_fundacion' => $request->input('ano_fundacion'),
            'descripcion' => $request->input('descripcion'),
            'restaurante' => $request->input('restaurante'),
            'hotel' => $request->input('hotel'),
        ]);

        return redirect()->route('index')->with('success', 'Bodega registrada correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $bodega = Bodega::findOrFail($id);
        $vinos = $bodega->vinos()->get(); // Use get() to retrieve the related records

        return view("showBodega", compact('bodega', 'vinos'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $bodega = Bodega::findOrFail($id);
        return view("formularioBodegaEdit", compact('bodega'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $bodega = Bodega::findOrFail($id);
        $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'direccion' => 'required|string|max:255',
            'telefono' => 'required|string|max:20',
            'persona_contacto' => 'required|string|max:255',
            'ano_fundacion' => 'required|integer',
            'descripcion' => 'nullable|string',
            'restaurante' => 'required|integer|in:1,0',
            'hotel' => 'required|integer|in:1,0',
        ]);
        $bodega->update([
            'nombre' => $request->input('nombre'),
            'email' => $request->input('email'),
            'direccion' => $request->input('direccion'),
            'telefono' => $request->input('telefono'),
            'persona_contacto' => $request->input('persona_contacto'),
            'ano_fundacion' => $request->input('ano_fundacion'),
            'descripcion' => $request->input('descripcion'),
            'restaurante' => $request->input('restaurante'),
            'hotel' => $request->input('hotel'),
        ]);
        return redirect()->route('bodega.show', ['id' => $id])->with('success', 'Bodega updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $bodega = Bodega::findOrFail($id);
        $bodega->delete();
        return redirect()->route('bodega.index')->with('success', 'Bodega deleted successfully.');
    }
}
