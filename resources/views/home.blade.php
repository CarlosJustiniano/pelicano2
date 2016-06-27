<!DOCTYPE html>
<html>
<head>
	<title>Mi Web</title>
</head>
<body>
	<h1>¡Hola {{ $nombre }}!</h1>
	la hora actual es {{ time() }}
	<a href="{{ action('UserController@method') }}">¡Aprieta aquí!</a>
</body>
</html>