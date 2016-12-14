<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function () {
    return View::make('index');
});

Route::resource('administradores', 'AdministradoresController');
Route::resource('estudiantes', 'EstudiantesController');
Route::resource('proyectos', 'ProyectosController');
Route::resource('actividades', 'ActividadesController');
Route::resource('perfiles', 'PerfilesController');
Route::resource('becas', 'BecasController');
Route::resource('planeaciones', 'PlaneacionesController');
Route::resource('tareas', 'TareasController');

/*
Route::get('catalogo', 'catalogoController@getCatalogo');

Route::get('test', function()
{
	return View::make('test');
	//return 'Ola k ase!';
});

*/

/*LINKS FREE*/

Route::get('datos/{id}', 'catalogoController@getDatos');

Route::get('verProyectos', 'catalogoController@getCatalogo');

Route::get('verProyectosFinalizados', 'catalogoController@getCatalogoFinalizado');

Route::get('inicio', function () {
    return View::make('index');
});

Route::get('login', array('before' => 'sesionAbierta', function () {
    return View::make('login');
}));

Route::get('nuevoEstudiante', function () {
    $perfiles = Perfil::all();
    return View::make('estudiantes/nuevoEstudiante')->with('perfiles', $perfiles);
});

Route::post('acceso', 'LoginController@getAcceso');

Route::get('cerrar', 'LoginController@cerrarSesion');
/*Fin de links free*/

//Grupo de rutas para estudiante [FILTRO]
Route::group(array('before' => 'sessionEstudiante'), function () {


    Route::get('nuevaPlaneacion', function () {
        $proyectos = Proyecto::all();
        return View::make('planeaciones/nuevaPlaneacion')->with('proyectos', $proyectos);
    });

    Route::get('editarEstudiante', function () {
        return View::make('estudiantes/editarEstudiante');
    });

    Route::get('elegirProyecto', function () {
        $proyectos = Proyecto::all();
        return View::make('estudiantes/elegirProyecto')->with('proyectos', $proyectos);
    });

    Route::get('perfilEstudiante', 'EstudiantesController@consultarEstudiante');
    //Route::get('perfilEstudiante/{id}', 'EstudiantesController@consultarEstudiante');

    Route::get('editarEstudiante', 'EstudiantesController@ponerEstudiante');
    //Route::get('editarEstudiante/{id}', 'EstudiantesController@ponerEstudiante');

    Route::post('seleccionarProyecto', 'EstudiantesController@seleccionarProyecto');

    Route::get('crearPlaneacion', function () {
        $id = Session::get('id');
        $estudiante = Estudiante::find($id);
        $estudiantes = Estudiante::where('proyecto_id', '=', $estudiante->proyecto_id)->get();
        return View::make('planeaciones/crearPlaneacion')->with('estudiantes', $estudiantes);
    });


    Route::get('finalizarTareas', array('before' => 'panelTareas', function () {
        $id = Session::get('id');
        $estudiante = Estudiante::find($id);
        $tareas = Tarea::where('proyecto_id', '=', $estudiante->proyecto_id)->where('estatus', '=', 0)->get();
        $tareasPendientes = Tarea::where('proyecto_id', '=', $estudiante->proyecto_id)->where('estatus', '=', 1)->get();
        $tareasTerminadas = Tarea::where('proyecto_id', '=', $estudiante->proyecto_id)->where('estatus', '=', 2)->get();

        $porcentaje = 0;

        for ($i = 0; $i < count($tareasTerminadas); $i++) {

            $porcentaje += $tareasTerminadas[$i]->porcentaje;
        }

        return View::make('tareas/finalizarTareas', array('tareas' => $tareas, 'tareasPendientes' => $tareasPendientes, 'tareasTerminadas' => $tareasTerminadas, 'porcentaje' => $porcentaje));
    }));

    /*Route::get('finalizarTareas', function()
    {
        $id = Session::get('id');
        $estudiante = Estudiante::find($id);
        $tareas = Tarea::where('proyecto_id', '=', $estudiante->proyecto_id)->where('estatus', '=', 0)->get();
        $tareasPendientes = Tarea::where('proyecto_id', '=', $estudiante->proyecto_id)->where('estatus', '=', 1)->get();
        $tareasTerminadas = Tarea::where('proyecto_id', '=', $estudiante->proyecto_id)->where('estatus', '=', 2)->get();

        $porcentaje = 0;

        for ($i = 0; $i < count($tareasTerminadas); $i++) {

            $porcentaje += $tareasTerminadas[$i]->porcentaje;
        }

        return View::make('tareas/finalizarTareas', array('tareas' => $tareas, 'tareasPendientes' => $tareasPendientes, 'tareasTerminadas' => $tareasTerminadas, 'porcentaje' => $porcentaje));
    });*/


    Route::get('validarTarea/{id}', 'TareasController@validarTarea');
    Route::get('eliminarTarea/{id}', 'TareasController@eliminarTarea');

    Route::get('subirBeca', function () {
        $id = Session::get('id');
        $becax = Beca::where('estudiante_id', '=', $id)->get();
        //return ($beca);
        return View::make('becas/subirBeca')->with('becax', $becax);
    });

    Route::post('uploadBeca', 'BecasController@uploadBeca');


    Route::get('eliminarBeca/{id}', 'BecasController@eliminarBeca');
    Route::get('descargarSolicitudEstudiante/{id}', 'BecasController@descargarSolicitudEstudiante');
    Route::get('descargarCURPEstudiante/{id}', 'BecasController@descargarCURPEstudiante');
    Route::get('descargarIFEEstudiante/{id}', 'BecasController@descargarIFEEstudiante');
    Route::get('descargarPrestacionEstudiante/{id}', 'BecasController@descargarPrestacionEstudiante');
    Route::get('descargarAceptacionEstudiante/{id}', 'BecasController@descargarAceptacionEstudiante');

});

