<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OportunidadesController extends Controller
{
    public function index()
    {
        return view('oportunidades.index');
    }
}
