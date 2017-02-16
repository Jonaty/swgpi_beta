@extends('template.layout')

@section('title', 'Home')

@section('contenido')

@if (auth()->check())
	
	@if (auth()->user()->hasRoles('admin'))
	<h1>Bienvenido {{ auth()->user()->nombre }}  eres el {{ auth()->user()->rol}}</h1>

	@elseif(auth()->user()->hasRoles('user'))
	<h1>Bienvenido {{ auth()->user()->nombre }} eres el {{ auth()->user()->rol}}</h1>

	@elseif(auth()->user()->hasRoles('moderador'))
	<h1>Bienvenido {{ auth()->user()->nombre }} eres el {{ auth()->user()->rol}}</h1>

@endif

@endif
@endsection