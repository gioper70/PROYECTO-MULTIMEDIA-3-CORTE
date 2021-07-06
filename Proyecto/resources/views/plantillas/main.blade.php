<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>@yield('titulo')</title>
		<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
	</head>
	<body>
		<header class="container"><br>
				<nav class="nav">
					<ul class="breadcrumb">
						<li class="breadcrumb-item">
							<a class="" href=" {{route('productos.index')}} ">Inicio</a>
						</li>
						<li class="breadcrumb-item">
							<a class="" href=" {{route('productos.create')}} ">Add Producto</a>
						</li>
					</ul>
				</nav>
		</header>

		@yield('contenido')

		<footer class="container h6" align="center">
			&copy;MULTIMEDIA 2021.
		</footer><br>
	</body>
</html>