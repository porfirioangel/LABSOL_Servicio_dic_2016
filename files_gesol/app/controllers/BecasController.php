<?php

class BecasController extends \BaseController {
	
	/**
	 * Display a listing of the resource.
	 * GET /becas
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /becas/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /becas
	 *
	 * @return Response
	 */
	public function store()
	{
		//
		$file = Input::file("solicitudBeca");
		$beca = new Beca;
		$id = Session::get('id');
		$beca->perfil = Input::get('perfil');
		$beca->cartaSolicitud = $file;
		$beca->estudiante_id = $id;
		$file->move("becas",$file->getClientOriginalName());

		$beca->save();


		return Redirect::to('perfilEstudiante/'.$id);
	}

	/**
	 * Display the specified resource.
	 * GET /becas/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /becas/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /becas/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /becas/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	public function uploadBeca()
	{

		// create the validation rules ------------------------
	    $rules = array(
	      
	        'perfil'			=> 'required',
	        'periodo'          	=> 'required',
	        'cartaSolicitud' 	=> 'max:1000',
	        'curp'             	=> 'max:1000',
	        'ife'           	=> 'max:1000',
	        'cartaPrestacion' 	=> 'max:1000',
	        'cartaAceptacion'	=> 'max:1000',
	        'modalidad'     	=> 'max:1000'
	        
	    );

		// create custom validation messages ------------------
	    $messages = array(
	        'required' 		=> 'El campo ":attribute" es un campo obligatorio.',
	        'max' 			=> 'El archivo ":attribute" no debe superar en tamaño :max kb.',
	        
	    );

		//Encontrar al estudiante
		$id = Session::get('id');
		$estudiante = Estudiante::find($id);

		$becas = Beca::all();

		$numeroBecas = count($becas);

		//echo("numero Becas -->".$numeroBecas);
		//echo("<br>");
		$destinationPath = public_path().sprintf("/becas/");

		for ($i = 0; $i < $numeroBecas; $i++){
			//echo("Numero de vuelta del for: ". $i);
			//echo("<br>");
			//echo("beca ".$i." con campo_id_estudiante: ".$becas[$i]->estudiante_id." y id_estudiante: ".$estudiante->id);
			//echo("<br>");
			//echo("Voy a comprobar el if");
			if($becas[$i]->estudiante_id == $estudiante->id)
			{
				Session::flash('message', 'Tu ya cuentas con un registro de beca, si deseas actualizar tus documentos te recomiendo eliminar tu registro de beca actual');
				return Redirect::to('subirBeca');
				//echo("<br>");
				//echo("Entre");
				//echo("<br>");
				//Seleccionar esa beca para actualizarla!
				/*
				$BecaSeleccionada = Beca::find($becas[$i]->id);
				$BecaSeleccionada->perfil = Input::get('perfil');
				$BecaSeleccionada->estudiante_id = $id;
				$BecaSeleccionada->periodo = Input::get('periodo');;

				//Crear directorio becas//
				$nombreCarpeta = $estudiante->nombres.' '.$estudiante->apellidos;
				File::delete($destinationPath.$nombreCarpeta);
				
				//Carta Solicitud de servicio
				$fileSolicitud = Input::file('cartaSolicitud');
				$extSolicitud = $fileSolicitud->getClientOriginalExtension();
				$nombreSolicitud = 'cartaSolicitud_'.$estudiante->id.'_'.$estudiante->nombres.'.'.$extSolicitud;
				$fileSolicitud->move($destinationPath.$nombreCarpeta,$nombreSolicitud);


				//CURP
				$fileCURP = Input::file('curp');
				$extCURP = $fileCURP->getClientOriginalExtension();
				$nombreCURP = 'CURP_'.$estudiante->id.'_'.$estudiante->nombres.'.'.$extCURP;
				$fileCURP->move($destinationPath.$nombreCarpeta,$nombreCURP);

				//IFE
				$fileIFE = Input::file('ife');
				$extIFE = $fileIFE->getClientOriginalExtension();
				$nombreIFE = 'IFE_'.$estudiante->id.'_'.$estudiante->nombres.'.'.$extIFE;
				$fileIFE->move($destinationPath.$nombreCarpeta,$nombreIFE);

				//Carta Prestación Servicio
				$fileCartaPrestacion = Input::file('cartaPrestacion');
				$extCartaPrestacion = $fileCartaPrestacion->getClientOriginalExtension();
				$nombreCartaPrestacion = 'CartaPrestacion_'.$estudiante->id.'_'.$estudiante->nombres.'.'.$extCartaPrestacion;
				$fileCartaPrestacion->move($destinationPath.$nombreCarpeta,$nombreCartaPrestacion);

				//Carta Aceptación Servicio
				$fileCartaAceptacion = Input::file('cartaAceptacion');
				$extCartaAceptacion = $fileCartaAceptacion->getClientOriginalExtension();
				$nombreCartaAceptacion = 'CartaAceptacion_'.$estudiante->id.'_'.$estudiante->nombres.'.'.$extCartaAceptacion;
				$fileCartaAceptacion->move($destinationPath.$nombreCarpeta,$nombreCartaAceptacion);

				$BecaSeleccionada->cartaSolicitud = $nombreSolicitud;
				$BecaSeleccionada->curp = $nombreCURP;
				$BecaSeleccionada->ife = $nombreIFE;
				$BecaSeleccionada->cartaPrestacion = $nombreCartaPrestacion;
				$BecaSeleccionada->cartaAceptacion = $nombreCartaAceptacion;

				$BecaSeleccionada->save();

				*/
			}
			
		}

		$validator = Validator::make(Input::all(), $rules, $messages);

	    // check if the validator failed -----------------------
	    if ($validator->fails()) {

	        // get the error messages from the validator
	        $messages = $validator->messages();
			
	        // redirect our user back to the form with the errors from the validator
	        return Redirect::to('subirBeca')
	            ->withErrors($validator);


	    } else {

	    	//Crear una beca nueva
			$beca = new Beca;
			$beca->perfil = Input::get('perfil');
			$beca->estudiante_id = $id;
			$beca->periodo = Input::get('periodo');

			//Crear directorio becas//
			$nombreCarpeta = $estudiante->nombres.' '.$estudiante->apellidos;
			
			//Carta Solicitud de servicio
			$fileSolicitud = Input::file('cartaSolicitud');
			$extSolicitud = $fileSolicitud->getClientOriginalExtension();
			$nombreSolicitud = 'cartaSolicitud_'.$estudiante->id.'_'.$estudiante->nombres.'.'.$extSolicitud;
			$fileSolicitud->move($destinationPath.$nombreCarpeta,$nombreSolicitud);


			//CURP
			$fileCURP = Input::file('curp');
			$extCURP = $fileCURP->getClientOriginalExtension();
			$nombreCURP = 'CURP_'.$estudiante->id.'_'.$estudiante->nombres.'.'.$extCURP;
			$fileCURP->move($destinationPath.$nombreCarpeta,$nombreCURP);

			//IFE
			$fileIFE = Input::file('ife');
			$extIFE = $fileIFE->getClientOriginalExtension();
			$nombreIFE = 'IFE_'.$estudiante->id.'_'.$estudiante->nombres.'.'.$extIFE;
			$fileIFE->move($destinationPath.$nombreCarpeta,$nombreIFE);

			//Carta Prestación Servicio
			$fileCartaPrestacion = Input::file('cartaPrestacion');
			$extCartaPrestacion = $fileCartaPrestacion->getClientOriginalExtension();
			$nombreCartaPrestacion = 'CartaPrestacion_'.$estudiante->id.'_'.$estudiante->nombres.'.'.$extCartaPrestacion;
			$fileCartaPrestacion->move($destinationPath.$nombreCarpeta,$nombreCartaPrestacion);

			//Carta Aceptación Servicio
			$fileCartaAceptacion = Input::file('cartaAceptacion');
			$extCartaAceptacion = $fileCartaAceptacion->getClientOriginalExtension();
			$nombreCartaAceptacion = 'CartaAceptacion_'.$estudiante->id.'_'.$estudiante->nombres.'.'.$extCartaAceptacion;
			$fileCartaAceptacion->move($destinationPath.$nombreCarpeta,$nombreCartaAceptacion);

			$beca->cartaSolicitud = $nombreSolicitud;
			$beca->curp = $nombreCURP;
			$beca->ife = $nombreIFE;
			$beca->cartaPrestacion = $nombreCartaPrestacion;
			$beca->cartaAceptacion = $nombreCartaAceptacion;

			$beca->save();
			
			return Redirect::to('subirBeca');


	    }

		

		//return Redirect::to('perfilEstudiante/'.$id);
	}


	public function descargarSolicitud($id)
	{

		$estudiante = Estudiante::find($id);
		$nombreCarpeta = $estudiante->nombres.' '.$estudiante->apellidos;
		$nombreSolicitud = 'cartaSolicitud_'.$estudiante->id.'_'.$estudiante->nombres.'.pdf';

		$file= public_path(). '/becas/'.$nombreCarpeta.'/'.$nombreSolicitud;
        $headers = array(
              'Content-Type: application/pdf',
            );
        return Response::download($file, $nombreSolicitud , $headers);

	}

	public function descargarCURP($id)
	{

		$estudiante = Estudiante::find($id);
		$nombreCarpeta = $estudiante->nombres.' '.$estudiante->apellidos;
		$nombreCURP = 'CURP_'.$estudiante->id.'_'.$estudiante->nombres.'.pdf';

		$file= public_path(). '/becas/'.$nombreCarpeta.'/'.$nombreCURP;
        $headers = array(
              'Content-Type: application/pdf',
            );
        return Response::download($file, $nombreCURP , $headers);

	}

	public function descargarIFE($id)
	{

		$estudiante = Estudiante::find($id);
		$nombreCarpeta = $estudiante->nombres.' '.$estudiante->apellidos;
		$nombreIFE = 'IFE_'.$estudiante->id.'_'.$estudiante->nombres.'.pdf';

		$file= public_path(). '/becas/'.$nombreCarpeta.'/'.$nombreIFE;
        $headers = array(
              'Content-Type: application/pdf',
            );
        return Response::download($file, $nombreIFE , $headers);

	}

	public function descargarPrestacion($id)
	{

		$estudiante = Estudiante::find($id);
		$nombreCarpeta = $estudiante->nombres.' '.$estudiante->apellidos;
		$nombreCartaPrestacion = 'CartaPrestacion_'.$estudiante->id.'_'.$estudiante->nombres.'.pdf';

		$file= public_path(). '/becas/'.$nombreCarpeta.'/'.$nombreCartaPrestacion;
        $headers = array(
              'Content-Type: application/pdf',
            );
        return Response::download($file, $nombreCartaPrestacion , $headers);

	}

	public function descargarAceptacion($id)
	{

		$estudiante = Estudiante::find($id);
		$nombreCarpeta = $estudiante->nombres.' '.$estudiante->apellidos;
		$nombreCartaAceptacion = 'CartaAceptacion_'.$estudiante->id.'_'.$estudiante->nombres.'.pdf';

		$file= public_path(). '/becas/'.$nombreCarpeta.'/'.$nombreCartaAceptacion;
        $headers = array(
              'Content-Type: application/pdf',
            );
        return Response::download($file, $nombreCartaAceptacion , $headers);

	}

	public function eliminarExpediente($id)
	{

		//Primero encontramos la beca
		$beca = Beca::find($id);

		//Luego encontramos a dueño de la beca
		$estudiante = Estudiante::find($beca->estudiante->id);

		//Luego encontramos el nombre de carpeta
		$nombreCarpeta = $estudiante->nombres.' '.$estudiante->apellidos;

		//Luego los nombres de los archivos
		$nombreCartaAceptacion = 'CartaAceptacion_'.$estudiante->id.'_'.$estudiante->nombres.'.pdf';
		$nombreCartaPrestacion = 'CartaPrestacion_'.$estudiante->id.'_'.$estudiante->nombres.'.pdf';
		$nombreIFE = 'IFE_'.$estudiante->id.'_'.$estudiante->nombres.'.pdf';
		$nombreCURP = 'CURP_'.$estudiante->id.'_'.$estudiante->nombres.'.pdf';
		$nombreSolicitud = 'cartaSolicitud_'.$estudiante->id.'_'.$estudiante->nombres.'.pdf';

		//Luego la url del archivo
		$CartaAceptacion= public_path(). '/becas/'.$nombreCarpeta.'/'.$nombreCartaAceptacion;
		$CartaPrestacion= public_path(). '/becas/'.$nombreCarpeta.'/'.$nombreCartaPrestacion;
		$IFE= public_path(). '/becas/'.$nombreCarpeta.'/'.$nombreIFE;
		$CURP= public_path(). '/becas/'.$nombreCarpeta.'/'.$nombreCURP;
		$Solicitud= public_path(). '/becas/'.$nombreCarpeta.'/'.$nombreSolicitud;

		//y al final eliminamos ese archivo
		File::delete($CartaAceptacion);
		File::delete($CartaPrestacion);
		File::delete($IFE);
		File::delete($CURP);
		File::delete($Solicitud);

		$beca->delete();

		Session::flash('message', 'La beca del estudiante: "'.$estudiante->nombres.'" se ha eliminado!');

		
		//if(Session::get('tipo') == 'Estudiante'){
			//return Redirect::to('subirBeca');
		//}else{
			return Redirect::to('consultarBecas');
		//}
		

	}

	public function eliminarBeca($id)
	{

		//Primero encontramos la beca
		$beca = Beca::find($id);

		//Luego encontramos a dueño de la beca
		$estudiante = Estudiante::find($beca->estudiante->id);

		//Luego encontramos el nombre de carpeta
		$nombreCarpeta = $estudiante->nombres.' '.$estudiante->apellidos;

		//Luego los nombres de los archivos
		$nombreCartaAceptacion = 'CartaAceptacion_'.$estudiante->id.'_'.$estudiante->nombres.'.pdf';
		$nombreCartaPrestacion = 'CartaPrestacion_'.$estudiante->id.'_'.$estudiante->nombres.'.pdf';
		$nombreIFE = 'IFE_'.$estudiante->id.'_'.$estudiante->nombres.'.pdf';
		$nombreCURP = 'CURP_'.$estudiante->id.'_'.$estudiante->nombres.'.pdf';
		$nombreSolicitud = 'cartaSolicitud_'.$estudiante->id.'_'.$estudiante->nombres.'.pdf';

		//Luego la url del archivo
		$CartaAceptacion= public_path(). '/becas/'.$nombreCarpeta.'/'.$nombreCartaAceptacion;
		$CartaPrestacion= public_path(). '/becas/'.$nombreCarpeta.'/'.$nombreCartaPrestacion;
		$IFE= public_path(). '/becas/'.$nombreCarpeta.'/'.$nombreIFE;
		$CURP= public_path(). '/becas/'.$nombreCarpeta.'/'.$nombreCURP;
		$Solicitud= public_path(). '/becas/'.$nombreCarpeta.'/'.$nombreSolicitud;

		//y al final eliminamos ese archivo
		File::delete($CartaAceptacion);
		File::delete($CartaPrestacion);
		File::delete($IFE);
		File::delete($CURP);
		File::delete($Solicitud);

		$beca->delete();

		Session::flash('message', 'La beca del estudiante: "'.$estudiante->nombres.'" se ha eliminado!');

		
		//if(Session::get('tipo') == 'Estudiante'){
			return Redirect::to('subirBeca');
		//}else{
		//	return Redirect::to('consultarBecas');
		//}
		

	}


	public function descargarSolicitudEstudiante($id)
	{

		$estudiante = Estudiante::find($id);
		$nombreCarpeta = $estudiante->nombres.' '.$estudiante->apellidos;
		$nombreSolicitud = 'cartaSolicitud_'.$estudiante->id.'_'.$estudiante->nombres.'.pdf';

		$file= public_path(). '/becas/'.$nombreCarpeta.'/'.$nombreSolicitud;
        $headers = array(
              'Content-Type: application/pdf',
            );
        return Response::download($file, $nombreSolicitud , $headers);

	}

	public function descargarCURPEstudiante($id)
	{

		$estudiante = Estudiante::find($id);
		$nombreCarpeta = $estudiante->nombres.' '.$estudiante->apellidos;
		$nombreCURP = 'CURP_'.$estudiante->id.'_'.$estudiante->nombres.'.pdf';

		$file= public_path(). '/becas/'.$nombreCarpeta.'/'.$nombreCURP;
        $headers = array(
              'Content-Type: application/pdf',
            );
        return Response::download($file, $nombreCURP , $headers);

	}

	public function descargarIFEEstudiante($id)
	{

		$estudiante = Estudiante::find($id);
		$nombreCarpeta = $estudiante->nombres.' '.$estudiante->apellidos;
		$nombreIFE = 'IFE_'.$estudiante->id.'_'.$estudiante->nombres.'.pdf';

		$file= public_path(). '/becas/'.$nombreCarpeta.'/'.$nombreIFE;
        $headers = array(
              'Content-Type: application/pdf',
            );
        return Response::download($file, $nombreIFE , $headers);

	}

	public function descargarPrestacionEstudiante($id)
	{

		$estudiante = Estudiante::find($id);
		$nombreCarpeta = $estudiante->nombres.' '.$estudiante->apellidos;
		$nombreCartaPrestacion = 'CartaPrestacion_'.$estudiante->id.'_'.$estudiante->nombres.'.pdf';

		$file= public_path(). '/becas/'.$nombreCarpeta.'/'.$nombreCartaPrestacion;
        $headers = array(
              'Content-Type: application/pdf',
            );
        return Response::download($file, $nombreCartaPrestacion , $headers);

	}

	public function descargarAceptacionEstudiante($id)
	{

		$estudiante = Estudiante::find($id);
		$nombreCarpeta = $estudiante->nombres.' '.$estudiante->apellidos;
		$nombreCartaAceptacion = 'CartaAceptacion_'.$estudiante->id.'_'.$estudiante->nombres.'.pdf';

		$file= public_path(). '/becas/'.$nombreCarpeta.'/'.$nombreCartaAceptacion;
        $headers = array(
              'Content-Type: application/pdf',
            );
        return Response::download($file, $nombreCartaAceptacion , $headers);

	}

	

}

