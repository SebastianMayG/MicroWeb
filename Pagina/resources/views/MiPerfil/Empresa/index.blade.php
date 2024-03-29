@extends ('layouts.admin')
@section ('contenido')
@extends('layouts.admin')

@section('contenido')
    <link rel="stylesheet" href="{{ asset('css/facturacion.css') }}">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="container">
                <h2>Datos de mi empresa</h2>
                <form action="#" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="rfc">RFC</label>
                        <input type="text" id="rfc" name="rfc" required class="form-control" placeholder="RFC...">
                    </div>
                    <div class="form-group">
                        <label for="regimen">Regimen Fiscal</label>
                        <select id="regimen" name="regimen" required class="form-control">
                            <option value="" disabled selected>Seleccionar</option>
                            <option value="Régimen Simplificado de Confianza">Régimen Simplificado de Confianza</option>
                            <option value="Sueldos y salarios e ingresos asimilados a salarios">Sueldos y salarios e ingresos asimilados a salarios</option>
                            <option value="Régimen de Actividades Empresariales y Profesionales">Régimen de Actividades Empresariales y Profesionales</option>
                            <option value="Régimen de Incorporación Fiscal">Régimen de Incorporación Fiscal</option>
                            <option value="Enajenación de bienes">Enajenación de bienes</option>
                            <option value="Régimen de Actividades Empresariales con ingresos a través de Plataformas Tecnológicas">Régimen de Actividades Empresariales con ingresos a través de Plataformas Tecnológicas</option>
                            <option value="Régimen de Arrendamiento">Régimen de Arrendamiento</option>
                            <option value="Intereses">Intereses</option>
                            <option value="Obtención de premios">Obtención de premios</option>
                            <option value="Dividendos">Dividendos</option>
                            <option value="Demás ingresos">Demás ingresos</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="codigo-postal">Dirección con Código Postal</label>
                        <input type="text" id="codigo-postal" name="codigo-postal" required class="form-control" placeholder="Código Postal...">
                    </div>
                    
                    <div class="form-group">
                        <label for="nombre">Nombre o Razón Social</label>
                        <input type="text" id="nombre" name="nombre" required class="form-control" placeholder="Nombre...">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" required class="form-control" placeholder="Email...">
                    </div>
                    <div class="form-group">
                            <label for="logo">Logo</label>
                            <input type="file" id="logo" name="logo" class="form-control-file">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Enviar</button>
                        <button type="reset" class="btn btn-danger">Cancelar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@endsection