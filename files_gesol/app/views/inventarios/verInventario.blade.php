{{-------------------------------------------------------------------}}
{{-- Vista para ver los detalles de un dispositivo del inventario. --}}
{{-- User: porfirio                                                --}}
{{-- Date: 7/19/16                                                 --}}
{{-- Time: 14:21 PM                                                --}}
{{-------------------------------------------------------------------}}

@extends('layouts.masterProAdministrador')

@section('head')
    {{HTML::style('css/test.css');}}
@stop

@section('contenido')
    <div class="col-md-12 col-md-offset-0">
        <h4>Detalles de dispositivo</h4>
        <div class="panel panel-default">
            <div class="panel-body form-horizontal payment-form">
                <div class="form-group">
                    <label for="tipoDispositivo" class="col-sm-4
                    control-label">Tipo:</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control"
                               id="tipoDispositivo"
                               name="tipoDispositivo"
                               readonly="readonly"
                               value={{$inv_join_disp->nombre}}>
                    </div>
                </div>
                <div class="form-group">
                    <label for="numSerie" class="col-sm-4
                    control-label">Número de serie:</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="numSerie"
                               name="numSerie" readonly="readonly"
                               value={{$inv_join_disp->num_serie}}>
                    </div>
                </div>
                <div class="form-group">
                    <label for="regLabsol" class="col-sm-4
                    control-label">Registro LABSOL:</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="regLabsol"
                               name="regLabsol" readonly="readonly"
                               value={{$inv_join_disp->reg_labsol}}>
                    </div>
                </div>
                <div class="form-group">
                    <label for="fechaAdquisicion" class="col-sm-4
                    control-label">Fecha de adquisición</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control"
                               id="fechaAdquisicion"
                               name="fechaAdquisicion" readonly="readonly"
                               value={{$inv_join_disp->fecha_adquisicion}}>
                    </div>
                </div>
                <div class="form-group">
                    <label for="status" class="col-sm-4
                    control-label">Status de préstamo:</label>
                    <div class="col-sm-5">
                        <?php
                        $clase = '';
                        if ($inv_join_disp->status_prestamo == 'pendiente') {
                            $clase = 'text-warning';
                        } else if ($inv_join_disp->status_prestamo == 'aceptado') {
                            $clase = 'text-info';
                        } else if ($inv_join_disp->status_prestamo == 'rechazado') {
                            $clase = 'text-danger ';
                        } else if ($inv_join_disp->status_prestamo == 'devuelto') {
                            $clase = 'text-success';
                        }
                        ?>

                        <div class="form-control">
                            <span id="status" class="{{ $clase }}">
                                {{ $inv_join_disp->status_prestamo }}
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-9 text-right">
                    <a href="{{ URL::to('administrarInventario') }}">
                        <button type="button" class="btn btn-success">Volver
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
@stop