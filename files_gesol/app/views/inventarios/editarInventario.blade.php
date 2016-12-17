{{-------------------------------------------}}
{{-- Vista para la edicion del inventario. --}}
{{-- User: porfirio                        --}}
{{-- Date: 7/20/16                         --}}
{{-- Time: 12:15 AM                        --}}
{{-------------------------------------------}}

@extends('layouts.masterProAdministrador')

@section('head')
    {{ HTML::style('css/test.css') }}
    {{ HTML::script('js/nuevoDispositivo.js') }}
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

    {{ Form::model($inventario, array('route' => array('inventarios.update',
    $inventario->id), 'method' => 'PUT')) }}
    <div class="col-md-12 col-md-offset-0">
        <h4>Editar dispositivo del inventario</h4>
        <div class="panel panel-default">
            <div class="panel-body form-horizontal payment-form">
                <div class="form-group">
                    <label for="tipo_dispositivo" class="col-sm-4
                    control-label">Tipo:</label>
                    <div class="col-sm-5">
                        <select class="form-control" id="tipo_dispositivo"
                                name="tipo_dispositivo">
                            @foreach($tiposDispositivo as $tipo)
                                @if($tipo['id'] ==
                                $inventario['dispositivo_id'])
                                    <option selected="selected">
                                        {{$tipo['nombre']}}
                                    </option>
                                @else
                                    <option>
                                        {{$tipo['nombre']}}
                                    </option>
                                @endif

                            @endforeach
                            <option>Otro</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="num_serie" class="col-sm-4
                    control-label">Número de serie:</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="num_serie"
                               name="num_serie"
                               value={{$inventario->num_serie}}>
                    </div>
                </div>
                <div class="form-group">
                    <label for="reg_labsol" class="col-sm-4
                    control-label">Registro LABSOL:</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="reg_labsol"
                               name="reg_labsol"
                               value={{$inventario->reg_labsol}}>
                    </div>
                </div>
                <div class="form-group">
                    <label for="fecha_adquisicion" class="col-sm-4
                    control-label">Fecha de adquisición</label>
                    <div class="col-sm-5">
                        <input type="date" class="form-control"
                               id="fecha_adquisicion"
                               name="fecha_adquisicion"
                               value={{$inventario->fecha_adquisicion}}>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-9 text-right">
                        {{ Form::submit('Guardar', array('class' => 'btn btn-primary')) }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{ Form::close() }}

    {{-- Modal de nuevo dispositivo --}}
    {{ Form::open(array('url' => 'dispositivos')) }}
    <div class="panel-body form-horizontal payment-form">
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog"
             aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close"
                                data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h3 class="modal-title" id="myModalLabel">
                            Agregar nuevo tipo de dispositivo
                        </h3>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="nombre"
                                   class="col-sm-4 control-label">
                                Nombre:</label>
                            <div class="col-sm-8">
                                <input type="text"
                                       class="form-control"
                                       id="nombre"
                                       name="nombre">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="descripcion"
                                   class="col-sm-4 control-label">
                                Descripción:</label>
                            <div class="col-sm-8">
                                        <textarea id="descripcion"
                                                  name="descripcion"
                                                  class="form-control"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default"
                                data-dismiss="modal">Cancelar
                        </button>
                        <button type="submit" class="btn btn-primary">
                            Guardar
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{ Form::close() }}

@stop