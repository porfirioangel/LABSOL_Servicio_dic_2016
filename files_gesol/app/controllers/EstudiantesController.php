<?php

class EstudiantesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /estudiantes
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /estudiantes/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /estudiantes
	 *
	 * @return Response
	 */
	public function store()
	{

		// process the form here

	    // create the validation rules ------------------------
	    $rules = array(
	        'nombres'             	=> 'required',                        
	        'apellidos'             => 'required',
	        'edad'            		=> 'required|numeric|between:15,50',
	        'fechaNacimiento'      	=> 'required|date',
	        'telefono'              => 'numeric|min:10',
	        'celular'             	=> 'numeric|min:10',
	        'email'             	=> 'required|email|unique:estudiantes',
	        'contrasena'            => 'required|min:8|alpha_num',
	        'sexo'             		=> 'required',
	        'codigoPostal'          => 'required',
	        'estado'             	=> 'required',
	        'municipio'             => 'required',
	        'universidad'           => 'required',
	        'carrera'             	=> 'required',
	        'matricula'             => 'required',
	        'modalidad'             => 'required',
	        'grado'            		=> 'required|numeric',
	        'promedio'             	=> 'required|numeric|between:0,10',
	        'periodo'             	=> 'required',
	        'perfil_id'             => 'required',                        
	        'direccion'            	=> 'required'
	        
	    );

		// create custom validation messages ------------------
	    $messages = array(
	        'required' 		=> 'El campo ":attribute" es un campo obligatorio.',
	        'numeric' 		=> 'El campo ":attribute" debe de ser un número.',
	        'email' 		=> 'El campo ":attribute" debe tener formato de email.',
	        'date' 			=> 'El ccampo ":attribute" debe tener un formato dd-mm-aaaa.',
	        'unique' 		=> 'El campo ":attribute" debe ser único.',
	        'between' 		=> 'El campo ":attribute" debe estar entre :min - :max.',
	        'alpha_num' 	=> 'El campo ":attribute" debe ser un campo alfa-numérico.',
	        'min' 			=> 'El campo ":attribute" debe tener un mínimo de :min caracteres'

	    );


	    // do the validation ----------------------------------
	    // validate against the inputs from our form
	     $validator = Validator::make(Input::all(), $rules, $messages);

	    // check if the validator failed -----------------------
	    if ($validator->fails()) {

	        // get the error messages from the validator
	        $messages = $validator->messages();
			
	        // redirect our user back to the form with the errors from the validator
	        return Redirect::to('nuevoEstudiante')
	            ->withErrors($validator);


	    } else {
	        // validation successful ---------------------------

	        // our estudiante has passed all tests!
	        // let him enter the database

	        // create the data for our estudiante
	        $estudiante = new Estudiante;

			$estudiante->nombres = Input::get('nombres');
			$estudiante->apellidos = Input::get('apellidos');
			$estudiante->edad = Input::get('edad');
			$estudiante->fechaNacimiento = Input::get('fechaNacimiento');
			$estudiante->telefono = Input::get('telefono');
			$estudiante->celular = Input::get('celular');
			$estudiante->email = Input::get('email');
			$estudiante->contrasena = Input::get('contrasena');
			$estudiante->sexo = Input::get('sexo');
			$estudiante->codigoPostal = Input::get('codigoPostal');
			$estudiante->estado = Input::get('estado');
			$estudiante->municipio = Input::get('municipio');
			$estudiante->universidad = Input::get('universidad');
			$estudiante->carrera = Input::get('carrera');
			$estudiante->matricula = Input::get('matricula');
			$estudiante->modalidad = Input::get('modalidad');
			$estudiante->grado = Input::get('grado');
			$estudiante->promedio = Input::get('promedio');
			$estudiante->periodo = Input::get('periodo');
			$estudiante->perfil_id = Input::get('perfil_id');
			$estudiante->direccion = Input::get('direccion');
			$estudiante->estatus = 0;
			$estudiante->estatusProyecto = 0;
			$estudiante->proyecto_id = 0;
			
			$estudiante->save();

	        // redirect ----------------------------------------
	        // redirect our user back to the form so they can do it all over again
	        return Redirect::to('inicio');

	    }


		

	}

	/**
	 * Display the specified resource.
	 * GET /estudiantes/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
		$estudiante = Estudiante::find($id);
		$perfiles = Perfil::all();

        // show the view and pass the nerd to it
        return View::make('estudiantes.verEstudiante')->with('estudiante', $estudiante);
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /estudiantes/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
		$estudiante = Estudiante::find($id);

        // show the view and pass the nerd to it
        return View::make('estudiantes.editarEstudiante')->with('estudiante', $estudiante);
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /estudiantes/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		
		// create the validation rules ------------------------
	    $rules = array(
	        'nombres'             	=> 'required',                        
	        'apellidos'             => 'required',
	        'edad'            		=> 'required|numeric|between:15,50',
	        'fechaNacimiento'      	=> 'required|date',
	        'telefono'              => 'numeric|min:10',
	        'celular'             	=> 'numeric|min:10',
	        'email'             	=> 'required|email',
	    
	        'sexo'             		=> 'required',
	        'codigoPostal'          => 'required',
	        'estado'             	=> 'required',
	        'municipio'             => 'required',
	        'universidad'           => 'required',
	        'carrera'             	=> 'required',
	        'matricula'             => 'required',
	        'modalidad'             => 'required',
	        'grado'            		=> 'required|numeric',
	        'promedio'             	=> 'required|numeric|between:0,10',
	        'periodo'             	=> 'required',
	        'perfil_id'             => 'required',                        
	        'direccion'            	=> 'required'
	        
	    );

		// create custom validation messages ------------------
	    $messages = array(
	        'required' 		=> 'El campo ":attribute" es un campo obligatorio.',
	        'numeric' 		=> 'El campo ":attribute" debe de ser un número.',
	        'email' 		=> 'El campo ":attribute" debe tener formato de email.',
	        'date' 			=> 'El ccampo ":attribute" debe tener un formato dd/mm/aaaa.',
	        'unique' 		=> 'El campo ":attribute" debe ser único.',
	        'between' 		=> 'El campo ":attribute" debe estar entre :min - :max.',
	        'alpha_num' 	=> 'El campo ":attribute" debe ser un campo alfa-numérico.',
	        'min' 			=> 'El campo ":attribute" debe tener un mínimo de :min caracteres'

	    );


	    // do the validation ----------------------------------
	    // validate against the inputs from our form
	     $validator = Validator::make(Input::all(), $rules, $messages);

	    // check if the validator failed -----------------------
	    if ($validator->fails()) {

	        // get the error messages from the validator
	        $messages = $validator->messages();
			
	        // redirect our user back to the form with the errors from the validator
	        return Redirect::to('nuevoEstudiante')
	            ->withErrors($validator);


	    } else {
	        // validation successful ---------------------------

	        // our estudiante has passed all tests!
	        // let him enter the database

	        // create the data for our estudiante
	        $estudiante = Estudiante::find($id);
			$estudiante->nombres = Input::get('nombres');
			$estudiante->apellidos = Input::get('apellidos');
			$estudiante->edad = Input::get('edad');
			$estudiante->fechaNacimiento = Input::get('fechaNacimiento');
			$estudiante->telefono = Input::get('telefono');
			$estudiante->celular = Input::get('celular');
			$estudiante->email = Input::get('email');
			$estudiante->contrasena = Input::get('contrasena');
			$estudiante->sexo = Input::get('sexo');
			$estudiante->codigoPostal = Input::get('codigoPostal');
			$estudiante->estado = Input::get('estado');
			$estudiante->municipio = Input::get('municipio');
			$estudiante->universidad = Input::get('universidad');
			$estudiante->carrera = Input::get('carrera');
			$estudiante->matricula = Input::get('matricula');
			$estudiante->modalidad = Input::get('modalidad');
			$estudiante->grado = Input::get('grado');
			$estudiante->promedio = Input::get('promedio');
			$estudiante->periodo = Input::get('periodo');
			$estudiante->perfil_id = Input::get('perfil_id');
			$estudiante->direccion = Input::get('direccion');
			
			$estudiante->save();

			//echo($estudiante);

			return Redirect::to('perfilEstudiante');

	    }

		
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /estudiantes/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
		$Estudiante = Estudiante::find($id);
		$Estudiante->delete();
		Session::flash('message', 'El estudiante "'.$Estudiante->nombres.' '. $Estudiante->apellidos .' " se ha eliminado!');

		return Redirect::to('administrarEstudiantes');

	}

	public function aprobarEstudiante($id)
	{
		$estudiante = Estudiante::find($id);

		$estudiante->estatus = 1;
		$estudiante->save(); 

		return Redirect::to('validarEstudiantes');

	}

	public function rechazarEstudiante($id)
	{
		$estudiante = Estudiante::find($id);

		$estudiante->estatus = 2;
		$estudiante->save(); 

		return Redirect::to('validarEstudiantes');

	}

	public function consultarEstudiante()
	//public function consultarEstudiante($id)
	{
		$id = Session::get('id');
		$estudiante = Estudiante::find($id);

        // show the view and pass the nerd to it
        return View::make('estudiantes.perfilEstudiante')->with('estudiante', $estudiante);

        //return "Hola bitch XD";
	}

	public function ponerEstudiante()
	{
		//
		$id = Session::get('id');
		$estudiante = Estudiante::find($id);
		$perfiles = Perfil::all();
        // show the view and pass the nerd to it
        return View::make('estudiantes.editarEstudiante', array('estudiante'=>$estudiante, 'perfiles'=>$perfiles));

        //return "Hola bitch XD";
	}

	public function seleccionarProyecto()
	{
		//
		$id = Session::get('id');
		$estudiante = Estudiante::find($id);
		$estudiante->proyecto_id = Input::get('proyecto_id');
		$estudiante->save(); 
        // show the view and pass the nerd to it
        return Redirect::to('perfilEstudiante');

        //return "Hola bitch XD";
	}

	public function aprobarProyecto($id)
	{
		
		$estudiante = Estudiante::find($id);

		$estudiante->estatusProyecto = 1;
		$estudiante->save(); 

		return Redirect::to('aprobarProyectos');

	}

	public function rechazarProyecto($id)
	{
		
		$estudiante = Estudiante::find($id);

		$estudiante->estatusProyecto = 2;
		$estudiante->save(); 

		return Redirect::to('aprobarProyectos');

	}

	public function eliminarEstudiante($id)
	{
		
		$Estudiante = Estudiante::find($id);
		$Estudiante->delete();
		Session::flash('message', 'El estudiante "'.$Estudiante->nombres.'" se ha eliminado!');

		return Redirect::to('administrarEstudiantes');

	}		

}