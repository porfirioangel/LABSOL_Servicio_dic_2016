@extends('layouts.masterBeta')

@section('head')
	{{HTML::style('css/test.css');}}
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


@if ($errors->has())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                {{ $error }}<br>        
            @endforeach
        </div>
@endif

{{ Form::open(array('url' => 'estudiantes')) }}
	<div class="col-md-12 col-md-offset-0">
            <h4>Registro de Estudiante:</h4>
            <div class="panel panel-default">
                
                <div class="panel-body form-horizontal payment-form">
                {{--Aqui comienza el formulario--}}
                <label for="concept" class="col-sm-9 control-label ">~Datos Personales~</label>
                    <div class="form-group">
                        <label for="concept" class="col-sm-4 control-label">Nombre(s):</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="nombres" name="nombres">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="concept" class="col-sm-4 control-label">Apellido(s):</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="apellidos" name="apellidos">
                        </div>
                    </div>
					<div class="form-group">
                        <label for="amount" class="col-sm-4 control-label">Edad:</label>
                        <div class="col-sm-5">
                            <input type="number" class="form-control" id="edad" name="edad">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="date" class="col-sm-4 control-label">Fecha de nacimiento:</label>
                        <div class="col-sm-5">
                            <input type="date" class="form-control" id="fechaNacimiento" name="fechaNacimiento">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="status" class="col-sm-4 control-label">Sexo:</label>
                        <div class="col-sm-5">
                            <select class="form-control" id="sexo" name="sexo">
                                <option>Masculino</option>
                                <option>Femenino</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="concept" class="col-sm-4 control-label">Dirección:</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="direccion" name="direccion">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="concept" class="col-sm-4 control-label">Codigo postal:</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="codigoPostal" name="codigoPostal">
                        </div>
                    </div> 
					<div class="form-group">
                        <label for="concept" class="col-sm-4 control-label">Telefono fijo:</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="telefono" name="telefono">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="concept" class="col-sm-4 control-label">Celular:</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="celular" name="celular">
                        </div>
                    </div>
					<div class="form-group">
                        <label for="status" class="col-sm-4 control-label">Estado</label>
                        <div class="col-sm-5">
                            <select class="form-control" id="estado" name="estado">
                                <option value="Aguascalientes">Aguascalientes</option>
								<option value="Baja California">Baja California</option>
								<option value="Baja California Sur">Baja California Sur</option>
								<option value="Campeche">Campeche</option>
								<option value="Chiapas">Chiapas</option>
								<option value="Chihuahua">Chihuahua</option>
								<option value="Coahuila">Coahuila</option>
								<option value="Colima">Colima</option>
								<option value="Distrito Federal">Distrito Federal</option>
								<option value="Durango">Durango</option>
								<option value="Estado de México">Estado de México</option>
								<option value="Guanajuato">Guanajuato</option>
								<option value="Guerrero">Guerrero</option>
								<option value="Hidalgo">Hidalgo</option>
								<option value="Jalisco">Jalisco</option>
								<option value="Michoacán">Michoacán</option>
								<option value="Morelos">Morelos</option>
								<option value="Nayarit">Nayarit</option>
								<option value="Nuevo León">Nuevo León</option>
								<option value="Oaxaca">Oaxaca</option>
								<option value="Puebla">Puebla</option>
								<option value="Querétaro">Querétaro</option>
								<option value="Quintana Roo">Quintana Roo</option>
								<option value="San Luis Potosí">San Luis Potosí</option>
								<option value="Sinaloa">Sinaloa</option>
								<option value="Sonora">Sonora</option>
								<option value="Tabasco">Tabasco</option>
								<option value="Tamaulipas">Tamaulipas</option>
								<option value="Tlaxcala">Tlaxcala</option>
								<option value="Veracruz">Veracruz</option>
								<option value="Yucatán">Yucatán</option>
								<option value="Zacatecas">Zacatecas</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="concept" class="col-sm-4 control-label">Municipio:</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="municipio" name="municipio">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="concept" class="col-sm-4 control-label">Correo:</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="email" name="email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="concept" class="col-sm-4 control-label">Contraseña:</label>
                        <div class="col-sm-5">
                            <input type="password" class="form-control" id="contrasena" name="contrasena">
                        </div>
                    </div>
                    <label for="concept" class="col-sm-9 control-label">~Datos Escolares~</label>
                    <div class="form-group">
                        <label for="concept" class="col-sm-4 control-label">Universidad:</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="universidad" name="universidad">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="concept" class="col-sm-4 control-label">Carrera:</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="carrera" name="carrera">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="concept" class="col-sm-4 control-label">Matricula:</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="matricula" name="matricula">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="concept" class="col-sm-4 control-label">Promedio General:</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="promedio" name="promedio">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="status" class="col-sm-4 control-label">Modalidad:</label>
                        <div class="col-sm-5">
                            <select class="form-control" id="modalidad" name="modalidad">
                                <option>Semestre</option>
                                <option>Cuatrimestre</option>
                                <option>Trimestre</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="amount" class="col-sm-4 control-label">Grado:</label>
                        <div class="col-sm-5">
                            <input type="number" class="form-control" id="grado" name="grado">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="concept" class="col-sm-4 control-label">Periodo:</label>
                        <div class="col-sm-5">
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
                        <label for="status" class="col-sm-4 control-label">Perfil:</label>
                        <div class="col-sm-5">
                            <select class="form-control" id="perfil_id" name="perfil_id">
                                @foreach ($perfiles as $perfil)
                                <option value="{{$perfil->id}}">{{$perfil->nombre}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
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
