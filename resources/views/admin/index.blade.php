@extends('template.layout')

@section('title', 'Admin')

@section('contenido')

<h1>Administradores</h1>

@foreach ($admins as $admin)
	
	<p>{{ $admin->nombre}}</p>
@endforeach
@endsection