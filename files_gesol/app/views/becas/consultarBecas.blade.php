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
                <td>Carta Solicitud</td>
                <td>CURP</td>
                <td>IFE</td>
                <td>Carta Prestación</td>
                <td>Carta Aceptación</td>
            </tr>
        </thead>
        <tbody>
        @foreach($becas as $beca)
        {{$beca->estudiante->id}}
            <tr>
                <td>{{ $beca->estudiante->nombres}} {{$beca->estudiante->apellidos}}</td>
                

                <!-- we will also add show, edit, and delete buttons -->
                <td>
                    <a class="btn btn-small btn-success" href="{{ URL::to('descargarSolicitud/' . $beca->estudiante->id) }}">Descargar</a>
                </td>
                <td>
                    <a class="btn btn-small btn-success" href="{{ URL::to('descargarCURP/' . $beca->estudiante->id) }}">Descargar</a>
                </td>
                <td>
                    <a class="btn btn-small btn-success" href="{{ URL::to('descargarIFE/' . $beca->estudiante->id) }}">Descargar</a>
                </td>
                <td>
                    <a class="btn btn-small btn-success" href="{{ URL::to('descargarPrestacion/' . $beca->estudiante->id) }}">Descargar</a>
                </td>
                <td>
                    <a class="btn btn-small btn-success" href="{{ URL::to('descargarAceptacion/' . $beca->estudiante->id) }}">Descargar</a>
                </td>
                <td>
                    <a class="btn btn-small btn-danger" href="{{ URL::to('eliminarExpediente/' . $beca->id )}}">Eliminar</a>
                </td>
            </tr>
        @endforeach
        
        </tbody>
    </table>
@stop