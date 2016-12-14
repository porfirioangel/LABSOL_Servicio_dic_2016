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
	
		$id = Session::get('id');
		$estudiante = Estudiante::find($id);

		$nombreCarpeta = $estudiante->nombres.' '.$estudiante->apellidos;

		$beca = new Beca;
		$beca->perfil = Input::get('perfil');
		$beca->estudiante_id = $id;
		$beca->periodo = Input::get('periodo');;

		//Crear directorio becas//
		$destinationPath = public_path().sprintf("/becas/");
		

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

		
		return Redirect::to('perfilEstudiante');

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

}