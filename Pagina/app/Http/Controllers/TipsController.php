<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TipsController extends Controller
{
    public function index()
    {
        return view('TipsYCursos.Tips.index');
    }
}
