@extends('layouts.masterShowAdministrador')

@section('head')

    {{HTML::style('css/test.css');}}
    <script src="../js/nuevaActividad.js"></script>

@stop

@section('cabecera')
   
@stop

@section('menu')
   
@stop

@section('contenido')
 @if ($errors->has())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                {{ $error }}<br>        
            @endforeach
        </div>
    @endif
    {{ Form::model($proyecto, array('route' => array('proyectos.update', $proyecto->id), 'method' => 'PUT')) }}
		<div class="col-md-12 col-md-offset-0">
            <h4>Actualizar Proyecto</h4>
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
                        <label for="status" class="col-sm-4 control-label">Dependencia:</label>
                        <div class="col-sm-5">
                            {{ Form::select('dependencia', array('LABSOL' => 'LABSOL', 
                            									 'COZCYT' => 'COZCYT',
                            									 'SEDUZAC' => 'SEDUZAC',
                            									 'SEDESOL' => 'SEDESOL',
                            									 'Intel' => 'Intel',
                            									 'Gobierno' => 'Gobierno',
                            									 'Zig Zag' => 'Zig Zag',
                            									 'ITZ' => 'ITZ',
                            									 'UTEZ' => 'UTEZ',
                            									 'Otro' => 'Otro'), null, array('class' => 'form-control')) }}
                            <!--select class="form-control" id="sexo" name="sexo">
                                <option>Masculino</option>
                                <option>Femenino</option>
                            </select-->
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="status" class="col-sm-4 control-label">Dependencia:</label>
                        <div class="col-sm-5">
                            {{ Form::select('tipoProyecto', array('Desarrollo de software' => 'Desarrollo de software', 
                            									 'Hardware libre' => 'Hardware libre',
                            									 'Linux y kernel' => 'Linux y kernel',
                            									 'Aplicaciones móviles' => 'Aplicaciones móviles',
                            									 'Diseño gráfico y multimedia' => 'Diseño gráfico y multimedia'), null, array('class' => 'form-control')) }}
                            <!--select class="form-control" id="sexo" name="sexo">
                                <option>Masculino</option>
                                <option>Femenino</option>
                            </select-->
                        </div>
                    </div>
					<div class="form-group">
                        <label for="concept" class="col-sm-4 control-label">Duración (semanas):</label>
                        <div class="col-sm-5">
                            {{ Form::text('duracion', null, array('class' => 'form-control')) }}
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="concept" class="col-sm-4 control-label">Número de integrantes:</label>
                        <div class="col-sm-5">
                            {{ Form::text('numeroIntegrantes', null, array('class' => 'form-control')) }}
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="concept" class="col-sm-4 control-label">Objetivo:</label>
                        <div class="col-sm-5">
                            {{ Form::text('objetivo', null, array('class' => 'form-control')) }}
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="concept" class="col-sm-4 control-label">Descripción:</label>
                        <div class="col-sm-5">
                            {{ Form::textarea('descripcion', null, array('class' => 'form-control')) }}
                        </div>
                    </div>
               
                    

                   <div class="form-group">
	                    <label for="amount" class="col-sm-4 control-label">Perfiles Requeridos:</label>
	                    <div class="col-lg-5">
            			</div>
                    </div>
                    @foreach ($perfiles as $perfil)
                    <div class="form-group">
                        <div class="col-lg-4"></div>
            			<div class="col-lg-5">
                			<div class="input-group">
                    		<span class="input-group-addon beautiful">
                                {{ Form::checkbox('perfiles[]', $perfil->id)}}
                       	 		<!--input type="checkbox" id="{{$perfil->nombre}}"  name="{{$perfil->nombre}}" value="{{$perfil->id}}"-->
                    		</span>
                    		<label for="amount" class="form-control">{{$perfil->nombre}}</label>
                			</div>
            			</div>
                    </div>
                    @endforeach
                    <div class="form-group">
                        <label for="concept" class="col-sm-4 control-label">Número Actividades:</label>
                         <div class="col-sm-5">
                            <select class="form-control" id="numeroActividades" name="numeroActividades">
                                <option>0</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>
                            </select>
                        </div>
                    </div>
                    <div id="nuevasActividades">
                    </div>

                    
                    

                {{--Aqui termina el formulario--}}
                    <div class="form-group">
                            <div class="col-sm-9 text-right">
                         {{ Form::submit('Guardar', array('class' => 'btn btn-primary')) }}

                        {{ Form::close() }}  
                            </div>
                    </div>
                    <table class="table table-striped table-bordered">
				        <thead>
				            <tr>
				                <td>Actividad</td>
				                <td>Eliminar</td>
				           
				            </tr>
				        </thead>
				        <tbody>
				        @foreach($actividades as $actividad)
				            <tr>
				                <td>
				                    {{$actividad->nombre}}
				                </td>
				                <td>
				                    <a class="btn btn-small btn-danger" href="{{ URL::to('eliminarActividad/' . $actividad->id) }}">Eliminar</a>
				                </td>
				                
				            </tr>
				        @endforeach
				        
				        </tbody>
				    </table>
            	</div>
            </div>            
    	</div>

    
@stop