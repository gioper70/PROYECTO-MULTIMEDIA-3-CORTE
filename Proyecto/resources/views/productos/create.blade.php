@extends('../plantillas/main')

@section('titulo')
	Add Producto
@endsection

@section('contenido')
	<div class="container" align="center">
		<form action="{{route('productos.store')}}" method="post" accept-charset="utf-8" enctype="multipart/form-data"><br>
			@csrf
			<div class="col-md-6">
				<input type="text" class="form-control" name="nombre" placeholder="Nombre" required><br>
				<input type="text" class="form-control" name="peso" placeholder="Peso" required><br>
				<input type="text" class="form-control" name="precio" placeholder="Precio" required><br>
				<input type="submit" class="btn btn-success" name="registrar" value="Registrar">
			</div><br>
		</form>
	</div><br><br>
@endsection