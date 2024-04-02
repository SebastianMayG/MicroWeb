<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreditoController extends Controller
{
    public function index()
    {
        return view('Credito.index');
    }

}
