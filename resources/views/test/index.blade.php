<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>{{	$prueba->titulo	}}</title>
	<link rel="stylesheet" type="text/css" href="{{	asset('css/general.css')	}}">
</head>

<body>
	<br><br>
	<h1>{{	$prueba->titulo	}}</h1>
	<hr>
	{{	$prueba->contenido	}}
	<hr>
	{{$prueba->user->name}} | {{	$prueba->categoria->nombre	}}	| 	

	@foreach($prueba->tags as $tag)
		{{	$tag->name}}
	@endforeach
</body>
</html>