@extends('layouts.masterProEstudiante')

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

{{ Form::open(array('url' => 'seleccionarProyecto')) }}
    <div class="col-md-12 col-md-offset-0">
            <h4>Seleccionar proyecto:</h4>
            <div class="panel panel-default">
                
                <div class="panel-body form-horizontal payment-form">
                {{--Aqui comienza el formulario--}}
                    <div class="form-group">
                        <label for="status" class="col-sm-3 control-label">Proyecto:</label>
                        <div class="col-sm-7">
                            <select class="form-control" id="proyecto_id" name="proyecto_id">
                                @foreach ($proyectos as $proyecto)
                                <option value="{{$proyecto->id}}">{{$proyecto->nombre}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-10 text-right">
                     {{ Form::submit('Elegir Proyecto', array('class' => 'btn btn-primary')) }}


                    {{ Form::close() }}  
                        </div>
                    </div>
                </div>
            </div>            
    </div>
@stop
