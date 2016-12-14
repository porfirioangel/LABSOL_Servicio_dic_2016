@extends('layouts.masterPro')

@section('head')
    {{HTML::style('css/test.css');}}
    <script src="js/nuevaActividad.js"></script>
@stop

@section('cabecera')
    <div class="btn-group btn-group-justified" role="group" aria-label="...">
      <div class="btn-group" role="group">
        <a href="{{ URL::to('inicio') }}">
            <button type="button" class="btn btn-default">Inicio</button>
        </a>
      </div>
      <div class="btn-group" role="group">
        <a href="{{ URL::to('verProyectos') }}">
            <button type="button" class="btn btn-default">Proyectos</button>
        </a>
      </div>
      <div class="btn-group" role="group">
        <a href="{{ URL::to('') }}">
            <button type="button" class="btn btn-default">Mi cuenta</button>
        </a>
      </div>
      <div class="btn-group" role="group">
        <a href="{{ URL::to('') }}">
            <button type="button" class="btn btn-default">Cerrar Sesión</button>
        </a>
      </div>
    </div>
@stop

@section('menu')
    <div class="panel-group" id="accordion">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><span class="glyphicon glyphicon-user">
                    </span> Mi perfil</a>
                </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse in">
                <div class="panel-body">
                    <table class="table">
                        <tr>
                            <td>
                                <a href="{{ URL::to('') }}">Actualizar mis datos</a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><span class="glyphicon glyphicon-user">
                    </span> Proyectos</a>
                </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse">
                <div class="panel-body">
                    <table class="table">
                        <tr>
                            <td>
                                <a href="{{ URL::to('') }}">Elegir proyecto</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="{{ URL::to('') }}">Crear planeación</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="{{ URL::to('') }}">Editar planeación</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="{{ URL::to('') }}">Finalizar actividades</a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><span class="glyphicon glyphicon-user">
                    </span> Becas</a>
                </h4>
            </div>
            <div id="collapseThree" class="panel-collapse collapse">
                <div class="panel-body">
                    <table class="table">
                        <tr>
                            <td>
                                <a href="{{ URL::to('') }}">Subir documentación</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="{{ URL::to('') }}">Actualizar documentación</a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>  
    </div>  
@stop
@section('contenido')
    {{ Form::open(array('url' => 'planeaciones')) }}
        <div class="col-md-7 col-md-offset-3">
            <h4>Elegir y crear planeación del proyecto</h4>
            <div class="panel panel-default">
                <div class="panel-body form-horizontal payment-form">
                {{--Aqui comienza el formulario--}}
                     <div class="form-group">
                        <label for="concept" class="col-sm-3 control-label">Usuario:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="usuario" name="usuario">
                        </div>
                    </div>

                {{--Aqui termina el formulario--}}
                    <div class="form-group">
                            <div class="col-sm-12 text-right">
                         {{ Form::submit('Guardar', array('class' => 'btn btn-primary')) }}

                        {{ Form::close() }}  
                            </div>
                    </div>
                </div>
            </div>            
        </div>
@stop