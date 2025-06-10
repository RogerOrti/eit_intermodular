<?php

namespace App\Http\Controllers\Api;

use Carbon\Carbon;
use DB;
use App\Models\Entrada;
use App\Classes\Utilitat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\EntradaResource;
use Illuminate\Database\QueryException;

class EntradaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $entrada = Entrada::all();

        return EntradaResource::collection($entrada);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        try {
            DB::beginTransaction();

            $entrada = new Entrada();

            $entrada->id_assistent = $request->input();
            $entrada->id_esdeveniment = $request->input();
            $entrada->id_assistent = Carbon::now();

            $entrada->save();

            DB::commit();            
        } catch (QueryException $ex) {
            $missatge = Utilitat::errorMessage($ex);
            DB::rollBack();
            $response = response()->json([
                'error' => $missatge,
                // 'input' =>$request->all()
            ], 400);
        }


    }

    /**
     * Display the specified resource.
     */
    public function show(Entrada $entrada)
    {
        return new EntradaResource($entrada);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Entrada $entrada)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Entrada $entrada)
    {
        //
    }
}
