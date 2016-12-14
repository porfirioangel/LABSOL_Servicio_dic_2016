{{----------------------------------------------------------------------------}}
{{-- Vista para la administracion de las solicitudes hechas por estudiantes --}}
{{-- User: porfirio                                                         --}}
{{-- Date: 7/22/16                                                          --}}
{{-- Time: 12:03 AM                                                         --}}
{{----------------------------------------------------------------------------}}

@extends('layouts.masterProAdministrador')

@section('head')
    {{HTML::style('css/test.css');}}
    {{ HTML::script('js/filtroSolicitudes.js') }}
@stop

@section('contenido')
    @if ($errors->has())
        <div class="alert alert-danger">
            <a href="#" class="close" data-dismiss="alert"
               aria-label="close">&times;</a>
            @foreach ($errors->all() as $error)
                <strong>Error: </strong>{{ $error }}<br>
            @endforeach
        </div>
    @endif

    <div class="col-md-12 col-md-offset-0">
        <h4>Solicitudes de préstamo</h4>
        <div class="panel panel-default">
            <div class="panel-body form-horizontal payment-form">
                <div class="row">
                    <div class="col-md-3 bg-warning">
                        <label class="checkbox-inline">
                            <input id="chkPendiente" type="checkbox"
                                   checked="checked">Pendiente
                        </label>
                    </div>
                    <div class="col-md-3 bg-info">
                        <label class="checkbox-inline">
                            <input id="chkAceptado" type="checkbox"
                                   checked="checked">Aceptado
                        </label>
                    </div>
                    <div class="col-md-3 bg-danger">
                        <label class="checkbox-inline">
                            <input id="chkRechazado" type="checkbox"
                                   checked="checked">Rechazado
                        </label>
                    </div>
                    <div class="col-md-3 bg-success">
                        <label class="checkbox-inline">
                            <input id="chkDevuelto" type="checkbox"
                                   checked="checked">Devuelto
                        </label>
                    </div>
                    <br/><br/>
                </div>

                <table class="table table-striped table-bordered">
                    <thead>
                    <tr class="row">
                        <th class="col-md-2">Tipo</th>
                        <th class="col-md-2">Num. de serie</th>
                        <th class="col-md-3">Estudiante</th>
                        <th class="col-md-5">Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($prestamos as $prestamo)
                        <?php
                        $clase_row = 'row';
                        $clase_aceptar = 'col-md-3';
                        $clase_rechazar = 'col-md-3';
                        $clase_devolver = 'col-md-3';
                        $clase_detalles = 'col-md-3';

                        if ($prestamo->status_prestamo == 'pendiente') {
                            $clase_row .= ' st-pendiente warning';
                        } else if ($prestamo->status_prestamo == 'aceptado') {
                            $clase_row .= ' st-aceptado info';
                            $clase_aceptar .= ' hidden';
                            $clase_rechazar .= ' hidden';
                        } else if ($prestamo->status_prestamo == 'rechazado') {
                            $clase_row .= ' st-rechazado danger';
                            $clase_aceptar .= ' hidden';
                            $clase_rechazar .= ' hidden';
                            $clase_devolver .= ' hidden';
                        } else if ($prestamo->status_prestamo == 'devuelto') {
                            $clase_row .= ' st-devuelto success';
                            $clase_aceptar .= ' hidden';
                            $clase_rechazar .= ' hidden';
                            $clase_devolver .= ' hidden';
                        }
                        ?>

                        <tr class="{{$clase_row}}">
                            <td>{{$prestamo->dispositivo}}</td>
                            <td>{{$prestamo->num_serie}}</td>
                            <td>{{$prestamo->nombres_estudiante}}</td>
                            <td>
                                <table>
                                    <tr class="row">
                                        <td class="{{$clase_detalles}}">
                                            <a class="btn btn-primary"
                                               href="{{ URL::to('verPrestamo/' .
                                   $prestamo->prestamo_id)}}">
                                                <span class="glyphicon glyphicon-eye-open"/>
                                            </a>
                                        </td>
                                        <td class="{{$clase_aceptar}}">
                                            {{ Form::model($prestamo,
                                            array('route' => array('prestamos.aprobar',
                                                $prestamo->prestamo_id),
                                                'method' => 'PUT')) }}
                                            {{Form::button('<i class="glyphicon
                                            glyphicon-ok"></i>', array('type' =>
                                            'submit', 'class' => 'btn btn-primary',
                                            'title' => 'Aprobar préstamo'))}}
                                            {{Form::close()}}
                                        </td>
                                        <td class="{{$clase_rechazar}}">
                                            {{ Form::model($prestamo,
                                            array('route' => array('prestamos.rechazar',
                                                $prestamo->prestamo_id),
                                                'method' => 'PUT')) }}
                                            {{Form::button('<i class="glyphicon
                                            glyphicon-remove"></i>', array('type' =>
                                            'submit', 'class' => 'btn btn-primary',
                                            'title' => 'Rechazar préstamo'))}}
                                            {{Form::close()}}
                                        </td>
                                        <td class="{{$clase_devolver}}">
                                            {{ Form::model($prestamo,
                                            array('route' => array('prestamos.devolver',
                                                $prestamo->prestamo_id),
                                                'method' => 'PUT')) }}
                                            {{Form::button('<i class="glyphicon
                                            glyphicon-saved"></i>', array('type' =>
                                            'submit', 'class' => 'btn btn-primary',
                                            'title' => 'Marcar como devuelto'))}}
                                            {{Form::close()}}
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@stop