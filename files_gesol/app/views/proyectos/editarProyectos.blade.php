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
                <td>Nombre</td>
                <td>Dependencia</td>
                <td>Acciones</td>
            </tr>
        </thead>
        <tbody>
        @foreach($proyectos as $proyecto)
            <tr>
                <td>{{ $proyecto->nombre }}</td>
                <td>{{ $proyecto->dependencia }}</td>

                <!-- we will also add show, edit, and delete buttons -->
                <td>

                    <!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
                    <!-- we will add this later since its a little more complicated than the other two buttons -->
                    {{ Form::open(array('url' => 'proyectos/' . $proyecto->id, 'class' => 'pull-right')) }}
                        {{ Form::hidden('_method', 'DELETE') }}
                        {{ Form::submit('Eliminar', array('class' => 'btn btn-warning')) }}
                    {{ Form::close() }}


                    <a class="btn btn-small btn-success" href="{{ URL::to('proyectos/' . $proyecto->id) }}">Editar</a>

                    <a class="btn btn-small btn-danger" href="{{ URL::to('finalizarProyecto/' . $proyecto->id) }}">Finalizar</a>

                    <!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
                    <!--a class="btn btn-small btn-info"  class="pull-right" href="{{ URL::to('proyecto/' . $proyecto->id . '/edit') }}">Actualizar</a-->

                </td>
            </tr>
        @endforeach
        
        </tbody>
    </table>
@stop