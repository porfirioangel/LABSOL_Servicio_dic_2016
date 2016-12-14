@extends('layouts.masterProEstudiante')

@section('head')
    {{HTML::style('css/test.css');}}
    <script src="js/uploadFile.js"></script>
@stop

@section('cabecera')
    
@stop

@section('menu')
      
@stop

@section('contenido')
    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif
    @if ($errors->has())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                {{ $error }}<br>        
            @endforeach
        </div>
    @endif
	{{ Form::open(array('url' => 'uploadBeca', 'enctype' => 'multipart/form-data')) }}
		<div class="col-md-12 col-md-offset-0">
            <h4>Subir Documentación Beca</h4>
            <div class="panel panel-default">
                <div class="panel-body form-horizontal payment-form">
                {{--Aqui comienza el formulario--}}
                	
                    <div class="form-group">
                        <label for="status" class="col-sm-4 control-label">Perfil de beca:</label>
                        <div class="col-sm-6">
                            <select class="form-control" id="perfil" name="perfil">
                                <option>LABSOL</option>
                                <option>COZCYT</option>
                                <option>Otro</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="concept" class="col-sm-4 control-label">Periodo:</label>
                        <div class="col-sm-6">
                            <select class="form-control" id="periodo" name="periodo">
                                <option>Enero-Junio-2015</option>
                                <option>Julio-Diciembre-2015</option>
                                <option>Enero-Junio-2016</option>
                                <option>Julio-Diciembre-2016</option>
                                <option>Enero-Junio-2017</option>
                                <option>Julio-Diciembre-2017</option>
                                <option>Enero-Junio-2018</option>
                                <option>Julio-Diciembre-2018</option>
                                <option>Enero-Junio-2019</option>
                                <option>Julio-Diciembre-2019</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="status" class="col-sm-4 control-label">Solicitud de beca:</label>
                        <div class="col-sm-6">
                          	<input type="file" name="cartaSolicitud" id="cartaSolicitud" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="status" class="col-sm-4 control-label">CURP:</label>
                        <div class="col-sm-6">
                            <input type="file" name="curp" id="curp" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="status" class="col-sm-4 control-label">IFE:</label>
                        <div class="col-sm-6">
                            <input type="file" name="ife" id="ife" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="status" class="col-sm-4 control-label">Carta de prestación de servicio:</label>
                        <div class="col-sm-6">
                            <input type="file" name="cartaPrestacion" id="cartaPrestacion" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="status" class="col-sm-4 control-label">Carta de aceptación de servicio:</label>
                        <div class="col-sm-6">
                            <input type="file" name="cartaAceptacion" id="cartaAceptacion" class="form-control" required>
                        </div>
                    </div>
                    
                {{--Aqui termina el formulario--}}
                    <div class="form-group">
                            <div class="col-sm-10 text-right">
                         {{ Form::submit('Subir Beca', array('class' => 'btn btn-primary')) }}

                        {{ Form::close() }}  
                            </div>
                    </div>
                    {{--Aqui comienza la tabla para descargar y eliminar la beca--}}
                    <hr>
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <td>Nombre</td>
                                <td>Carta Solicitud</td>
                                <td>CURP</td>
                                <td>IFE</td>
                                <td>Carta Prestación</td>
                                <td>Carta Aceptación</td>
                                <td></td>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($becax as $beca)
                         
                            <tr>
                                <td>{{ $beca->estudiante->nombres}} {{$beca->estudiante->apellidos}}</td>
                                

                               
                                <td>
                                    <a class="btn btn-small btn-success" href="{{ URL::to('descargarSolicitudEstudiante/' . $beca->estudiante->id) }}">Descargar</a>
                                </td>
                                <td>
                                    <a class="btn btn-small btn-success" href="{{ URL::to('descargarCURPEstudiante/' . $beca->estudiante->id) }}">Descargar</a>
                                </td>
                                <td>
                                    <a class="btn btn-small btn-success" href="{{ URL::to('descargarIFEEstudiante/' . $beca->estudiante->id) }}">Descargar</a>
                                </td>
                                <td>
                                    <a class="btn btn-small btn-success" href="{{ URL::to('descargarPrestacionEstudiante/' . $beca->estudiante->id) }}">Descargar</a>
                                </td>
                                <td>
                                    <a class="btn btn-small btn-success" href="{{ URL::to('descargarAceptacionEstudiante/' . $beca->estudiante->id) }}">Descargar</a>
                                </td>
                                <td>
                                    <a class="btn btn-small btn-danger" href="{{ URL::to('eliminarBeca/' . $beca->id )}}">Eliminar</a>
                                </td>
                            </tr>
                        @endforeach
                        
                        </tbody>
                    </table>
            	</div>
            </div>            
    	</div>
@stop
