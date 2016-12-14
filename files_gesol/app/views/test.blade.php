@extends('layouts.masterBeta')

@section('head')
	{{HTML::style('css/test.css');}}
@stop

@section('cabecera')
	<h1>Cabecera</h1>
@stop

@section('menu')
	<ul>
		<li>1</li>
		<li>2</li>
		<li>3</li>
		<li>4</li>
		<li>5</li>
	</ul>
@stop

@section('contenido')
	<p>Esto es el contenido</p>
@stop

@section('pie')
	<h6>Esto es el pie de pagina</h6>
@stop
