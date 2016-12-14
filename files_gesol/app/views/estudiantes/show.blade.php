@extends('layouts.masterProAdministrador')

@section('head')
    {{HTML::style('css/test.css');}}
@stop

@section('cabecera')
    
@stop

@section('menu')
    
@stop

@section('contenido')
    <div class="jumbotron text-center">
        <h2>{{ $estudiante->nombres }}</h2>
        
    </div>
@stop