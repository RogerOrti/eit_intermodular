<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\EsdevenimentResource;
use App\Models\Esdeveniment;
use Illuminate\Http\Request;

class EsdevenimentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $esdeveniments = Esdeveniment::all();

        return EsdevenimentResource::collection($esdeveniments);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nom' => 'required|string|max:255',
            'descripcio' => 'required|string',
            'direccio' => 'required|string',
            'image' => 'required|image|max:2048', // Valida que sea una imagen
        ]);

        // Guarda la imagen en el sistema de archivos
        $path = $request->file('image')->store('public/images');

        // Guarda los datos del evento en la base de datos
        $esdeveniment = Esdeveniment::create([
            'nom' => $validatedData['nom'],
            'descripcio' => $validatedData['descripcio'],
            'direccio' => $validatedData['direccio'],
            'image' => Storage::url($path), // Guarda la URL pública
        ]);

        return redirect()->back()->with('success', 'Evento creado con éxito.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Esdeveniment $esdeveniment)
    {
        $esdeveniment = Esdeveniment::where($esdeveniment);

        return EsdevenimentResource::collection($esdeveniment);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Esdeveniment $esdeveniment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Esdeveniment $esdeveniment)
    {
        //
    }
}
