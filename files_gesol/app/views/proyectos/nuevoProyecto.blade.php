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
    @if ($errors->has())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                {{ $error }}<br>        
            @endforeach
        </div>
    @endif
	{{ Form::open(array('url' => 'proyectos')) }}
		<div class="col-md-12 col-md-offset-0">
            <h4>Crear Nuevo Proyecto</h4>
            <div class="panel panel-default">
                <div class="panel-body form-horizontal payment-form">
                {{--Aqui comienza el formulario--}}
                	<div class="form-group">
                        <label for="concept" class="col-sm-4 control-label">Nombre:</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="nombre" name="nombre">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="status" class="col-sm-4 control-label">Dependencia:</label>
                        <div class="col-sm-5">
                            <select class="form-control" id="dependencia" name="dependencia">
                                <option>LABSOL</option>
                                <option>COZCYT</option>
                                <option>SEDUZAC</option>
                                <option>SEDESOL</option>
                                <option>Intel</option>
                                <option>Gobierno</option>
                                <option>Zig Zag</option>
                                <option>ITZ</option>
                                <option>UTEZ</option>
                                <option>Otro</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="status" class="col-sm-4 control-label">Tipo de Proyecto:</label>
                        <div class="col-sm-5">
                            <select class="form-control" id="tipoProyecto" name="tipoProyecto">
                                <option>Desarrollo de software</option>
                                <option>Hardware libre</option>
                                <option>Linux y kernel</option>
                                <option>Aplicaciones móviles</option>
                                <option>Diseño gráfico y multimedia</option>
                                <option>Big Data</option>
                                <option>Internet of Things</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="amount" class="col-sm-4 control-label">Duración (semanas):</label>
                        <div class="col-sm-5">
                            <input type="number" class="form-control" id="duracion" name="duracion">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="amount" class="col-sm-4 control-label">Numero de integrantes:</label>
                        <div class="col-sm-5">
                            <input type="number" class="form-control" id="numeroIntegrantes" name="numeroIntegrantes">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="amount" class="col-sm-4 control-label">Objetivo:</label>
                        <div class="col-sm-5">
                            <textarea class="form-control" id="objetivo" name="objetivo"  rows="3"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="amount" class="col-sm-4 control-label">Descripción:</label>
                        <div class="col-sm-5">
                            <textarea class="form-control" id="descripcion" name="descripcion"  rows="6"></textarea>
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
            	</div>
            </div>            
    	</div>
@stop