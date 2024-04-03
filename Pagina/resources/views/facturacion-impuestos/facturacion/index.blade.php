@extends('layouts.admin')

@section('contenido')
    @php
        $miempresa = App\Models\MiEmpresa::first();
        $cliente = App\Models\Persona::first();
        $venta = App\Models\venta::all();
        
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

                <div class="row">
                    <h2 style="text-align: center">Datos del cliente para la factura</h2>
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
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Formulario de la venta -->
            <div class="row" style="margin: 10px">
                <h2 style="text-align: center">Venta a facturar</h2>
                <form action="datos">
                    <div>
                        <div>
                            <label for="client-factura"> Cliente</label>
                            <input type="text" id="nombreCliente" name="nombre" required class="form-control"
                                placeholder="Nombre del cliente...">
                        </div>
                        <div>
                            <label for="Serie-comprobante">Id Factura</label>
                            <select name="idcliente" id="idcliente" class="form-control selectpicker" data-live-search="true">
                                <!--encontrar unicamente la Venta que se desea facturar -->
                                @foreach ($venta as $vent)
                                    <option value="{{ $vent->idVenta }}">{{ $vent->idVenta }}</option>
                                @endforeach
                            </select>

                            
                        </div>
                      
                    </div>

                </form>
            </div>

            <!-- Tabla de ventas -->
            <div class="container">
                <div class="row">
                    <h3 style="text-align: center">Deglose de los productos</h3>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-condensed table-hover">
                            <thead style="background-color:#A9D0F5">
                                <tr>
                                    <th>Cantidad</th>
                                    <th>Unidad</th>
                                    <th>Clave SAT</th>
                                    <th>Clave prod/Ser</th>
                                    <th>Descripción</th>
                                    <th>Valor Unitario</th>
                                    <th>Descuento</th>
                                    <th>Impuestos</th>
                                    <th>Importe</th>
                                    <!-- Otros encabezados de columna si es necesario -->
                                </tr>
                            </thead>

                            <tbody>
                                <!-- Filas de datos -->
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Total</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th>MXM</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
