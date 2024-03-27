<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MiEmpresaController extends Controller
{
    public function index()
    {
        return view('MiPerfil.Empresa.index');
    }
}
