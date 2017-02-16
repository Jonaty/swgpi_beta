@extends('template.layout')

@section('title', 'Protocolo')

@section('contenido')

<h1>Protocolo</h1>
<form action="/" method="POST">
	
	<label for="titulo">Título</label>
	<input type="text" class="form-control" name="titulo" placeholder="Título">
	<br>

	<label for="objetivo">Objetivo</label>
	<br>
	<textarea name="objetivo" id="objetivo" cols="140" rows="2"></textarea>

	<br>
	<label for="especificaciones">Especificaciones</label>
	<br>
	<textarea name="especificaciones" id="especificaciones" cols="140" rows="2"></textarea>

	<br>
	<label for="justificacion">Justificación</label>
	<br>
	<textarea name="justificacion" id="justificacion" cols="140" rows="2"></textarea>

	<input type="submit" class="btn btn-primary" value="Crear">

</form>
@endsection