<!DOCTYPE html>
<html>
<head>
	<title>@yield('titulo')</title>
</head>
<body>
	@section('menu')
		contenido del menu
	@show

	<div class="container">
		@yield('contenido')
	</div>
</body>
</html>