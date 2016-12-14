<?php

class AdministradoresController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /administradors
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		return View::make('administradores.index');
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /administradors/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /administradors
	 *
	 * @return Response
	 */
	public function store()
	{
		 	$admin = new Administrador;
            $admin->usuario   = Input::get('usuario');
            $admin->password  = Input::get('password');
            $admin->save();
            return Redirect::to('cuentasAdministradores');
	}

	/**
	 * Display the specified resource.
	 * GET /administradors/{id}
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
	 * GET /administradors/{id}/edit
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
	 * PUT /administradors/{id}
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
	 * DELETE /administradors/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
		$cuenta = Administrador::find($id);
        $cuenta->delete();

        // redirect
        Session::flash('message', 'La cuenta de administrador "'.$cuenta->usuario.'" se ha eliminado!');
        return Redirect::to('cuentasAdministradores');
	}

}