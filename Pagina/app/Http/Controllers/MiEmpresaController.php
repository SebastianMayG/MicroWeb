<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MiEmpresa;

class MiEmpresaController extends Controller
{
    public function index()
    {
        // Verificar si ya se ha contestado el formulario
        $empresa = MiEmpresa::first();
        if ($empresa && $empresa->contestado) {
            // Si ya se ha contestado, redirigir a la página de index con la variable $empresa
            return view('MiPerfil.Empresa.index', ['miempresa' => $empresa]);
        } else {
            // Si no se ha contestado, mostrar el formulario
            return view('MiPerfil.Empresa.formulario');
        }
    }

    public function store(Request $request)
    {
        $empresa = MiEmpresa::first();
        // Validación de campos
        $request->validate([
            'rfc' => 'required|string',
            'regimen' => 'required|string',
            'codigo-postal' => 'required|string',
            'nombre' => 'required|string',
            'email' => 'required|email',
            'logo' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Asegura que el archivo sea una imagen y tenga un tamaño máximo de 2MB
        ]);

        // Subir archivo de imagen
        $imageName = null;
        if ($request->hasFile('logo')) {
            $image = $request->file('logo');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/logos', $imageName); // Almacenar la imagen en la carpeta de logos dentro del almacenamiento
        }

        // Guardar los datos en la base de datos
        MiEmpresa::create([
            'rfc' => $request->rfc,
            'regimen_fiscal' => $request->regimen,
            'direccion_codigo_postal' => $request->input('codigo-postal'),
            'nombre_razon_social' => $request->nombre,
            'email' => $request->email,
            'logo' => $imageName, // Guarda el nombre del archivo de imagen
            'contestado' => true,
        ]);
        // Redirigir a la página de index
        return view('MiPerfil.Empresa.index',['miempresa' => $empresa])->with('success', 'Datos de la empresa guardados correctamente.');
    }
}
