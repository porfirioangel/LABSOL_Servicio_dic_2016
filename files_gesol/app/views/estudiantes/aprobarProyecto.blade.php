@extends('layouts.masterProAdministrador')

@section('head')
    {{HTML::style('css/test.css');}}
@stop

@section('cabecera')
  
@stop

@section('menu')
     
@stop

@section('contenido')
       <!-- will be used to show any messages -->
    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif

    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <td>Nombre</td>
                <td>Universidad</td>
                <td>Proyecto</td>
                <td>Acciones</td>
            </tr>
        </thead>
        <tbody>
        @foreach($estudiantes as $estudiante)
            <tr>
                <td>{{$estudiante->nombres}} {{$estudiante->apellidos }}</td>
                <td>{{$estudiante->universidad }}</td>
                <td>{{$estudiante->Proyecto->nombre }}</td>

                <!-- we will also add show, edit, and delete buttons -->
                <td>

                    <a class="btn btn-small btn-success" href="{{ URL::to('aprobarProyectoEstudiante/' . $estudiante->id) }}">Aprobar</a>
                    <a class="btn btn-small btn-danger" href="{{ URL::to('rechazarProyectoEstudiante/' . $estudiante->id) }}">Rechazar</a>

                </td>
            </tr>
        @endforeach
        
        </tbody>
    </table>
@stop