<?php

namespace App\Http\Controllers;

use App\Models\Facturacion;
use Illuminate\Http\Request;

class FacturacionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('facturacion-impuestos/facturacion/index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'rfc' => 'required|string',
            'regimen' => 'required|string',
            'codigo-postal' => 'required|string',
            'nombre' => 'required|string',
            'email' => 'required|email',
            'uso-cfdi' =>'required|string'
                ]);
        Facturacion::create([
            'rfc' => $request->rfc,
            'regimen' => $request->regimen,
            'codigo-postal' => $request->input('codigo-postal'),
            'nombre' => $request->nombre,
            'email' => $request->email,
            'uso-cfdi' =>$request->uso_CFDI,

        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Facturacion $facturacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Facturacion $facturacion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Facturacion $facturacion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Facturacion $facturacion)
    {
        //
    }
}
