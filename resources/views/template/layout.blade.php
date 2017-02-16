<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title', 'Default')</title>
	<link rel="stylesheet" href="{{ url('/css/app.css') }}">
</head>
<body>
	
    <div class="container top">
    	<div class="panel panel-default">
    		<div class="panel-body color">
    			<h2 class="text-center">Universidad de Colima</h2>
    		</div>
    	</div>

    @include('template.modulos.navbar')

	@yield('contenido')
    </div>
</body>
</html>