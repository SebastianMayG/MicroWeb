@extends('layouts.admin')

@section('contenido')
    @php
        $miempresa = App\Models\MiEmpresa::first();
    @endphp
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
                <h2 style="text-align: center">Datos de la empresa</h2>
                <div class="row">
                    <div class="col-md-12 mb-3" style="text-align: center">
                        @if ($miempresa->logo)
                            <img src="{{ asset('storage/logos/' . $miempresa->logo) }}"
                                style="width: 150px; height: 150px; border-radius: 50px" class="img-thumbnail"
                                alt="Logo">
                        @else
                            <h4><strong>Logo:</strong> No se ha cargado ningún logo.</h4>
                        @endif
                    </div>

                    <div class="col-md-12" style="text-align: center">
                        <h4><strong>Nombre o Razón Social:</strong> {{ $miempresa->nombre_razon_social }}</h4>
                    </div>
                    <h2>Datos del cliente para la factura</h2>
                    <form action="#" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="rfc">RFC</label>
                            <input type="text" id="rfc" name="rfc" required class="form-control"
                                placeholder="RFC...">
                        </div>
                        <div class="form-group">
                            <label for="regimen">Regimen Fiscal</label>
                            <select id="regimen" name="regimen" required class="form-control">
                                <option value="" disabled selected>Seleccionar</option>
                                <option value="Régimen Simplificado de Confianza">Régimen Simplificado de Confianza</option>
                                <option value="Sueldos y salarios e ingresos asimilados a salarios">Sueldos y salarios e
                                    ingresos asimilados a salarios</option>
                                <option value="Régimen de Actividades Empresariales y Profesionales">Régimen de Actividades
                                    Empresariales y Profesionales</option>
                                <option value="Régimen de Incorporación Fiscal">Régimen de Incorporación Fiscal</option>
                                <option value="Enajenación de bienes">Enajenación de bienes</option>
                                <option
                                    value="Régimen de Actividades Empresariales con ingresos a través de Plataformas Tecnológicas">
                                    Régimen de Actividades Empresariales con ingresos a través de Plataformas Tecnológicas
                                </option>
                                <option value="Régimen de Arrendamiento">Régimen de Arrendamiento</option>
                                <option value="Intereses">Intereses</option>
                                <option value="Obtención de premios">Obtención de premios</option>
                                <option value="Dividendos">Dividendos</option>
                                <option value="Demás ingresos">Demás ingresos</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="codigo-postal">Código Postal</label>
                            <input type="text" id="codigo-postal" name="codigo-postal" required class="form-control"
                                placeholder="Código Postal...">
                        </div>
                        <div class="form-group">
                            <label for="uso-cfdi">Uso de CFDI</label>
                            <select id="uso-cfdi" name="uso-cfdi" required class="form-control">
                                <option value="" disabled selected>Seleccionar</option>
                                <option value="G01">G01 - Adquisición de mercancias</option>
                                <option value="G02">G02 - Devoluciones, descuentos o bonificaciones</option>
                                <option value="G03">G03 - Gastos en general</option>
                                <option value="I01">I01 - Construcciones</option>
                                <option value="I02">I02 - Mobiliario y equipo de oficina por inversiones</option>
                                <option value="I03">I03 - Equipo de transporte</option>
                                <option value="I04">I04 - Equipo de computo y accesorios</option>
                                <option value="I05">I05 - Dados, troqueles, moldes, matrices y herramental</option>
                                <option value="I06">I06 - Comunicaciones telefónicas</option>
                                <option value="I07">I07 - Comunicaciones satelitales</option>
                                <option value="I08">I08 - Otra maquinaria y equipo</option>
                                <option value="D01">D01 - Honorarios médicos, dentales y gastos hospitalarios</option>
                                <option value="D02">D02 - Gastos médicos por incapacidad o discapacidad</option>
                                <option value="D03">D03 - Gastos funerales</option>
                                <option value="D04">D04 - Donativos</option>
                                <option value="D05">D05 - Intereses reales efectivamente pagados por créditos
                                    hipotecarios (casa habitación)</option>
                                <option value="D06">D06 - Aportaciones voluntarias al SAR</option>
                                <option value="D07">D07 - Primas por seguros de gastos médicos</option>
                                <option value="D08">D08 - Gastos de transportación escolar obligatoria</option>
                                <option value="D09">D09 - Depósitos en cuentas para el ahorro, primas que tengan como
                                    base planes de pensiones</option>
                                <option value="D10">D10 - Pagos por servicios educativos (colegiaturas)</option>
                                <option value="CP01">CP01 - Pagos</option>
                                <option value="CN01">CN01 - Nómina</option>
                                <option value="S01">S01 - Sin Efectos Fiscales</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="nombre">Nombre o Razón Social</label>
                            <input type="text" id="nombre" name="nombre" required class="form-control"
                                placeholder="Nombre...">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" required class="form-control"
                                placeholder="Email...">
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
