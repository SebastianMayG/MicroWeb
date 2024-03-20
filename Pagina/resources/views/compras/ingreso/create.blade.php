@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Nuevo Ingreso</h3>
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
			{!!Form::open(array('url'=>'compras/ingreso','method'=>'POST','autocomplete'=>'off','files'=>'true'))!!}
            {{Form::token()}}
	<div class="row">
		<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
			<div class="form-group">
            	<label for="proveedor">Proveedor</label>
				<select name="idproveedor" id="idproveedor" class="form-control">
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

			</div>
		</div>
		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
			<div class="form-group">
            	<button class="btn btn-primary" type="submit">Guardar</button>
            	<button class="btn btn-danger" type="reset">Cancelar</button>
        	</div>
		</div>
	</div>
			{!!Form::close()!!}		

@endsection