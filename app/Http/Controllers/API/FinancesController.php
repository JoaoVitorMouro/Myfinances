<?php

namespace App\Http\Controllers\API;

use App\Models\Finances;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FinancesController extends Controller
{
    /**
     * Display a listing of the resource.
     */ 
    public function index()
    {
        return json_encode(Finances::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Finances $finances)
    {
        return json_encode(Finances::find($finances));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Finances $finances)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Finances $finances)
    {
        //
    }
}
