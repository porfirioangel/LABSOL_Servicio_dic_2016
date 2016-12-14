<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>GESOL</title>
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/bootstrap-theme.min.css">
	<script src="../js/jquery-1.11.1.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	@yield('head')	
</head>
<body>
	<div class="container">
		<div class="col-sm-12 col-md-12">
			<div id="dependencias">
				<img src="../img/labsol.png"  width="206" height="79" align="right" padding="10px">
				<img src="../img/cozcyt.png"  width="291" height="98">
			</div>
		</div>
		<div class="col-sm-12 col-md-12">
			<div id="cabecera">
				@yield('cabecera')
				<div class="btn-group btn-group-justified" role="group" aria-label="...">
						      <div class="btn-group" role="group">
						        <a href="{{ URL::to('inicio') }}">
						            <button type="button" class="btn btn-primary">Inicio</button>
						        </a>
						      </div>
						      <div class="btn-group" role="group">
								    <a href="{{ URL::to('verProyectos') }}">
									    <button type="button" class="btn btn-primary">Proyectos Disponibles</button>
								    </a>
								  </div>
							    <div class="btn-group" role="group">
							      <a href="{{ URL::to('verProyectosFinalizados') }}">
							        <button type="button" class="btn btn-primary">Proyectos Finalizados</button>
							      </a>
							    </div>
						      <div class="btn-group" role="group">
						        <a href="{{ URL::to('nuevoProyecto') }}">
						            <button type="button" class="btn btn-primary">Mi cuenta</button>
						        </a>
						      </div>
						      <div class="btn-group" role="group">
						        <a href="{{ URL::to('cerrar') }}">
						            <button type="button" class="btn btn-danger">Cerrar Sesión</button>
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
			                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><span class="glyphicon glyphicon-th">
			                    </span> Proyectos</a>
			                </h4>
			            </div>
			            <div id="collapseOne" class="panel-collapse collapse in">
			                <div class="panel-body">
			                    <table class="table">
			                        <tr>
			                            <td>
			                                <a href="{{ URL::to('nuevoProyecto') }}">Subir Nuevo Proyecto</a>
			                            </td>
			                        </tr>
			                        <tr>
			                            <td>
			                                <a href="{{ URL::to('editarProyectos') }}">Administrar Proyectos</a>
			                            </td>
			                        </tr>
			                    </table>
			                </div>
			            </div>
			        </div>
			        <div class="panel panel-primary">
			            <div class="panel-heading">
			                <h4 class="panel-title">
			                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><span class="glyphicon glyphicon-user">
			                    </span> Estudiantes</a>
			                </h4>
			            </div>
			            <div id="collapseTwo" class="panel-collapse collapse">
			                <div class="panel-body">
			                    <table class="table">
			                        <tr>
			                            <td>
			                                <a href="{{ URL::to('administrarEstudiantes') }}">Administrar Estudiantes</a>
			                            </td>
			                        </tr>
			                        <tr>
			                            <td>
			                                <a href="{{ URL::to('validarEstudiantes') }}">Validar Estudiantes</a>
			                            </td>
			                        </tr>
			                    </table>
			                </div>
			            </div>
			        </div>
			        <div class="panel panel-primary">
			            <div class="panel-heading">
			                <h4 class="panel-title">
			                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><span class="glyphicon glyphicon-bookmark">
			                    </span> Becas</a>
			                </h4>
			            </div>
			            <div id="collapseThree" class="panel-collapse collapse">
			                <div class="panel-body">
			                    <table class="table">
			                        <tr>
			                            <td>
			                                <a href="{{ URL::to('consultarBecas') }}">Administrar Becas</a>
			                            </td>
			                        </tr>
			                    </table>
			                </div>
			            </div>
			        </div>
			        <div class="panel panel-primary">
			            <div class="panel-heading">
			                <h4 class="panel-title">
			                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour"><span class="glyphicon glyphicon-tasks">
			                    </span> Proyectos en Desarrollo</a>
			                </h4>
			            </div>
			            <div id="collapseFour" class="panel-collapse collapse">
			                <div class="panel-body">
			                    <table class="table">
			                        <tr>
			                            <td>
			                                <a href="{{ URL::to('aprobarProyectos') }}">Aprobar Proyectos</a>
			                            </td>
			                        </tr>
			                        <tr>
			                            <td>
			                                <a href="{{ URL::to('avanceProyectos') }}">Avance de proyectos</a>
			                            </td>
			                        </tr>
			                        <tr>
			                            <td>
			                                <a href="{{ URL::to('validarTareas') }}">Validar Tareas de proyectos</a>
			                            </td>
			                        </tr>
			                    </table>
			                </div>
			            </div>
			        </div>
			        <div class="panel panel-primary">
			            <div class="panel-heading">
			                <h4 class="panel-title">
			                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive"><span class="glyphicon glyphicon-cog">
			                    </span> Gestor de Administrador</a>
			                </h4>
			            </div>
			            <div id="collapseFive" class="panel-collapse collapse">
			                <div class="panel-body">
			                    <table class="table">
			                        <tr>
			                            <td>
			                                <a href="{{ URL::to('nuevoAdministrador') }}">Crear Nueva cuenta</a>
			                            </td>
			                        </tr>
			                        <tr>
			                            <td>
			                                <a href="{{ URL::to('cuentasAdministradores') }}">Administrar Cuentas</a>
			                            </td>
			                        </tr>
			                    </table>
			                </div>
			            </div>
			        </div>  
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