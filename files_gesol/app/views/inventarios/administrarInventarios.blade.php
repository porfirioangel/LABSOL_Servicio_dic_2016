{{-------------------------------------------------}}
{{-- Vista para la administracion del inventario --}}
{{-- User: porfirio                              --}}
{{-- Date: 7/19/16                               --}}
{{-- Time: 12:18 PM                              --}}
{{-------------------------------------------------}}
@extends('layouts.masterProAdministrador')

@section('head')
    {{HTML::style('css/test.css');}}
@stop

@section('contenido')
    @if ($errors->has())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                {{ $error }}<br>
            @endforeach
        </div>
    @endif

    <table class="table table-striped table-bordered">
        <thead>
        <tr class="row">
            <th class="col-md-3">Numero de Serie</th>
            <th class="col-md-3">Registro LABSOL</th>
            <th class="col-md-6">Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($inventarios as $inventario)
            <tr class="row">
                <td>{{$inventario->num_serie}}</td>
                <td>{{$inventario->reg_labsol}}</td>
                <td>
                    <a class="btn btn-small btn-success col-md-4"
                       href="{{ URL::to('inventarios/' . $inventario->id)
                       }}">Ver</a>
                    <a class="btn btn-small btn-warning col-md-4"
                       href="{{ URL::to('inventarios/' . $inventario->id .
                       '/edit') }}">Editar</a>
                    {{ Form::open(array('url' => 'inventarios/' .
                    $inventario->id))}}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Eliminar', array('class' => 'btn
                    btn-danger col-md-4')) }}
                    {{ Form::close() }}
                </td>
            </tr>
        @endforeach

        </tbody>
    </table>
@stop