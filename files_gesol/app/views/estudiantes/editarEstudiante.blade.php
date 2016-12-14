@extends('layouts.masterProEstudiante')

@section('head')
    {{HTML::style('css/test.css');}}
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

{{ Form::model($estudiante, array('route' => array('estudiantes.update', $estudiante->id), 'method' => 'PUT')) }}
    <div class="col-md-12 col-md-offset-0">
            <h4>Actualización de Estudiante:</h4>
            <div class="panel panel-default">
                
                <div class="panel-body form-horizontal payment-form">
                {{--Aqui comienza el formulario--}}
                <label for="concept" class="col-sm-9 control-label ">~Datos Personales~</label>
                    <div class="form-group">
                        <label for="concept" class="col-sm-4 control-label">Nombre(s):</label>
                        <div class="col-sm-5">
                            {{ Form::text('nombres', null, array('class' => 'form-control')) }}
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="concept" class="col-sm-4 control-label">Apellido(s):</label>
                        <div class="col-sm-5">
                            {{ Form::text('apellidos', null, array('class' => 'form-control')) }}
                            <!--input type="text" class="form-control" id="apellidos" name="apellidos"-->
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="amount" class="col-sm-4 control-label">Edad:</label>
                        <div class="col-sm-5">
                            {{ Form::number('edad', null, array('class' => 'form-control')) }}
                            <!--input type="number" class="form-control" id="edad" name="edad"-->
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="date" class="col-sm-4 control-label">Fecha de nacimiento:</label>
                        <div class="col-sm-5">
                            {{ Form::text('fechaNacimiento', null, array('class' => 'form-control')) }}
                            <!--input type="date" class="form-control" id="fechaNacimiento" name="fechaNacimiento"-->
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="status" class="col-sm-4 control-label">Sexo:</label>
                        <div class="col-sm-5">
                            {{ Form::select('sexo', array('Masculino' => 'Masculino', 'Femenino' => 'Femenino'), null, array('class' => 'form-control')) }}
                            <!--select class="form-control" id="sexo" name="sexo">
                                <option>Masculino</option>
                                <option>Femenino</option>
                            </select-->
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="concept" class="col-sm-4 control-label">Dirección:</label>
                        <div class="col-sm-5">
                            {{ Form::text('direccion', null, array('class' => 'form-control')) }}
                            <!--input type="text" class="form-control" id="direccion" name="direccion"-->
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="concept" class="col-sm-4 control-label">Codigo postal:</label>
                        <div class="col-sm-5">
                            {{ Form::text('codigoPostal', null, array('class' => 'form-control')) }}
                            <!--input type="text" class="form-control" id="codigoPostal" name="codigoPostal"-->
                        </div>
                    </div> 
                    <div class="form-group">
                        <label for="concept" class="col-sm-4 control-label">Telefono fijo:</label>
                        <div class="col-sm-5">
                            {{ Form::text('telefono', null, array('class' => 'form-control')) }}
                            <!--input type="text" class="form-control" id="telefono" name="telefono"-->
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="concept" class="col-sm-4 control-label">Celular:</label>
                        <div class="col-sm-5">
                            {{ Form::text('celular', null, array('class' => 'form-control')) }}
                            <!--input type="text" class="form-control" id="celular" name="celular"-->
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="status" class="col-sm-4 control-label">Estado</label>
                        <div class="col-sm-5">
                            {{ Form::select('estado', array(
                            'Aguascalientes' => 'Aguascalientes',
                            'Baja California' => 'Baja California',
                            'Baja California Sur' => 'Baja California Sur',
                            'Campeche' => 'Campeche',
                            'Chiapas' => 'Chiapas',
                            'Chihuahua' => 'Chihuahua',
                            'Coahuila' => 'Coahuila',
                            'Colima' => 'Colima',
                            'Distrito Federal' => 'Distrito Federal',
                            'Durango' => 'Durango',
                            'Estado de México' => 'Estado de México',
                            'Guanajuato' => 'Guanajuato',
                            'Guerrero' => 'Guerrero',
                            'Hidalgo' => 'Hidalgo',
                            'Jalisco' => 'Jalisco',
                            'Michoacán' => 'Michoacán',
                            'Morelos' => 'Morelos',
                            'Nayarit' => 'Nayarit',
                            'Nuevo León' => 'Nuevo León',
                            'Oaxaca' => 'Oaxaca',
                            'Puebla' => 'Puebla',
                            'Querétaro' => 'Querétaro',
                            'Quintana Roo' => 'Quintana Roo',
                            'San Luis Potosí' => 'San Luis Potosí',
                            'Sinaloa' => 'Sinaloa',
                            'Sonora' => 'Sonora',
                            'Tabasco' => 'Tabasco',
                            'Tamaulipas' => 'Tamaulipas',
                            'Tlaxcala' => 'Tlaxcala',
                            'Veracruz' => 'Veracruz',
                            'Yucatán' => 'Yucatán',
                            'Zacatecas' => 'Zacatecas'), null, array('class' => 'form-control')) }}
                            <!--select class="form-control" id="estado" name="estado">
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
                            </select-->
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="concept" class="col-sm-4 control-label">Municipio:</label>
                        <div class="col-sm-5">
                            {{ Form::text('municipio', null, array('class' => 'form-control')) }}
                            <!--input type="text" class="form-control" id="municipio" name="municipio"-->
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="concept" class="col-sm-4 control-label">Correo:</label>
                        <div class="col-sm-5">
                            {{ Form::text('email', null, array('class' => 'form-control')) }}
                            <!--input type="text" class="form-control" id="email" name="email"-->
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="concept" class="col-sm-4 control-label">Contraseña:</label>
                        <div class="col-sm-5">
                            {{ Form::text('contrasena', null, array('class' => 'form-control')) }}
                            <!--input type="password" class="form-control" id="contrasena" name="contrasena"-->
                        </div>
                    </div>
                    <label for="concept" class="col-sm-9 control-label">~Datos Escolares~</label>
                    <div class="form-group">
                        <label for="concept" class="col-sm-4 control-label">Universidad:</label>
                        <div class="col-sm-5">
                            {{ Form::text('universidad', null, array('class' => 'form-control')) }}
                            <!--input type="text" class="form-control" id="universidad" name="universidad"-->
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="concept" class="col-sm-4 control-label">Carrera:</label>
                        <div class="col-sm-5">
                            {{ Form::text('carrera', null, array('class' => 'form-control')) }}
                            <!--input type="text" class="form-control" id="carrera" name="carrera"-->
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="concept" class="col-sm-4 control-label">Matricula:</label>
                        <div class="col-sm-5">
                            {{ Form::text('matricula', null, array('class' => 'form-control')) }}
                            <!--input type="text" class="form-control" id="matricula" name="matricula"-->
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="concept" class="col-sm-4 control-label">Promedio General:</label>
                        <div class="col-sm-5">
                            {{ Form::text('promedio', null, array('class' => 'form-control')) }}
                            <!--input type="text" class="form-control" id="promedio" name="promedio"-->
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="status" class="col-sm-4 control-label">Modalidad:</label>
                        <div class="col-sm-5">
                            {{ Form::select('modalidad', array(
                            'Semestre' => 'Semestre',
                            'Cuatrimestre' => 'Cuatrimestre',
                            'Trimestre' => 'Trimestre' ), null, array('class' => 'form-control')) }}
                            <!--select class="form-control" id="modalidad" name="modalidad">
                                <option>Semestre</option>
                                <option>Cuatrimestre</option>
                                <option>Trimestre</option>
                            </select-->
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="amount" class="col-sm-4 control-label">Grado:</label>
                        <div class="col-sm-5">
                            {{ Form::number('grado', null, array('class' => 'form-control')) }}
                            <!--input type="number" class="form-control" id="grado" name="grado"-->
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="concept" class="col-sm-4 control-label">Periodo:</label>
                        <div class="col-sm-5">
                            {{ Form::select('periodo', array(
                            'Enero-Junio-2015' => 'Enero-Junio-2015',
                            'Julio-Diciembre-2015' => 'Julio-Diciembre-2015',
                            'Enero-Junio-2016' => 'Enero-Junio-2016',
                            'Julio-Diciembre-2016' => 'Julio-Diciembre-2016',
                            'Enero-Junio-2017' => 'Enero-Junio-2017',
                            'Julio-Diciembre-2017' => 'Julio-Diciembre-2017',
                            'Enero-Junio-2018' => 'Enero-Junio-2018',
                            'Julio-Diciembre-2018' => 'Julio-Diciembre-2018',
                            'Enero-Junio-2018' => 'Enero-Junio-2019',
                            'Julio-Diciembre-2018' => 'Julio-Diciembre-2019' ), null, array('class' => 'form-control')) }}
                            <!--select class="form-control" id="periodo" name="periodo">
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
                            </select-->
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
                     {{ Form::submit('Actualizar', array('class' => 'btn btn-primary')) }}


                    {{ Form::close() }}  
                        </div>
                    </div>
                </div>
            </div>            
    </div>
@stop