/*
public function uploadBeca()
	{
		//Encontrar al estudiante
		$id = Session::get('id');
		$estudiante = Estudiante::find($id);


		$becas = Beca::all();

		$numeroBecas = count($becas);

		for ($i = 0; $i < $numeroBecas; $i++){
			if($becas[$i]->estudiante_id == $estudiante->id)
			{
				//Seleccionar esa beca para actualizarla!
				$BecaSeleccionada = Beca::find($becas[$i]->id);
				$BecaSeleccionada->perfil = Input::get('perfil');
				$BecaSeleccionada->estudiante_id = $id;
				$BecaSeleccionada->periodo = Input::get('periodo');;

				//Crear directorio becas//
				$nombreCarpeta = $estudiante->nombres.' '.$estudiante->apellidos;
				
				//Carta Solicitud de servicio
				$fileSolicitud = Input::file('cartaSolicitud');
				$extSolicitud = $fileSolicitud->getClientOriginalExtension();
				$nombreSolicitud = 'cartaSolicitud_'.$estudiante->id.'_'.$estudiante->nombres.'.'.$extSolicitud;
				$fileSolicitud->move('becas/'.$nombreCarpeta,$nombreSolicitud);


				//CURP
				$fileCURP = Input::file('curp');
				$extCURP = $fileCURP->getClientOriginalExtension();
				$nombreCURP = 'CURP_'.$estudiante->id.'_'.$estudiante->nombres.'.'.$extCURP;
				$fileCURP->move('becas/'.$nombreCarpeta,$nombreCURP);

				//IFE
				$fileIFE = Input::file('ife');
				$extIFE = $fileIFE->getClientOriginalExtension();
				$nombreIFE = 'IFE_'.$estudiante->id.'_'.$estudiante->nombres.'.'.$extIFE;
				$fileIFE->move('becas/'.$nombreCarpeta,$nombreIFE);

				//Carta Prestación Servicio
				$fileCartaPrestacion = Input::file('cartaPrestacion');
				$extCartaPrestacion = $fileCartaPrestacion->getClientOriginalExtension();
				$nombreCartaPrestacion = 'CartaPrestacion_'.$estudiante->id.'_'.$estudiante->nombres.'.'.$extCartaPrestacion;
				$fileCartaPrestacion->move('becas/'.$nombreCarpeta,$nombreCartaPrestacion);

				//Carta Aceptación Servicio
				$fileCartaAceptacion = Input::file('cartaAceptacion');
				$extCartaAceptacion = $fileCartaAceptacion->getClientOriginalExtension();
				$nombreCartaAceptacion = 'CartaAceptacion_'.$estudiante->id.'_'.$estudiante->nombres.'.'.$extCartaAceptacion;
				$fileCartaAceptacion->move('becas/'.$nombreCarpeta,$nombreCartaAceptacion);




				$BecaSeleccionada->cartaSolicitud = $nombreSolicitud;
				$BecaSeleccionada->curp = $nombreCURP;
				$BecaSeleccionada->ife = $nombreIFE;
				$BecaSeleccionada->cartaPrestacion = $nombreCartaPrestacion;
				$BecaSeleccionada->cartaAceptacion = $nombreCartaAceptacion;


				$BecaSeleccionada->save();


			}else
				{
					//Crear una beca nueva
					$beca = new Beca;
					$beca->perfil = Input::get('perfil');
					$beca->estudiante_id = $id;
					$beca->periodo = Input::get('periodo');;

					//Crear directorio becas//
					$nombreCarpeta = $estudiante->nombres.' '.$estudiante->apellidos;
					
					//Carta Solicitud de servicio
					$fileSolicitud = Input::file('cartaSolicitud');
					$extSolicitud = $fileSolicitud->getClientOriginalExtension();
					$nombreSolicitud = 'cartaSolicitud_'.$estudiante->id.'_'.$estudiante->nombres.'.'.$extSolicitud;
					$fileSolicitud->move('becas/'.$nombreCarpeta,$nombreSolicitud);


					//CURP
					$fileCURP = Input::file('curp');
					$extCURP = $fileCURP->getClientOriginalExtension();
					$nombreCURP = 'CURP_'.$estudiante->id.'_'.$estudiante->nombres.'.'.$extCURP;
					$fileCURP->move('becas/'.$nombreCarpeta,$nombreCURP);

					//IFE
					$fileIFE = Input::file('ife');
					$extIFE = $fileIFE->getClientOriginalExtension();
					$nombreIFE = 'IFE_'.$estudiante->id.'_'.$estudiante->nombres.'.'.$extIFE;
					$fileIFE->move('becas/'.$nombreCarpeta,$nombreIFE);

					//Carta Prestación Servicio
					$fileCartaPrestacion = Input::file('cartaPrestacion');
					$extCartaPrestacion = $fileCartaPrestacion->getClientOriginalExtension();
					$nombreCartaPrestacion = 'CartaPrestacion_'.$estudiante->id.'_'.$estudiante->nombres.'.'.$extCartaPrestacion;
					$fileCartaPrestacion->move('becas/'.$nombreCarpeta,$nombreCartaPrestacion);

					//Carta Aceptación Servicio
					$fileCartaAceptacion = Input::file('cartaAceptacion');
					$extCartaAceptacion = $fileCartaAceptacion->getClientOriginalExtension();
					$nombreCartaAceptacion = 'CartaAceptacion_'.$estudiante->id.'_'.$estudiante->nombres.'.'.$extCartaAceptacion;
					$fileCartaAceptacion->move('becas/'.$nombreCarpeta,$nombreCartaAceptacion);




					$beca->cartaSolicitud = $nombreSolicitud;
					$beca->curp = $nombreCURP;
					$beca->ife = $nombreIFE;
					$beca->cartaPrestacion = $nombreCartaPrestacion;
					$beca->cartaAceptacion = $nombreCartaAceptacion;


					$beca->save();

				}
			
		}

		
		return Redirect::to('perfilEstudiante');

		//return Redirect::to('perfilEstudiante/'.$id);
	}


*/