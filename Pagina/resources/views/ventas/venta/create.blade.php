@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Nueva Venta</h3>
			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
				@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
				</ul>
			</div>
			@endif
		</div>
	</div>
			{!!Form::open(array('url'=>'ventas/venta','method'=>'POST','autocomplete'=>'off','files'=>'true'))!!}
            {{Form::token()}}
	<div class="row">
		<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
			<div class="form-group">
            	<label for="proveedor">Cliente</label>
				<select name="idcliente" id="idcliente" class="form-control selectpicker" data-live-search="true">
					@foreach ($personas as $persona)
					<option value="{{$persona->idpersona}}">{{$persona->nombre}}</option>
					@endforeach
				</select>
            </div>
		</div>
		<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
			<div class="form-group">
				<label>Tipo Comprobante</label>
				<select name="tipo_comprobante" class="form-control">
						<option value="Factura">Factura</option>
						<option value="Ticket">Ticket</option>
						<option value="Boleta">Boleta</option>
				</select>
			</div>
		</div>
		<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
			<div class="form-group">
            	<label for="serie_comprobante">Serie comprobante</label>
            	<input type="text" name="serie_comprobante" value="{{old('serie_comprobante')}}" class="form-control" placeholder="Serie comprobante...">
            </div>
		</div>
		<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
			<div class="form-group">
            	<label for="num_comprobante">Número comprobante</label>
            	<input type="text" name="num_comprobante" required value="{{old('num_comprobante')}}" class="form-control" placeholder="Número comprobante...">
            </div>
		</div>
	</div>
	<div class="row">
		<div class="panel panel-primary">
			<div class="panel-body">
				<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
					<div class="form-group">
						<label>Artículo</label>
						<select name="pidarticulo" class="form-control selectpicker" id="pidarticulo" data-live-search="true">
							@foreach($articulos as $articulo)
							<option value="{{$articulo->idarticulo}}_{{$articulo->stock}}_{{$articulo->precio_promedio}}">{{$articulo->articulo}}</option>
							@endforeach
						</select>
					</div>
				</div>
				<div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
					<div class="form-group">
						<label for="cantidad">Cantidad</label>
						<input type="number" name="pcantidad" id="pcantidad" class="form-control" placeholder="Cantidad">
					</div>
				</div>
				<div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
					<div class="form-group">
						<label for="stock">Stock</label>
						<input type="number" disabled name="pstock" id="pstock" class="form-control" placeholder="Stock">
					</div>
				</div>
				<div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
					<div class="form-group">
						<label for="precio_venta">Precio Venta</label>
						<input type="number" disabled name="pprecio_venta" id="pprecio_venta" class="form-control" placeholder="P. Venta">
					</div>
				</div>
				<div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
					<div class="form-group">
						<label for="descuento">Descuento</label>
						<input type="number" name="pdescuento" id="pdescuento" class="form-control" placeholder="P. Descuento" value ="0">
					</div>
				</div>
				<div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
					<div class="form-group">
						<button type="button" id="bt_add" class="btn btn-primary">Agregar</button>
					</div>
				</div>
				<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
					<table id="detalles" class="table table-striped table-bordered table-condensed table-hover">
						<thead style ="background-color:#A9D0F5">
							<th>Opciones</th>
							<th>Artículo</th>
							<th>Cantidad</th>
							<th>Precio Venta</th>
							<th>Descuento</th>
							<th>Subtotal</th>
						</thead>
						<tfoot>
							<th>Total</th>
							<th></th>
							<th></th>
							<th></th>
							<th></th>
							<th><h4 id="total">MXN 0.00</h4> <input type="hidden" name="total_venta" id="total_venta"></th>
						</tfoot>
						<tbody>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12" id="guardar">
			<div class="form-group">
				<input name="_token" value="{{csrf_token() }}" type="hidden"></input>
            	<button class="btn btn-primary" type="submit">Guardar</button>
            	<button class="btn btn-danger" type="reset">Cancelar</button>
        	</div>
		</div>
	</div>
			{!!Form::close()!!}		

@push('scripts')
<script>

	$(document).ready(function(){
		$('#bt_add').click(function(){
			agregar();
		})
	})

	var cont=0;
	var total=0;
	var subtotal =[];
	$('#guardar').show();
	$("#pidarticulo").change(mostrarValores);

	function mostrarValores() {
		datosArticulo = document.getElementById('pidarticulo').value.split('_');
		var precio_venta = parseFloat(datosArticulo[2]);
		precio_venta = precio_venta.toFixed(2);
		$("#pprecio_venta").val(precio_venta);
		$("#pstock").val(datosArticulo[1]);
	}
	
	function agregar() {

	datosArticulo = document.getElementById('pidarticulo').value.split('_');

	idarticulo = datosArticulo[0];
	//idarticulo = $("#pidarticulo").val();
    articulo = $("#pidarticulo option:selected").text();
    cantidad = parseFloat($("#pcantidad").val());
    precio_venta = parseFloat($("#pprecio_venta").val());
    descuento = parseFloat($("#pdescuento").val()); // Obtener el descuento
	stock=$("#pstock").val();

    if (idarticulo != "" && cantidad > 0 && precio_venta != "" && descuento >= 0) {
        subtotal[cont] = cantidad * precio_venta;

        // Aplicar descuento si existe
        if (!isNaN(descuento) && descuento >= 0) {
            subtotal[cont] -= descuento;
        }

        total += subtotal[cont]; // Sumar al total con el descuento aplicado

        var fila = '<tr class="selected" id="fila' + cont + '"> <td><button type="button" class="btn btn-warning" onclick="eliminar(' + cont + ');"> X </button></td> <td><input type ="hidden" name="idarticulo[]" value="' + idarticulo + '"> ' + articulo + ' </td> <td><input type ="number" name="cantidad[]" value="' + cantidad + '"></td> <td><input type ="number" name="precio_venta[]" value="' + precio_venta + '"></td> <td><input type ="number" name="descuento[]" value="' + descuento + '"></td> <td>'+subtotal[cont]+'</td> </tr>';

        cont++;
        limpiar();
        $('#total').html("MXN. " + total.toFixed(2)); // Asegurar que el total tenga 2 decimales
        evaluar();
        $('#detalles').append(fila);
    } else {
        alert("Error en los datos del artículo");
    }
}




	function limpiar() {
		$("#pcantidad").val("");
		$("#pprecio_compra").val("");
		$("#pprecio_venta").val("");
	}

	function evaluar() {
		if(total>0){
			$("#guardar").show();
			$('#total_venta').val(total);
		} else {
			$("#guardar").hide();
		}
	}

	function eliminar(index) {
    total = total - subtotal[index];
    $("#total").html("MXN " + total); 
    $("#fila" + index).remove();
    evaluar();      
}

</script>
@endpush
@endsection