@extends('../plantillas/main')

@section('titulo')
	Detalle Producto
@endsection

@section('contenido')
	<div class="container color" align="center">
		<div class="card" style="width: 18rem;">
			<div class="card-body">
				<div class="col-md-6 form-row">
					<div class="col">
						<label><strong>Nombre: </strong>{{$producto->nombre}}</label>
					</div>
					<div class="col">
						<label><strong>Peso: </strong>{{$producto->peso}}</label>
					</div>
				</div>
				<label><strong>Precio: </strong>{{$producto->precio}}</label>
			</div>
		</div><br>
	</div>
@endsection