@extends('layouts.masterProEstudiante')

@section('head')
    {{HTML::style('css/test.css');}}
@stop

@section('cabecera')
    
@stop

@section('menu')
      
@stop
@section('contenido')

@if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif
<div class="col-md-12 col-md-offset-0">
    <h4>Datos del Estudiante</h4>
    <div class="panel panel-default">
        <div class="panel-body form-horizontal payment-form">
            <div class="form-group">
                <label for="concept" class="col-sm-9 control-label ">~Datos Personales~</label>
              
                <label for="amount" class="col-sm-5 control-label">Nombres:</label>
                <div class="col-sm-7">
                    <p class="form-control-static">{{ $estudiante->nombres }}</p>
                </div>
                <label for="amount" class="col-sm-5 control-label">Apellidos:</label>
                <div class="col-sm-7">
                    <p class="form-control-static">{{ $estudiante->apellidos }}</p>
                </div>
                <label for="amount" class="col-sm-5 control-label">Edad:</label>
                <div class="col-sm-7">
                    <p class="form-control-static">{{ $estudiante->edad }}</p>
                </div>
                <label for="amount" class="col-sm-5 control-label">Fecha de Nacimiento:</label>
                <div class="col-sm-7">
                    <p class="form-control-static">{{ $estudiante->fechaNacimiento }}</p>
                </div>
                <label for="amount" class="col-sm-5 control-label">Genero:</label>
                <div class="col-sm-7">
                    <p class="form-control-static">{{ $estudiante->sexo}}</p>
                </div>
                <label for="amount" class="col-sm-5 control-label">Dirección:</label>
                <div class="col-sm-7">
                    <p class="form-control-static">{{ $estudiante->direccion}}</p>
                </div>
                <label for="amount" class="col-sm-5 control-label">Codigo postal:</label>
                <div class="col-sm-7">
                    <p class="form-control-static">{{ $estudiante->codigoPostal}}</p>
                </div>
                <label for="amount" class="col-sm-5 control-label">Teléfono fijo:</label>
                <div class="col-sm-7">
                    <p class="form-control-static">{{ $estudiante->telefono}}</p>
                </div>
                <label for="amount" class="col-sm-5 control-label">Celular:</label>
                <div class="col-sm-7">
                    <p class="form-control-static">{{ $estudiante->celular}}</p>
                </div>
                <label for="amount" class="col-sm-5 control-label">Correo:</label>
                <div class="col-sm-7">
                    <p class="form-control-static">{{ $estudiante->email}}</p>
                </div>
                <label for="amount" class="col-sm-5 control-label">Estado:</label>
                <div class="col-sm-7">
                    <p class="form-control-static">{{ $estudiante->estado}}</p>
                </div>
                <label for="amount" class="col-sm-5 control-label">Municipio:</label>
                <div class="col-sm-7">
                    <p class="form-control-static">{{ $estudiante->municipio}}</p>
                </div>
                <label for="concept" class="col-sm-9 control-label ">~Datos Escolares~</label>
                
                <label for="amount" class="col-sm-5 control-label">Universidad:</label>
                <div class="col-sm-7">
                    <p class="form-control-static">{{ $estudiante->universidad}}</p>
                </div>
                <label for="amount" class="col-sm-5 control-label">Carrera:</label>
                <div class="col-sm-7">
                    <p class="form-control-static">{{ $estudiante->carrera}}</p>
                </div>
                <label for="amount" class="col-sm-5 control-label">:Matricula</label>
                <div class="col-sm-7">
                    <p class="form-control-static">{{ $estudiante->matricula}}</p>
                </div>
                <label for="amount" class="col-sm-5 control-label">Promedio General:</label>
                <div class="col-sm-7">
                    <p class="form-control-static">{{ $estudiante->promedio}}</p>
                </div>
                <label for="amount" class="col-sm-5 control-label">Modalidad:</label>
                <div class="col-sm-7">
                    <p class="form-control-static">{{ $estudiante->modalidad}}</p>
                </div>
                <label for="amount" class="col-sm-5 control-label">Grado:</label>
                <div class="col-sm-7">
                    <p class="form-control-static">{{ $estudiante->grado}}</p>
                </div>
                <label for="amount" class="col-sm-5 control-label">Periodo:</label>
                <div class="col-sm-7">
                    <p class="form-control-static">{{ $estudiante->periodo}}</p>
                </div>
                <label for="amount" class="col-sm-5 control-label">perfil:</label>
                <div class="col-sm-7">
                    <p class="form-control-static">{{ $estudiante->perfil->nombre}}</p>
                </div>

            </div>
        </div>
    </div>
</div>
    
@stop