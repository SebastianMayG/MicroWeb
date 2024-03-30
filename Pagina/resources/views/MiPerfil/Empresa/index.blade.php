@extends('layouts.admin')

@section('contenido')
    <link rel="stylesheet" href="{{ asset('css/miEmpresa.css') }}">
    <div class="container">
        <div class="card-header">
            <h3 class="text-center">Detalles de la empresa</h3>
        </div>
        <div class="card-body text-center">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-12 mb-3" style="text-align: center">
                    @if ($miempresa->logo)
                        <img src="{{ asset('storage/logos/' . $miempresa->logo) }}"
                            style="width: 150px; height: 150px; border-radius: 50px" class="img-thumbnail" alt="Logo">
                    @else
                        <h4><strong>Logo:</strong> No se ha cargado ningún logo.</h4>
                    @endif
                </div>
                <div class="col-md-12">
                    <h4><strong>Logo</strong>
                        <h4><strong>RFC:</strong> {{ $miempresa->rfc }}</h4>
                        <h4><strong>Regimen Fiscal:</strong> {{ $miempresa->regimen_fiscal }}</h4>
                        <h4><strong>Dirección con Código Postal:</strong> {{ $miempresa->direccion_codigo_postal }}</h4>
                        <h4><strong>Nombre o Razón Social:</strong> {{ $miempresa->nombre_razon_social }}</h4>
                        <h4><strong>Email:</strong> {{ $miempresa->email }}</h4>

                </div>

            </div>
        </div>
    </div>
@endsection
