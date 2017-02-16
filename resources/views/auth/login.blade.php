@extends('template.layout')

@section('title', 'Login')

@section('contenido')

<h1>Login</h1>

<form action="/login" method="POST">
	
	{!! csrf_field() !!}
	<label for="email">Email</label>
	<input type="email" name="email" placeholder="Email" class="form-control">
     
    <br>

	<label for="password">Contraseña</label>
	<input type="password" name="password" placeholder="Contraseña" class="form-control">

	<br>

	<input type="submit" value="Entrar" class="btn btn-primary">
</form>
@endsection