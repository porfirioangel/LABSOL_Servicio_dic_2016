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
    {{ Form::open(array('url' => 'administradores')) }}
        <div class="col-md-12 col-md-offset-0">
            <h4>Crear Nuevo Administrador</h4>
            <div class="panel panel-default">
                <div class="panel-body form-horizontal payment-form">
                {{--Aqui comienza el formulario--}}
                     <div class="form-group">
                        <label for="concept" class="col-sm-5 control-label">Usuario:</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="usuario" name="usuario">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="concept" class="col-sm-5 control-label">Password:</label>
                        <div class="col-sm-3">
                            <input type="password" class="form-control" id="password" name="password">
                        </div>
                    </div>

                {{--Aqui termina el formulario--}}
                    <div class="form-group">
                            <div class="col-sm-8 text-right">
                         {{ Form::submit('Guardar', array('class' => 'btn btn-primary')) }}

                        {{ Form::close() }}  
                            </div>
                    </div>
                </div>
            </div>            
        </div>
@stop
