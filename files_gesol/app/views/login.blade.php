@extends('layouts.masterBeta')

@section('head')
	{{HTML::style('css/test.css');}}
	{{HTML::style('css/signin.css');}}
	
@stop

@section('cabecera')
	<div class="btn-group btn-group-justified" role="group" aria-label="...">
	  <div class="btn-group" role="group">
	    <a href="{{ URL::to('inicio') }}">
		    <button type="button" class="btn btn-primary">Inicio</button>
	    </a>
	  </div>
	  <div class="btn-group" role="group">
        <a href="{{ URL::to('verProyectos') }}">
            <button type="button" class="btn btn-primary">Proyectos Disponibles</button>
        </a>
      </div>
    <div class="btn-group" role="group">
      <a href="{{ URL::to('verProyectosFinalizados') }}">
        <button type="button" class="btn btn-primary">Proyectos Finalizados</button>
      </a>
    </div>
	  <div class="btn-group" role="group">
	    <a href="{{ URL::to('nuevoEstudiante') }}">
		    <button type="button" class="btn btn-primary">Registro</button>
	    </a>
	  </div>
	  <div class="btn-group" role="group">
	    <a href="{{ URL::to('login') }}">
		    <button type="button" class="btn btn-danger">Mi cuenta</button>
	    </a>
	  </div>
	</div>
@stop

@section('contenido')
    <!-- will be used to show any messages -->
    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif
	{{ Form::open(array('url' => 'acceso')) }}
		<div class="col-md-12 col-md-offset-0">
            <h4>Login</h4>
            <div class="panel panel-default">
                <div class="panel-body form-horizontal payment-form">
                {{--Aqui comienza el formulario--}}
                	<div class="form-group">
                        <label for="concept" class="col-sm-5 control-label">Usuario:</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="user" name="user">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="concept" class="col-sm-5 control-label">Contraseña:</label>
                        <div class="col-sm-3">
                            <input type="password" class="form-control" id="password" name="password">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="status" class="col-sm-5 control-label">Tipo:</label>
                        <div class="col-sm-3">
                            <select class="form-control" id="tipo" name="tipo">
                                <option>Estudiante</option>
                                <option>Administrador</option>                                
                            </select>
                        </div>
                    </div>
                {{--Aqui termina el formulario--}}
                    <div class="form-group">
                            <div class="col-sm-8 text-right">
                         {{ Form::submit('Entrar', array('class' => 'btn btn-primary')) }}

                        {{ Form::close() }}  
                            </div>
                    </div>
            	</div>
            </div>            
    	</div>
@stop
