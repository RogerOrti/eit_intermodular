<?php

namespace App\Http\Controllers\Api;

use App\Models\Exposicio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Database\QueryException;
use App\Http\Resources\ExposicioResource;

class ExposicioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $query = Exposicio::query();


        $exposicions = Exposicio::all();

        return ExposicioResource::collection($exposicions);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            DB::beginTransaction();

            $exposicio = new Exposicio();

            $exposicio->nom = $request->input('nom');
            $exposicio->descripcio = $request->input('descripcio');
            $exposicio->id_tipus_exposicions = $request->input();
            $exposicio->id_esdeveniment = $request->input();
            
            $exposicio->save();

            DB::commit();

        } catch (QueryException $ex) {
            $missatge = Utilitat::errorMessage($ex);
            DB::rollBack();
            $response = response()->json([
                'error' => $missatge,
            ], 400);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Exposicio $exposicio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Exposicio $exposicio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Exposicio $exposicio)
    {
        //
    }
}
