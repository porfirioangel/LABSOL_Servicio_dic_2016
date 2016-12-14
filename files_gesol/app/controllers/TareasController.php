<?php

class TareasController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /tareas
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /tareas/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /tareas
	 *
	 * @return Response
	 */
	public function store()
	{
		//
		$totalNuevas=0;
		$totalRegistradas=0;
		$totalFinal=0;

		$id = Session::get('id');
		$estudiante = Estudiante::find($id);
		$numTareas = Input::get('numeroTareas');

		//Calcular porcentaje de las tareas ya registradas
		$tareasRegistradas = Tarea::where('proyecto_id', '=', $estudiante->proyecto_id)->get();
		$tamTareasRegistradas = count($tareasRegistradas);

		for ($i = 0; $i < $tamTareasRegistradas; $i++) 
		{
			$totalRegistradas= $totalRegistradas + $tareasRegistradas[$i]->porcentaje;

		}

		//Calcular porcentaje de las nuevas tareas a registrar
		for ($i = 1; $i <= $numTareas; $i++) 
		{
			$tarea[$i] = new Tarea;
			$tarea[$i]->porcentaje = Input::get('porcentaje'.$i);
			$totalNuevas= $totalNuevas + $tarea[$i]->porcentaje;
		}

		$totalFinal=$totalNuevas+$totalRegistradas;

		//Session::flash('message', 'Tareas registradas: '.$tamTareasRegistradas.' El total Registradas: '. $totalRegistradas .' %  El totalNuevas: '. $totalNuevas .' % El total final: '. $totalFinal .' %');
		//Validar si se puede guardar
		if($totalFinal > 100)
		{
			Session::flash('message', 'Los cambios NO se han guardado, ya que el porcentaje  de'. $totalFinal .'% rebasa del 100% permitido.');
			//No se puede guardas mas tareas
		}else
		{
			//Si se puede guardar mas tareas
			Session::flash('message', 'Los cambios se han guardado correctamente dando un total de: '. $totalFinal.'% ');
			for ($i = 1; $i <= $numTareas; $i++) 
			{
	    		$tarea[$i] = new Tarea;
	    		$tarea[$i]->nombre = Input::get('nombre'.$i);
	    		$tarea[$i]->porcentaje = Input::get('porcentaje'.$i);
	    		$tarea[$i]->tiempo = Input::get('duracion'.$i);
	    		$tarea[$i]->proyecto_id = $estudiante->proyecto_id;
	    		$tarea[$i]->estudiante_id = $estudiante->id;
	    		$tarea[$i]->estatus = 0;
	    		
	    		$tarea[$i]->save();

			}
		}


		return Redirect::to('finalizarTareas');
	}

	/**
	 * Display the specified resource.
	 * GET /tareas/{id}
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
	 * GET /tareas/{id}/edit
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
	 * PUT /tareas/{id}
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
	 * DELETE /tareas/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


	public function validarTarea($id)
	{
		
		$tarea = Tarea::find($id);

		$tarea->estatus = 1;
		$tarea->save(); 

		return Redirect::to('finalizarTareas');

	}

	public function eliminarTarea($id)
	{
		
		$tarea = Tarea::find($id);
		$tarea->delete();
		Session::flash('message', 'La tarea "'.$tarea->nombre.'" se ha eliminado!');

		return Redirect::to('finalizarTareas');

	}


	public function aprobarTarea($id)
	{
		
		$tarea = Tarea::find($id);

		$tarea->estatus = 2;
		$tarea->save(); 
		Session::flash('message', 'La tarea "'.$tarea->nombre.'" se ha aprobado!');
		return Redirect::to('validarTareas');

	}

	public function rechazarTarea($id)
	{
		
		$tarea = Tarea::find($id);

		$tarea->estatus = 0;
		$tarea->save(); 
		Session::flash('message', 'La tarea "'.$tarea->nombre.'" se ha rechazado!');
		return Redirect::to('validarTareas');

	}

}