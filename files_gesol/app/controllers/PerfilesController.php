<?php

class PerfilesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /perfils
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /perfils/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /perfils
	 *
	 * @return Response
	 */
	public function store()
	{
		//
		$perfil = new Perfil;
		$perfil->nombre = Input::get('perfil');
		$perfil->save();
		return Redirect::to('administrarPerfiles');
	}

	/**
	 * Display the specified resource.
	 * GET /perfils/{id}
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
	 * GET /perfils/{id}/edit
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
	 * PUT /perfils/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
		$perfil = Perfil::find($id);
		$perfil->nombres = Input::get('nombre');
		
		$perfil->save();

		return Redirect::to('administrarPerfiles');
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /perfils/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */

	public function destroy($id)
	{
		//
		$perfil = Perfil::find($id);
        $perfil->delete();

        // redirect
        Session::flash('message', 'El perfil "'.$perfil->nombre.'" se ha eliminado!');
        return Redirect::to('administrarPerfiles');
	}

}