{{---------------------------------------------------------------}}
{{-- Vista para la creacion de una nueva solicitud de prestamo --}}
{{-- User: porfirio                                            --}}
{{-- Date: 7/22/16                                             --}}
{{-- Time: 14:03 PM                                            --}}
{{---------------------------------------------------------------}}

@extends('layouts.masterProEstudiante')

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

    {{ Form::open(array('url' => 'prestamos')) }}
    <div class="col-md-12 col-md-offset-0">
        <h4>Crear Nueva Solicitud</h4>
        <div class="panel panel-default">
            <div class="panel-body form-horizontal payment-form">
                <div class="form-group">
                    <label for="tipo_dispositivo" class="col-sm-4
                    control-label">Tipo:</label>
                    <div class="col-sm-5">
                        <select class="form-control" id="tipo_dispositivo"
                                name="tipo_dispositivo">
                            <option>Seleccionar</option>
                            @foreach($datos['tipos_disponibles'] as
                            $dispositivo)
                                <option>{{$dispositivo->nombre}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="num_serie" class="col-sm-4
                    control-label">Número de serie:</label>
                    <div class="col-sm-5">
                        <select class="form-control" id="num_serie"
                                name="num_serie">
                            <option>Seleccionar</option>

                            <script type="text/javascript">
                                $(document).ready(function () {
                                    // Disponibles en inventario
                                    var disponibles_inventario = <?php echo
                                    json_encode(
                                            $datos['disponibles_inventario']); ?>;

                                    var std = $('#tipo_dispositivo');
                                    var sns = $('#num_serie');

                                    std.change(function () {
                                        sns.html
                                        ('<option>Seleccionar</option>');
                                        // Recorre los disponibles para el
                                        // tipo de dispositivo seleccionado
                                        // en el combobox
                                        if (std.val() != 'Seleccionar') {
                                            disponibles_inventario[std.val()]
                                                    .forEach(function (entry) {
                                                        sns.html(sns.html() + ('<option>' +
                                                                entry['num_serie'] +
                                                                '</option>'));
                                                    });
                                        }
                                    });
                                });
                            </script>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-9 text-right">
                        {{ Form::submit('Solicitar Préstamo', array('class' =>
                        'btn btn-primary')) }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{Form::close()}}

@stop