@extends('layouts.admin')

@section('contenido')

<div class="card">
    <div class="card-header">
        <h1 class="text-center">Perfil</h1>
    </div>
    <div class="card-body text-center">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-12 mb-3">
                <!-- Aquí iría la foto del usuario -->
                @php
                use App\Models\MiEmpresa;
                    $empresa = MiEmpresa::first();
                @endphp
                <img src="https://lh5.googleusercontent.com/proxy/9vqIPeIeHQHyGEo43DlSgD-DUtidieclv56O6UoAcYNGPXGNnZwFJL2V7oSodehCB1YT28jit7pMSVjNTnrBOnlBxW0CiRmOeH22FlPockzEbfdQPHLkDMPcgMwWdNfVHF1r2QpUk6W_aY_J87A9lFtYKMHf8_xhkMB7l_4=w1200-h630-p-k-no-nu" class="img-fluid rounded-circle" alt="Foto de perfil" style="width: 150px; height: 150px; border-radius: 50px" id="profile">
                
            </div>
            <div class="col-md-12">
                <!-- Nombre del usuario -->
                <h5 class="card-title">Nombre del usuario: {{ Auth::user()->name }}</h5>
                <!-- Nombre de la empresa (si tienes esta información) -->

                @if ($empresa == null)
                        <p>Empresa:
                            <a href="/MiPerfil/Empresa"><strong>Agregar mi empresa</strong></a>
                        </p>
                    @else
                        <p>{{ $empresa->nombre_razon_social }}</p>
                    @endif
                <!-- Correo electrónico -->
                <p>Correo electrónico: {{ Auth::user()->email }}</p>
                <!-- Número de teléfono (si tienes esta información) -->
                <p>Número de teléfono: {{ Auth::user()->telefono }}</p>
            </div>
        </div>
    </div>
</div>
@endsection
