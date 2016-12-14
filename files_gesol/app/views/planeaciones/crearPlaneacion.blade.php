@extends('layouts.masterProEstudiante')

@section('head')
    {{HTML::style('css/test.css');}}
    <script src="js/nuevasTareas.js"></script>
@stop

@section('cabecera')
    
@stop

@section('menu')
   
@stop
@section('contenido')
{{ Form::open(array('url' => 'tareas')) }}
    <div class="col-md-12 col-md-offset-0">
            <h4>Crear nuevas tareas:</h4>
            <div class="panel panel-default">
                
                <div class="panel-body form-horizontal payment-form">
                {{--Aqui comienza el formulario--}}
                    <div class="form-group">
                        <label for="concept" class="col-sm-4 control-label">Número Tareas:</label>
                         <div class="col-sm-5">
                            <select class="form-control" id="numeroTareas" name="numeroTareas">
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
                    
                    <div id="nuevasTareas">
                    </div>
                    
                    <div class="form-group">
                        <div class="col-sm-10 text-right">
                     {{ Form::submit('Crear Tareas', array('class' => 'btn btn-primary')) }}


                    {{ Form::close() }}  
                        </div>
                    </div>
                </div>
            </div>            
    </div>
@stop

