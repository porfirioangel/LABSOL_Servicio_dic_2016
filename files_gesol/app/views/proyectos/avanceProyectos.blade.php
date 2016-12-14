@extends('layouts.masterProAdministrador')

@section('head')
    {{HTML::style('css/test.css');}}
    <script src="js/nuevaActividad.js"></script>
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
                <td class="col-md-4">Proyecto</td>
                <td>Avance</td>
            </tr>
        </thead>
        <tbody>
        @foreach($proyectosAvance as $proyecto)
            <tr>
                <td>{{ $proyecto->nombre}}</td>
                
                <!-- we will also add show, edit, and delete buttons -->
                <td>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="{{$proyecto->porcentaje}}" aria-valuemin="0" aria-valuemax="100" style="width: {{$proyecto->porcentaje}}%;">
                           {{$proyecto->porcentaje}}%
                        </div>
                    </div>
                </td>
            </tr>
        @endforeach
        
        </tbody>
    </table>

    
@stop