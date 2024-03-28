<?php

namespace App\Http\Controllers;

use App\Models\Impuestos;
use Illuminate\Http\Request;

class ImpuestosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('facturacion-impuestos/impuestos/index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(Impuestos $impuestos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Impuestos $impuestos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Impuestos $impuestos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Impuestos $impuestos)
    {
        //
    }
}
