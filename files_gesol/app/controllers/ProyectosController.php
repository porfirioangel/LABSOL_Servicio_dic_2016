<?php

class ProyectosController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /proyectos
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$proyectos = Proyecto::all();

		return View::make('proyectos.editarProyectos', compact('proyectos'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /proyectos/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /proyectos
	 *
	 * @return Response
	 */
	public function store()
	{
		
		// process the form here

	    // create the validation rules ------------------------
	    $rules = array(
	        'nombre'             	=> 'required',
	        'dependencia'           => 'required', 
	        'tipoProyecto'          => 'required', 
	        'duracion'             	=> 'required|numeric', 
	        'numeroIntegrantes'     => 'required|numeric',                                                
	        'objetivo'             	=> 'required', 
	        'descripcion'           => 'required', 
	        'numeroActividades'     => 'required', 
	        'perfiles'             	=> 'required'
	        
	    );

		// create custom validation messages ------------------
	    $messages = array(
	        'required' 		=> 'El campo ":attribute" es un campo obligatorio.',
	        'numeric' 		=> 'El campo ":attribute" debe de ser un número.'
	    );


	    // do the validation ----------------------------------
	    // validate against the inputs from our form
	     $validator = Validator::make(Input::all(), $rules, $messages);

	    // check if the validator failed -----------------------
	    if ($validator->fails()) {

	        // get the error messages from the validator
	        $messages = $validator->messages();
			
	        // redirect our user back to the form with the errors from the validator
	        return Redirect::to('nuevoProyecto')
	            ->withErrors($validator);


	    } else {
	        

	        $proyecto = new Proyecto;

			$proyecto->nombre = Input::get('nombre');
			$proyecto->dependencia = Input::get('dependencia');
			$proyecto->tipoProyecto = Input::get('tipoProyecto');
			$proyecto->duracion = Input::get('duracion');
			$proyecto->numeroIntegrantes = Input::get('numeroIntegrantes');
			$proyecto->objetivo = Input::get('objetivo');
			$proyecto->descripcion = Input::get('descripcion');
			$proyecto->porcentaje = 0;

			$proyecto->save();

			$numActividades = Input::get('numeroActividades');

			for ($i = 1; $i <= $numActividades; $i++) {
	    		$actividad[$i] = new Actividad;
	    		$actividad[$i]->nombre = Input::get('campo'.$i);
	    		$actividad[$i]->proyecto_id = $proyecto->id;
	    		$actividad[$i]->save();
			}


			$perfiles = Input::get('perfiles');

		    if(is_array($perfiles)) 
		    {
		        for($i=0 ;$i < count($perfiles); $i++)
		        {
		            // insert data on first table (accounts table)
		            $perfilNew[$i] = new PerfilProyecto;
		            $perfilNew[$i]->perfil_id = $perfiles[$i];
		            $perfilNew[$i]->proyecto_id = $proyecto->id;
		            $perfilNew[$i]->save();
		            
		        }
		    }
			return Redirect::to('verProyectos');

	    }
		

	}

	/**
	 * Display the specified resource.
	 * GET /proyectos/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
		$proyecto = Proyecto::find($id);
		$perfiles = Perfil::all();
		//$perfilesProyecto = Perfil::
		$actividades = Actividad::where('proyecto_id', '=', $proyecto->id )->get();
        // show the view and pass the nerd to it
        return View::make('proyectos.actualizarProyecto', array('proyecto'=>$proyecto, 'perfiles'=>$perfiles, 'actividades'=>$actividades));

        //return View::make('proyectos.actualizarProyecto')->with('proyecto', $proyecto);
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /proyectos/{id}/edit
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
	 * PUT /proyectos/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
		$proyecto = Proyecto::find($id);
		$proyecto->nombre = Input::get('nombre');
		$proyecto->dependencia = Input::get('dependencia');
		$proyecto->tipoProyecto = Input::get('tipoProyecto');
		$proyecto->duracion = Input::get('duracion');
		$proyecto->numeroIntegrantes = Input::get('numeroIntegrantes');
		$proyecto->objetivo = Input::get('objetivo');
		$proyecto->descripcion = Input::get('descripcion');
		//$proyecto->porcentaje = 0;

		$proyecto->save();

		$perfiles = Input::get('perfiles');

		    if(is_array($perfiles)) 
		    {
		        for($i=0 ;$i < count($perfiles); $i++)
		        {
		            // insert data on first table (accounts table)
		            $perfilNew[$i] = new PerfilProyecto;
		            $perfilNew[$i]->perfil_id = $perfiles[$i];
		            $perfilNew[$i]->proyecto_id = $proyecto->id;
		            $perfilNew[$i]->save();
		            
		        }
		    }

		$numActividades = Input::get('numeroActividades');

			for ($i = 1; $i <= $numActividades; $i++) {
	    		$actividad[$i] = new Actividad;
	    		$actividad[$i]->nombre = Input::get('campo'.$i);
	    		$actividad[$i]->proyecto_id = $proyecto->id;
	    		$actividad[$i]->save();
			}
			return Redirect::to('verProyectos');
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /proyectos/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
	//
		$proyecto = Proyecto::find($id);
		$tareas = Tarea::where('proyecto_id', '=', $id)->get();

		 for($i=0; $i < count($tareas); $i++)
		        {
		            // insert data on first table (accounts table)
		        
		            $tareas[$i]->delete();
		            
		        }

        $proyecto->delete();


        // redirect
        Session::flash('message', 'El proyecto "'.$proyecto->nombre.'" se ha eliminado!');
        return Redirect::to('editarProyectos');
	}

	public function finalizarProyecto($id)
	{
		$proyecto = Proyecto::find($id);
		$proyecto->estatus = 1;
		$proyecto->save();

		Session::flash('message', 'El proyecto "'.$proyecto->nombre.'" se marcado como finalizado!');
        return Redirect::to('editarProyectos');
	}


}