//Grupo de rutas para Administrador [FILTRO]
Route::group(array('before' => 'sessionAdministrador'), function () {

    Route::get('cuentasAdministradores', function () {
        $cuentas = Administrador::all();
        return View::make('administradores/cuentasAdministradores')->with('cuentas', $cuentas);
    });

    Route::get('nuevoAdministrador', function () {
        return View::make('administradores/nuevoAdministrador');
    });

    Route::get('editarProyectos', function () {
        $proyectos = Proyecto::where('estatus', '=', 0)->get();
        return View::make('proyectos/editarProyectos')->with('proyectos', $proyectos);
    });

    Route::get('aprobarEstudiantes/{id}', 'EstudiantesController@aprobarEstudiante');

    Route::get('rechazarEstudiantes/{id}', 'EstudiantesController@rechazarEstudiante');

    Route::get('administrarEstudiantes', function () {
        $estudiantes = Estudiante::where('estatus', '=', 1)->get();
        return View::make('estudiantes/administrarEstudiantes')->with('estudiantes', $estudiantes);
    });

    Route::get('validarEstudiantes', function () {
        $estudiantes = Estudiante::where('estatus', '=', 0)->get();
        return View::make('estudiantes/validarEstudiantes')->with('estudiantes', $estudiantes);
    });

    Route::get('nuevoProyecto', function () {
        $perfiles = Perfil::all();
        return View::make('proyectos/nuevoProyecto')->with('perfiles', $perfiles);
    });

    Route::get('aprobarProyectos', function () {
        $estudiantes = Estudiante::where('proyecto_id', '!=', 0)->where('estatusProyecto', '=', 0)->get();
        return View::make('estudiantes/aprobarProyecto')->with('estudiantes', $estudiantes);
    });

    Route::get('aprobarProyectoEstudiante/{id}', 'EstudiantesController@aprobarProyecto');

    Route::get('rechazarProyectoEstudiante/{id}', 'EstudiantesController@rechazarProyecto');

    Route::get('eliminarActividad/{id}', 'ActividadesController@eliminarActividad');

    Route::get('validarTareas', function () {

        $tareas = Tarea::where('estatus', '=', 1)->get();
        return View::make('tareas/validarTareas')->with('tareas', $tareas);
    });

    Route::get('aprobarTarea/{id}', 'TareasController@aprobarTarea');
    Route::get('rechazarTarea/{id}', 'TareasController@rechazarTarea');

    Route::get('avanceProyectos', function () {

        $proyectos = Proyecto::all();
        $tareas = Tarea::all();
        //$tareas = Tarea::where('estatus', '=', 2)->get();

        $porcentaje = 0;
        for ($i = 0; $i < count($proyectos); $i++) {
            for ($j = 0; $j < count($tareas); $j++) {
                if (($tareas[$j]->proyecto_id == $proyectos[$i]->id) && ($tareas[$j]->estatus == 2)) {
                    $porcentaje += $tareas[$j]->porcentaje;
                }
            }
            $proyecto = Proyecto::find($proyectos[$i]->id);
            $proyecto->porcentaje = $porcentaje;
            $proyecto->save();
            $porcentaje = 0;
        }
        $proyectosAvance = Proyecto::all();
        return View::make('proyectos/avanceProyectos')->with('proyectosAvance', $proyectosAvance);

    });

    Route::get('consultarBecas', array('before' => 'becasNulo', function () {
        $becas = Beca::all();
        return View::make('becas/consultarBecas')->with('becas', $becas);
    }));

    Route::get('descargarSolicitud/{id}', 'BecasController@descargarSolicitud');
    Route::get('descargarCURP/{id}', 'BecasController@descargarCURP');
    Route::get('descargarIFE/{id}', 'BecasController@descargarIFE');
    Route::get('descargarPrestacion/{id}', 'BecasController@descargarPrestacion');
    Route::get('descargarAceptacion/{id}', 'BecasController@descargarAceptacion');
    Route::get('eliminarExpediente/{id}', 'BecasController@eliminarExpediente');

    Route::get('administrarPerfiles', function () {
        $perfiles = Perfil::all();
        return View::make('perfiles/administrarPerfiles')->with('perfiles', $perfiles);
    });

    Route::get('finalizarProyecto/{id}', 'ProyectosController@finalizarProyecto');


});


Route::get('api/perfilesApi', function () {
    $perfiles = Perfil::all();
    return (array('uses' => $perfiles));
});


// Inicio de rutas creadas por porfirio
Route::resource('dispositivos', 'DispositivoController');
Route::resource('inventarios', 'InventarioController');
Route::resource('prestamos', 'PrestamoController');
Route::get('crearInventario', 'InventarioController@crear_inventario');
Route::get('administrarInventario',
    'InventarioController@administrar_inventario');
Route::get('crearPrestamo', 'PrestamoController@crear_prestamo');
Route::get('misSolicitudes', 'PrestamoController@ver_mis_solicitudes');
Route::get('administrarSolicitudes',
    'PrestamoController@administrar_solicitudes');
Route::put('/aprobar/{id}', ['as' => 'prestamos.aprobar',
    'uses' => 'PrestamoController@aprobar']);
Route::put('/rechazar/{id}', ['as' => 'prestamos.rechazar',
    'uses' => 'PrestamoController@rechazar']);
Route::put('/devolver/{id}', ['as' => 'prestamos.devolver',
    'uses' => 'PrestamoController@marcar_devuelto']);
Route::get('verPrestamo/{id}', 'PrestamoController@ver_detalles');
// Fin de rutas creadas por porfirio