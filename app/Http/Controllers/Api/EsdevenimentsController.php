<?php

namespace App\Http\Controllers\Api;

use App\Models\Esdeveniment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Database\QueryException;
use App\Http\Resources\EsdevenimentResource;

class EsdevenimentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // $limit = $request->query('limit', 6); // Limita el número de eventos a 6 por defecto.
        // $esdeveniments = Esdeveniment::select('id_esdeveniment', 'nom', 'descripcio', 'direccio', 'data_inici', 'data_fi' ,'imatge')
        //     ->take($limit)
        //     ->get();

        // return response()->json($esdeveniments);

        $esdevenimet = Esdeveniment::all();

        return EsdevenimentResource::collection($esdevenimet);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        try {
            DB::beginTransaction();

            $esdeveniment = new Esdeveniment();

            $esdeveniment->nom = $request->input();
            $esdeveniment->descripcio = $request->input();
            $esdeveniment->direccio = $request->input();
            $esdeveniment->empreses_id_usuaris = $request->input();

            $esdeveniment->save();

            DB::commit();
        } catch (QueryException $e) {
            DB::rollBack();
        }


        // $validatedData = $request->validate([
        //     'nom' => 'required|string|max:255',
        //     'descripcio' => 'required|string',
        //     'direccio' => 'required|string',
        //     'data_inici' => 'required|date',
        //     'data_fi' => 'required|date',
        //     'image' => 'required|image|max:2048', // Valida que sea una imagen
        // ]);

        // // Guarda la imagen en el sistema de archivos
        // $path = $request->file('image')->store('public/media');

        // // Guarda los datos del evento en la base de datos
        // $esdeveniment = Esdeveniment::create([
        //     'nom' => $validatedData['nom'],
        //     'descripcio' => $validatedData['descripcio'],
        //     'direccio' => $validatedData['direccio'],
        //     'image' => Storage::url($path), // Guarda la URL pública
        // ]);

        // return redirect()->back()->with('success', 'Evento creado con éxito.');
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
