{{-------------------------------------------------------}}
{{-- Vista para mostrar los detalles sobre un prestamo --}}
{{-- User: porfirio                                    --}}
{{-- Date: 7/23/16                                     --}}
{{-- Time: 4:01 PM                                     --}}
{{-------------------------------------------------------}}

@extends('layouts.masterProAdministrador')

@section('head')
    {{HTML::style('css/test.css');}}
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
        <h4>Detalles de préstamo</h4>
        <div class="panel panel-default">
            <div class="panel-body form-horizontal payment-form">
                <div class="form-group">
                    <label for="tipo_dispositivo" class="col-sm-4
                    control-label">Tipo:</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control"
                               id="tipo_dispositivo"
                               name="tipo_dispositivo"
                               readonly="readonly"
                               value="{{ $prestamo->tipo_dispositivo }}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="num_serie" class="col-sm-4
                    control-label">Número de Serie:</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control"
                               id="num_serie"
                               name="num_serie"
                               readonly="readonly"
                               value="{{ $prestamo->num_serie }}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="reg_labsol" class="col-sm-4
                    control-label">Registro LABSOL:</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control"
                               id="reg_labsol"
                               name="reg_labsol"
                               readonly="readonly"
                               value="{{ $prestamo->reg_labsol }}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="estudiante" class="col-sm-4
                    control-label">Estudiante:</label>
                    <div class="col-sm-5">
                        <input type="text"
                               class="form-control"
                               id="estudiante"
                               name="estudiante"
                               readonly="readonly"
                               value="{{ $prestamo->estudiante }}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="escuela" class="col-sm-4
                    control-label">Escuela:</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control"
                               id="escuela"
                               name="escuela"
                               readonly="readonly"
                               value="{{ $prestamo->escuela }}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="status" class="col-sm-4
                    control-label">Status:</label>
                    <div class="col-sm-5">
                        <?php
                        if ($prestamo->status == 'pendiente') {
                            $clase = 'text-warning  ';
                        } else if ($prestamo->status == 'aceptado') {
                            $clase = 'text-info  ';
                        } else if ($prestamo->status == 'rechazado') {
                            $clase = 'text-danger  ';
                        } else if ($prestamo->status == 'devuelto') {
                            $clase = 'text-success  ';
                        }
                        ?>

                        <div class="form-control">
                            <span id="status" class="{{ $clase }}">
                                {{ $prestamo->status }}
                            </span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="fecha_solicitud" class="col-sm-4
                    control-label">Fecha de solicitud:</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control"
                               id="fecha_solicitud"
                               name="fecha_solicitud"
                               readonly="readonly"
                               value="{{ $prestamo->fecha_solicitud }}">
                    </div>
                </div>

                @if($prestamo->status == 'aceptado' || $prestamo->status ==
                'devuelto')
                    {{
                    $html_aprobacion =
                    '<div class="form-group">
                        <label for="fecha_aprobacion" class="col-sm-4
                        control-label">Fecha de aprobación:</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control"
                                   id="fecha_aprobacion"
                                   name="fecha_aprobacion"
                                   readonly="readonly"
                                   value="' . $prestamo->fecha_aprobacion . '">
                        </div>
                    </div>';
                    html_entity_decode($html_aprobacion);
                    }}
                @endif

                @if($prestamo->status == 'devuelto')
                    {{
                    $html_devuelto =
                    '<div class="form-group">
                        <label for="fecha_devolucion" class="col-sm-4
                        control-label">Fecha de devolución:</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control"
                                   id="fecha_devolucion"
                                   name="fecha_devolucion"
                                   readonly="readonly"
                                   value="' . $prestamo->fecha_devolucion . '">
                        </div>
                    </div>';
                    html_entity_decode($html_devuelto);
                    }}
                @endif
                <div class="col-sm-9 text-right">
                    <a href="{{ URL::to('administrarSolicitudes') }}">
                        <button type="button" class="btn btn-success">Volver
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
@stop