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
                <td>ID</td>
                <td>Nombre</td>
                <td>Acciones</td>
            </tr>
        </thead>
        <tbody>
        @foreach($perfiles as $perfil)
            <tr>
                <td>{{ $perfil->id}}</td>
                <td>{{ $perfil->nombre}}</td>
                

                <!-- we will also add show, edit, and delete buttons -->
                <td>
                    {{ Form::open(array('url' => 'perfiles/' . $perfil->id, 'class' => 'pull-right')) }}
                        {{ Form::hidden('_method', 'DELETE') }}
                        {{ Form::submit('Eliminar', array('class' => 'btn btn-warning')) }}
                    {{ Form::close() }}

                    <a class="btn btn-small btn-success" href="{{ URL::to('editarPerfil/' . $perfil->id) }}">Editar</a>
                </td>
                
            </tr>
        @endforeach
        
        </tbody>
    </table>

    {{ Form::open(array('url' => 'perfiles')) }}
        <div class="col-md-12 col-md-offset-0">
            <h4>Crear Perfil</h4>
            <div class="panel panel-default">
                <div class="panel-body form-horizontal payment-form">
                {{--Aqui comienza el formulario--}}
                    <div class="form-group">
                        <label for="concept" class="col-sm-5 control-label">Nombre:</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="perfil" name="perfil">
                        </div>
                    </div>
                    
                {{--Aqui termina el formulario--}}
                    <div class="form-group">
                            <div class="col-sm-8 text-right">
                         {{ Form::submit('Crear', array('class' => 'btn btn-primary')) }}

                        {{ Form::close() }}  
                            </div>
                    </div>
                </div>
            </div>            
        </div>
@stop