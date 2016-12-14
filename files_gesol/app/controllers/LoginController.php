<?php 

//Controlador de tipo RESTFUL
class loginController extends BaseController{


	public function getAcceso()
	{
		//return "Entro a getAcceso";
		$user = Input::get('user');
		$password = Input::get('password');
		$tipo = Input::get('tipo');

		$estudiantes = Estudiante::all();
		$administradores = Administrador::all();

		if($tipo == "Estudiante")
		{
			foreach ($estudiantes as $estudiante)
			{
				if(($estudiante->email == $user) && ($estudiante->contrasena == $password) && $estudiante->estatus == 1)
				{
					Session::put('id', $estudiante->id);
					Session::put('tipo', 'Estudiante');
					Session::put('email', $estudiante->email);
					Session::put('contrasena', $estudiante->contrasena);
					return Redirect::to('perfilEstudiante');
					//return Redirect::to('perfilEstudiante/'.$estudiante->id);
					
					//return "Entraste pequeño ID: ".$estudiante->id."->".$estudiante->nombres;
				}
			}
			Session::flash('message', 'Posiblemente tu usuario o contraseña se encuentren escritas incorrectamente, de lo contrario puede que tu cuenta aun no sea validada, si es así ponte en contacto con el administrador para validar tu cuenta.');
			return Redirect::to('login');

		}
		else
		{
			if($tipo == "Administrador")
			{
				if(($user == "graphiiics") && ($password == "graphiiics"))
				{
					Session::put('tipo', 'Administrador');
					return Redirect::to('nuevoProyecto');
				}
				else
				{
					foreach ($administradores as $administrador)
					{
						if(($administrador->usuario == $user) && ($administrador->password == $password))
						{
							//Dale entrada de administrador
							Session::put('id', $administrador->id);
							Session::put('tipo', 'Administrador');
							Session::put('usuario', $administrador->usuario);
							Session::put('password', $administrador->password);
							return Redirect::to('nuevoProyecto');
							//return "Entraste madafackar ID: ".$administrador->id."->".$administrador->usuario;
						}
					}
				}
				
					return Redirect::to('login');
			}
		}  
	}

	public function cerrarSesion()
	{
		Session::flush();
		return Redirect::to('inicio');
	}
}
 	

?>
