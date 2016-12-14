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
       <!-- will be used to show any messages -->
    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif

    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <td>Estudiantes</td>
                <td>Acciones</td>
            </tr>
        </thead>
        <tbody>
        @foreach($estudiantes as $estudiante)
            <tr>
                <td>{{ $estudiante->nombres}} {{$estudiante->apellidos }}</td>
                

                <!-- we will also add show, edit, and delete buttons -->
                <td>

                    <!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
                    <!-- we will add this later since its a little more complicated than the other two buttons -->
                    {{ Form::open(array('url' => 'estudiantes/' . $estudiante->id, 'class' => 'pull-right')) }}
                        {{ Form::hidden('_method', 'DELETE') }}
                        {{ Form::submit('Eliminar', array('class' => 'btn btn-warning')) }}
                    {{ Form::close() }}

                    <a class="btn btn-small btn-success" href="{{ URL::to('estudiantes/' . $estudiante->id) }}">Ver Estudiante</a>

                </td>
            </tr>
        @endforeach
        
        </tbody>
    </table>
@stop