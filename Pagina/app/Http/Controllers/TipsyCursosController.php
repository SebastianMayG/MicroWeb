<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TipsyCursosController extends Controller
{
    public function index()
    {
        return view('Tips_y_Cursos.Cursos.index');
    }
}
