<?php 

//Controlador de tipo RESTFUL
class catalogoController extends BaseController{


	public function getCatalogo()
	{
		 $proyectosSoftware = Proyecto::where('tipoProyecto', '=', 'Desarrollo de software')->where('estatus', '=', 0)->get();
		 
		 $proyectosLinux = Proyecto::where('tipoProyecto', '=', 'Linux y kernel')->where('estatus', '=', 0)->get();

		 $proyectosMoviles = Proyecto::where('tipoProyecto', '=', 'Aplicaciones móviles')->where('estatus', '=', 0)->get();

		 $proyectosHardware = Proyecto::where('tipoProyecto', '=', 'Hardware libre')->where('estatus', '=', 0)->get();

		 $proyectosDiseño = Proyecto::where('tipoProyecto', '=', 'Diseño gráfico y multimedia')->where('estatus', '=', 0)->get();

		$proyectosBigData = Proyecto::where('tipoProyecto', '=', 'Big Data')->where('estatus', '=', 0)->get();

		 $proyectosIoT = Proyecto::where('tipoProyecto', '=', 'Internet of Things')->where('estatus', '=', 0)->get();

		return View::make('proyectos/verProyectos')->with(array('proyectosSoftware'=> $proyectosSoftware, 'proyectosLinux' => $proyectosLinux, 'proyectosMoviles' => $proyectosMoviles, 'proyectosHardware' => $proyectosHardware, 'proyectosDiseño' => $proyectosDiseño, 'proyectosBigData' => $proyectosBigData, 'proyectosIoT' => $proyectosIoT ));
		//return View::make('catalogo')->with(array('proyectosSoftware'=> $proyectosSoftware, 'proyectosLinux' => $proyectosLinux, 'proyectosMoviles' => $proyectosMoviles, 'proyectosHardware' => $proyectosHardware, 'proyectosDiseño' => $proyectosDiseño ));
	}

	public function getCatalogoFinalizado()
	{
		 $proyectosSoftware = Proyecto::where('tipoProyecto', '=', 'Desarrollo de software')->where('estatus', '=', 1)->get();
		 
		 $proyectosLinux = Proyecto::where('tipoProyecto', '=', 'Linux y kernel')->where('estatus', '=', 1)->get();

		 $proyectosMoviles = Proyecto::where('tipoProyecto', '=', 'Aplicaciones móviles')->where('estatus', '=', 1)->get();

		 $proyectosHardware = Proyecto::where('tipoProyecto', '=', 'Hardware libre')->where('estatus', '=', 1)->get();

		 $proyectosDiseño = Proyecto::where('tipoProyecto', '=', 'Diseño gráfico y multimedia')->where('estatus', '=', 1)->get();

		$proyectosBigData = Proyecto::where('tipoProyecto', '=', 'Big Data')->where('estatus', '=', 1)->get();

		 $proyectosIoT = Proyecto::where('tipoProyecto', '=', 'Internet of Things')->where('estatus', '=', 1)->get();

		return View::make('proyectos/verProyectos')->with(array('proyectosSoftware'=> $proyectosSoftware, 'proyectosLinux' => $proyectosLinux, 'proyectosMoviles' => $proyectosMoviles, 'proyectosHardware' => $proyectosHardware, 'proyectosDiseño' => $proyectosDiseño, 'proyectosBigData' => $proyectosBigData, 'proyectosIoT' => $proyectosIoT ));
		//return View::make('catalogo')->with(array('proyectosSoftware'=> $proyectosSoftware, 'proyectosLinux' => $proyectosLinux, 'proyectosMoviles' => $proyectosMoviles, 'proyectosHardware' => $proyectosHardware, 'proyectosDiseño' => $proyectosDiseño ));
	}

	public function getDatos($id)
	{
		$proyecto = Proyecto::find($id);

		echo ("<div class='panel panel-default'>");
		echo ("<div class='panel-body form-horizontal payment-form'>");
	
		echo ("<h2 class='text-center'>".$proyecto->nombre."</h2>");
		
		echo ("<hr/>");
		echo ("<h4><b>Dependencia:</b></h4><samp> ".$proyecto->dependencia."</samp>");

		echo ("<h4><b>Objetivo:</b></h4><p><samp> ".$proyecto->objetivo."</samp></p>");
		echo ("<h4><b>Descripción:</b></h4><p><samp> ".$proyecto->descripcion."</samp></p>");

		echo ("<h4><b>Duración:</b> </h4><samp>".$proyecto->duracion." semanas</samp>");
		echo ("<h4><b>Número de integrantes:</b></h4><samp> ".$proyecto->numeroIntegrantes." personas</samp> ");
		echo ("<h4><b>Perfiles requeridos:</b></h4><la>");
		foreach ($proyecto->perfiles as $perfil) {
			echo ("<li><samp>".$perfil->nombre."</samp></li>");
			
		}
		if(count($proyecto->actividades) != 0){
			echo ("<h4><b>Actividades principales:</b></h4><la>");
			foreach ($proyecto->actividades as $actividad) {
				echo ("<li><samp>".$actividad->nombre."</samp></li>");
				
			}
		}
		//echo $proyecto->estudiantes;
		if( count($proyecto->estudiantes) != 0){
			echo ("<h4><b>Estudiantes:</b></h4><la>");
			foreach ($proyecto->estudiantes as $estudiante) {
				echo ("<li><samp>".$estudiante->nombres." ".$estudiante->apellidos."</samp></li>");
				
			}
		}
		echo ("</la>");

		echo ("</div>");
		echo ("</div>");
		

		//return $resultado;

	}
}
 	

?>