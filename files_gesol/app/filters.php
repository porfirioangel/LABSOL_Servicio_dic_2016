<?php

/*
|--------------------------------------------------------------------------
| Application & Route Filters
|--------------------------------------------------------------------------
|
| Below you will find the "before" and "after" events for the application
| which may be used to do any work before or after a request into your
| application. Here you may also register your custom route filters.
|
*/

App::before(function($request)
{
	//
});


App::after(function($request, $response)
{
	//
});

/*
|--------------------------------------------------------------------------
| Authentication Filters
|--------------------------------------------------------------------------
|
| The following filters are used to verify that the user of the current
| session is logged into this application. The "basic" filter easily
| integrates HTTP Basic authentication for quick, simple checking.
|
*/

Route::filter('auth', function()
{
	if (Auth::guest())
	{
		if (Request::ajax())
		{
			return Response::make('Unauthorized', 401);
		}
		else
		{
			return Redirect::guest('login');
		}
	}
});


Route::filter('auth.basic', function()
{
	return Auth::basic();
});

/*
|--------------------------------------------------------------------------
| Guest Filter
|--------------------------------------------------------------------------
|
| The "guest" filter is the counterpart of the authentication filters as
| it simply checks that the current user is not logged in. A redirect
| response will be issued if they are, which you may freely change.
|
*/

Route::filter('guest', function()
{
	if (Auth::check()) return Redirect::to('/');
});

/*
|--------------------------------------------------------------------------
| CSRF Protection Filter
|--------------------------------------------------------------------------
|
| The CSRF filter is responsible for protecting your application against
| cross-site request forgery attacks. If this special token in a user
| session does not match the one given in this request, we'll bail.
|
*/

Route::filter('csrf', function()
{
	if (Session::token() !== Input::get('_token'))
	{
		throw new Illuminate\Session\TokenMismatchException;
	}
});

Route::filter('sessionEstudiante', function(){
	if(Session::get('tipo') != 'Estudiante')
	{
		return Redirect::to('login');
	}
});

Route::filter('sessionAdministrador', function(){
	if(Session::get('tipo') != 'Administrador')
	{
		return Redirect::to('login');
	}
});

//Filtro para evitar que entre al panel de tareas sin que se haya asignado un proyecto antes! 
Route::filter('sesionAbierta', function(){
	if (Session::get('tipo')){
    	// usuario con sesión iniciada
		if(Session::get('tipo') == 'Estudiante')
		{
			return Redirect::to('perfilEstudiante');
		}else{
			return Redirect::to('nuevoProyecto');
		}
	}
});


Route::filter('panelTareas', function(){
	$id = Session::get('id');
	$estudiante = Estudiante::find($id);

	if($estudiante->estatusProyecto == 0)
	{
		Session::flash('message', 'Aun no eliges un proyecto o está pendiente la aprobación del proyecto seleccionado.');
		return Redirect::to('elegirProyecto');
	}
});

Route::filter('becasNulo', function(){
	$becas = Beca::all();
	if(empty($becas))
	{
		Session::flash('message', 'Aun no se encuentra ninguna beca registrada');
		return Redirect::to('administrarEstudiantes');
	}
	
});








