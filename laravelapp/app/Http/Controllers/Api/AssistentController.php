<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\AssistentResource;
use App\Models\Assistent;
use Illuminate\Http\Request;

class AssistentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $assistent = Assistent::all();

        return AssistentResource::collection($assistent);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Assistent $assistent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Assistent $assistent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Assistent $assistent)
    {
        //
    }
}
