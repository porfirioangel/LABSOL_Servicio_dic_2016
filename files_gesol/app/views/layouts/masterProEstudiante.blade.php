<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>GESOL</title>
    {{ HTML::style('css/bootstrap.min.css');}}
    {{ HTML::style('css/bootstrap-theme.min.css');}}
    {{ HTML::script('js/jquery-1.11.1.min.js') }}
    {{ HTML::script('js/bootstrap.min.js') }}
    @yield('head')
</head>
<body>
<div class="container">
    <div class="col-sm-12 col-md-12">
        <div id="dependencias">
            {{ HTML::image('img/labsol.png', 'logo_labsol', array
            ('width'=>'206', 'height'=>'79', 'align'=>'right',
            'padding'=>'10px')) }}
            {{ HTML::image('img/cozcyt.png', 'logo_cozcyt', array
            ('width'=>'291', 'height'=>'98')) }}
        </div>
    </div>
    <div class="col-sm-12 col-md-12">
        <div id="cabecera">
            @yield('cabecera')
            <div class="btn-group btn-group-justified" role="group"
                 aria-label="...">
                <div class="btn-group" role="group">
                    <a href="{{ URL::to('inicio') }}">
                        <button type="button" class="btn btn-primary">Inicio
                        </button>
                    </a>
                </div>
                <div class="btn-group" role="group">
                    <a href="{{ URL::to('verProyectos') }}">
                        <button type="button" class="btn btn-primary">Proyectos
                            Disponibles
                        </button>
                    </a>
                </div>
                <div class="btn-group" role="group">
                    <a href="{{ URL::to('verProyectosFinalizados') }}">
                        <button type="button" class="btn btn-primary">Proyectos
                            Finalizados
                        </button>
                    </a>
                </div>
                <div class="btn-group" role="group">
                    <a href="{{ URL::to('perfilEstudiante/' . Session::get('id') )}}">
                        <button type="button" class="btn btn-primary">Mi
                            cuenta
                        </button>
                    </a>
                </div>
                <div class="btn-group" role="group">
                    <a href="{{ URL::to('cerrar') }}">
                        <button type="button" class="btn btn-danger">Cerrar
                            Sesión
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-3 col-md-3">
        <div id="menu">
            @yield('menu')
            <div class="panel-group" id="accordion">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion"
                               href="#collapseOne"><span
                                        class="glyphicon glyphicon-user">
	                    </span> Mi perfil</a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <a href="{{ URL::to('perfilEstudiante')}}">Mis
                                            datos</a>
                                    <!--a href="{{ URL::to('perfilEstudiante/' . Session::get('id') )}}">Mis datos</a-->
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="{{ URL::to('editarEstudiante')}}">Actualizar
                                            mis datos</a>
                                    <!--a href="{{ URL::to('editarEstudiante/' . Session::get('id') )}}">Actualizar mis datos</a-->
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion"
                               href="#collapseTwo"><span
                                        class="glyphicon glyphicon-cog">
	                    </span> Proyectos</a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <a href="{{ URL::to('elegirProyecto') }}">Elegir
                                            proyecto</a>
                                    </td>
                                </tr>
                            <!--tr>
	                            <td>
	                                <a href="{{ URL::to('crearPlaneacion') }}">Crear planeación</a>
	                            </td>
	                        </tr>
	                        <tr>
	                            <td>
	                                <a href="{{ URL::to('editarPlaneacion/' . Session::get('id') )}}">Editar planeación</a>
	                            </td>
	                        </tr-->
                                <tr>
                                    <td>
                                        <a href="{{ URL::to('finalizarTareas') }}">Control
                                            de tareas</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion"
                               href="#collapseThree"><span
                                        class="glyphicon glyphicon-bookmark">
	                    </span> Becas</a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <a href="{{ URL::to('subirBeca') }}">Subir
                                            Beca</a>
                                    </td>
                                </tr>
                            <!--tr>
	                            <td>
	                                <a href="{{ URL::to('editarBeca/' . Session::get('id') )}}">Actualizar Beca</a>
	                            </td>
	                        </tr-->
                            </table>
                        </div>
                    </div>
                </div>
                {{-- Inicio de mis opciones --}}
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion"
                               href="#collapsePrestamos"><span
                                        class="glyphicon glyphicon-check">
	                    </span> Préstamos</a>
                        </h4>
                    </div>
                    <div id="collapsePrestamos" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <a href="{{ URL::to('crearPrestamo')
                                        }}">Crear Solicitud</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="{{ URL::to('misSolicitudes')
                                        }}">Mis solicitudes</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                {{-- Fin de mis opciones --}}
            </div>
        </div>
    </div>

    <div class="col-sm-9 col-md-9">
        <div id="contenido">
            @yield('contenido')
        </div>
    </div>

</div>


</body>
</html>