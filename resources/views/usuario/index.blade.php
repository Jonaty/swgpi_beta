@extends('template.layout')

@section('title', 'Usuarios')

@section('contenido')

<h1>Usuarios</h1>

@foreach ($usuarios as $usuario)
     
    <p>{{ $usuario->nombre }}</p>
@endforeach
@endsection