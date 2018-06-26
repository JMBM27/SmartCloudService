<html>
<head>
	<title>Dashboard</title>
</head>
<body>

	<p>
		hola
	</p>
	

		@foreach($usuario as $usuarios)
			<tr>
				{{$usuarios->id}}
			</tr>
		@endforeach

</body>
</html>