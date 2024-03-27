<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MiPerfilController extends Controller
{
    public function index()
    {
        return view('MiPerfil.Perfil.index');
    }
}
