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
                <td>Proyecto</td>
                <td class="col-sm-4">Acciones</td>
            </tr>
        </thead>
        <tbody>
        @foreach($tareas as $tarea)
            <tr>
                <td>{{$tarea->nombre}}</td>
                <td>{{$tarea->proyecto->nombre}}</td>
               
                <!-- we will also add show, edit, and delete buttons -->
                <td>

                    <a class="btn btn-small btn-success" href="{{ URL::to('aprobarTarea/' . $tarea->id) }}">Aprobar</a>
                    <a class="btn btn-small btn-danger" href="{{ URL::to('rechazarTarea/' . $tarea->id) }}">Rechazar</a>

                </td>
            </tr>
        @endforeach
        
        </tbody>
    </table>
@stop