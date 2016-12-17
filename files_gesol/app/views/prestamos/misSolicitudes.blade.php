{{-------------------------------------------------------------------}}
{{-- Vista para el control de las solicitudes de prestamos propias --}}
{{-- User: porfirio                                                --}}
{{-- Date: 7/22/16                                                 --}}
{{-- Time: 12:03 AM                                                --}}
{{-------------------------------------------------------------------}}

@extends('layouts.masterProEstudiante')

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
        <h4>Mis solicitudes de préstamo</h4>
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
                        <th class="col-md-3">Num. de serie</th>
                        <th class="col-md-3">Tipo de dispositivo</th>
                        <th class="col-md-3">Fecha de solicitud</th>
                        <th class="col-md-3">Estado</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($solicitudes as $solicitud)
                        <?php
                        $clase_row = "row";
                        $clase_button = "col-md-6 hidden";

                        if ($solicitud->status_prestamo == 'pendiente') {
                            $clase_row .= " st-pendiente warning";
                            $clase_button = "col-md-6";
                        } else if ($solicitud->status_prestamo == 'aceptado') {
                            $clase_row .= " st-aceptado  info";
                        } else if ($solicitud->status_prestamo == 'rechazado') {
                            $clase_row .= " st-rechazado  danger";
                        } else if ($solicitud->status_prestamo ==
                                'devuelto'
                        ) {
                            $clase_row .= " st-devuelto  success";
                        }
                        ?>

                        <tr class="{{$clase_row}}">
                            <td>{{$solicitud->num_serie}}</td>
                            <td>{{$solicitud->dispositivo}}</td>
                            <td>{{$solicitud->fecha_solicitud}}</td>
                            <td>
                                <table>
                                    <tr>
                                        <td class="col-md-6">
                                            {{$solicitud->status_prestamo}}
                                        </td>
                                        <td class="{{$clase_button}}">
                                            {{ Form::model($solicitud,
                                            array('route' => array('prestamos.update',
                                                $solicitud->prestamo_id),
                                                'method' => 'PUT')) }}

                                            {{ Form::submit('Cancelar', array('class' =>
                                            'btn
                                            btn-danger col-md-12')) }}
                                            {{ Form::close() }}</td>
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