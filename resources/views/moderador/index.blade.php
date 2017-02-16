@extends('template.layout')

@section('title', 'Moderadores')

@section('contenido')
  
  <h1>Moderadores</h1>

  @foreach ($moderadores as $moderador)
  	
  	<p>{{ $moderador->nombre}} </p>
  @endforeach
@endsection