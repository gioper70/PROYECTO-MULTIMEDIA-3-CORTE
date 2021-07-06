@extends('../plantillas/main')

@section('titulo')
	Editar Producto
@endsection

@section('contenido')
	<div class="container color" align="center">
		<form action="{{route('productos.update',$producto->id)}}" method="POST" accept-charset="utf-8" enctype="multipart/form-data"><br>
			@csrf 
			@method('PUT')
			<div class="col-md-6">
				<input type="text" class="form-control" name="nombre" value="{{$producto->nombre}}"><br>
				<input type="text" class="form-control" name="peso" value="{{$producto->peso}}"><br>
				<input type="text" class="form-control" name="precio" value="{{$producto->precio}}"><br>
				<input type="submit" class="btn btn-primary" name="editar" value="Editar"><br>
			</div>
		</form><br>
	</div><br><br>
@endsection