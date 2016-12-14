@extends('layouts.masterShowAdministrador')

@section('head')
    {{HTML::style('css/test.css');}}
@stop

@section('cabecera')
    
@stop

@section('menu')
    
@stop
@section('contenido')
{{ Form::model($estudiante, array('route' => array('perfiles.update', $perfil->id), 'method' => 'PUT')) }}
    <div class="col-md-12 col-md-offset-0">
            <h4>Editar Perfil:</h4>
            <div class="panel panel-default">
                
                <div class="panel-body form-horizontal payment-form">
                {{--Aqui comienza el formulario--}}
                    <div class="form-group">
                        <label for="concept" class="col-sm-4 control-label">Nombre:</label>
                        <div class="col-sm-5">
                            {{ Form::text('nombre', null, array('class' => 'form-control')) }}
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-9 text-right">
                     {{ Form::submit('Editar', array('class' => 'btn btn-primary')) }}


                    {{ Form::close() }}  
                        </div>
                    </div>
                </div>
            </div>            
    </div>
@stop
