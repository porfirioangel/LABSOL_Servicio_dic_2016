@extends('layouts.masterProAdministrador')

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

    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <td><b>Usuario</b></td>
                <td><b>Contraseña</b></td>
                <td><b>Acciones</b></td>
            </tr>
        </thead>
        <tbody>
        @foreach($cuentas as $cuenta)
            <tr>
                <td>{{ $cuenta->usuario }}</td>
                <td>{{ $cuenta->password }}</td>
                

                <!-- we will also add show, edit, and delete buttons -->
                <td>

                    <!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
                    <!-- we will add this later since its a little more complicated than the other two buttons -->
                    {{ Form::open(array('url' => 'administradores/' . $cuenta->id, 'class' => 'pull-right')) }}
                        {{ Form::hidden('_method', 'DELETE') }}
                        {{ Form::submit('Eliminar', array('class' => 'btn btn-warning')) }}
                    {{ Form::close() }}

                   

                </td>
            </tr>
        @endforeach
        
        </tbody>
    </table>
@stop