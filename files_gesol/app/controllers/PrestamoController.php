<?php

/**
 * Created by PhpStorm.
 * User: porfirio
 * Date: 7/19/16
 * Time: 8:58 AM
 */
class PrestamoController extends \BaseController
{
    private $rules;
    private $messages;
    private $disponible_id;
    private $aceptado_id;
    private $rechazado_id;
    private $devuelto_id;
    private $pendiente_id;

    public function __construct()
    {
        $this->rules = array(
            'tipo_dispositivo' => 'NotIn:Seleccionar',
            'num_serie' => 'NotIn:Seleccionar'
        );

        $this->messages = array();

        $this->disponible_id = $this->getStatusId('disponible');
        $this->aceptado_id = $this->getStatusId('aceptado');
        $this->rechazado_id = $this->getStatusId('rechazado');
        $this->devuelto_id = $this->getStatusId('devuelto');
        $this->pendiente_id = $this->getStatusId('pendiente');
    }

    /**
     * Metodo llamado para almacenar un nuevo prestamo realizado por un
     * estudiante.
     */
    public function store()
    {
        $validator = Validator::make(Input::all(), $this->rules,
            $this->messages);

        if ($validator->fails()) {
            return Redirect::to('crearPrestamo')->withErrors($validator);
        } else {
            $inventario_id = DB::table('inventarios')->where('num_serie',
                Input::get('num_serie'))->first()->id;
            $prestamo = new Prestamo();
            $prestamo->estudiante_id = Session::get('id');
            $prestamo->inventario_id = $inventario_id;
            $prestamo->fecha_solicitud = Carbon\Carbon::now();
            $prestamo->status_prestamo_id = $this->pendiente_id;
            $prestamo->save();
            $inventario = Inventario::find($inventario_id);
            $inventario->status_prestamo_id = $this->pendiente_id;
            $inventario->save();
            return Redirect::to('misSolicitudes');
        }
    }

    /**
     * Actualiza la informacion del prestamo con el id dado, este metodo es
     * llamado a traves del panel de administracion de solicitudes para los
     * ESTUDIANTES.
     */
    public function update($id)
    {
        $prestamo = Prestamo::find($id);
        $inventario = Inventario::find($prestamo->inventario_id);
        $prestamo->status_prestamo_id = $this->disponible_id;
        $inventario->status_prestamo_id = $this->disponible_id;
        $prestamo->delete();
        $inventario->save();
        return Redirect::to('misSolicitudes');
    }

    /**
     * Aprueba el prestamo pendiente con el id dado.
     * @param $prestamo_id Es el id del prestamo que se va a aprobar.
     */
    public function aprobar($prestamo_id)
    {
        $prestamo = Prestamo::find($prestamo_id);
        $prestamo->status_prestamo_id = $this->aceptado_id;
        $prestamo->fecha_aprobacion = Carbon\Carbon::now();
        $prestamo->save();
        $inventario = Inventario::find($prestamo->inventario_id);
        $inventario->status_prestamo_id = $this->aceptado_id;
        $inventario->save();
        return Redirect::to('administrarSolicitudes');
    }

    /**
     * Rechaza el prestamo pendiente con el id dado.
     * @param $prestamo_id Es el id del prestamo que se va a rechazar.
     */
    public function rechazar($prestamo_id)
    {
        $prestamo = Prestamo::find($prestamo_id);
        $prestamo->status_prestamo_id = $this->rechazado_id;
        $prestamo->save();
        $inventario = Inventario::find($prestamo->inventario_id);
        $inventario->status_prestamo_id = $this->disponible_id;
        $inventario->save();
        return Redirect::to('administrarSolicitudes');
    }

    /**
     * Marca como devuelto el dispositivo solicitado en el prestamo que
     * contiene el id dado.
     * @param $prestamo_id Es el id del prestamo que queremos marcar como
     * devuelto.
     */
    public function marcar_devuelto($prestamo_id)
    {
        $prestamo = Prestamo::find($prestamo_id);
        $prestamo->status_prestamo_id = $this->devuelto_id;
        $prestamo->fecha_devolucion = Carbon\Carbon::now();
        $prestamo->save();
        $inventario = Inventario::find($prestamo->inventario_id);
        $inventario->status_prestamo_id = $this->disponible_id;
        $inventario->save();
        return Redirect::to('administrarSolicitudes');
    }

    /**
     * Abre una pagina para ver los detalles de un prestamo en particular,
     * cuyo id se pasa como parametro.
     * @param $prestamo_id Es el id del prestamo que queremos visualizar.
     */
    public function ver_detalles($prestamo_id)
    {
        $prestamo = DB::table('estudiantes AS est')
            ->join('prestamos AS pre', 'est.id', '=', 'pre.estudiante_id')
            ->join('status_prestamo AS stp', 'stp.id', '=',
                'pre.status_prestamo_id')
            ->join('inventarios AS inv', 'inv.id', '=', 'pre.inventario_id')
            ->join('dispositivos AS dis', 'dis.id', '=', 'inv.dispositivo_id')
            ->select('inv.id AS inventario_id', 'inv.num_serie AS num_serie',
                'inv.reg_labsol AS reg_labsol',
                'dis.nombre AS tipo_dispositivo',
                DB::raw('CONCAT(nombres, " ", apellidos) AS estudiante'),
                'est.universidad AS escuela', 'stp.descripcion AS status',
                'pre.id AS prestamo_id',
                'pre.fecha_solicitud AS fecha_solicitud',
                'pre.fecha_aprobacion AS fecha_aprobacion',
                'pre.fecha_devolucion AS fecha_devolucion')
            ->where('pre.id', '=', $prestamo_id)
            ->orderBy('fecha_solicitud', 'desc')
            ->get()[0];

        return View::make('prestamos/detallePrestamo')->with('prestamo',
            $prestamo);
    }

    /**
     * Obtiene el id del status de prestamo, para el status que tiene la
     * descripcion dada.
     * @param $descripcion Es la descripcion del status cuyo id queremos
     * obtener.
     */
    private function getStatusId($descripcion)
    {
        return DB::table('status_prestamo')
            ->where('descripcion', $descripcion)->first()->id;
    }

    /**
     * Abre la pagina para solicitar un nuevo prestamo.
     */
    public function crear_prestamo()
    {
        // Tipos de dispositivo que cuentan con registros en el inventario y
        // que estan disponibles.
        $tipos_disponibles = DB::table('dispositivos')
            ->join('inventarios', 'dispositivos.id', '=',
                'inventarios.dispositivo_id')
            ->join('status_prestamo', 'status_prestamo.id', '=',
                'inventarios.status_prestamo_id')
            ->where('status_prestamo.descripcion', '=', 'disponible')
            ->select('dispositivos.id', 'dispositivos.nombre')
            ->distinct()
            ->get();

        // Dispositivos del inventario que estan disponibles, agrupados por
        // tipo de dispositivo.
        $disponibles_inventario = array();

        foreach ($tipos_disponibles as $disp) {
            $disponibles_inventario[$disp->nombre] =
                DB::table('dispositivos')
                    ->join('inventarios', 'dispositivos.id', '=',
                        'inventarios.dispositivo_id')
                    ->join('status_prestamo', 'status_prestamo.id', '=',
                        'inventarios.status_prestamo_id')
                    ->where('status_prestamo.descripcion', '=', 'disponible')
                    ->where('dispositivos.id', '=', $disp->id)
                    ->select('dispositivos.nombre', 'inventarios.id',
                        'inventarios.num_serie')
                    ->distinct()
                    ->get();
        }

        // Arreglo con los conjuntos de datos que se enviaran a la vista.
        $datos = array(
            'tipos_disponibles' => $tipos_disponibles,
            'disponibles_inventario' => $disponibles_inventario
        );

        return View::make('prestamos/nuevaSolicitud')->with('datos', $datos);
    }

    /**
     * Abre el panel para la visualizacion de las solicitudes de prestamo que
     * ha hecho el estudiante que actualmente tiene la sesion iniciada.
     */
    public function ver_mis_solicitudes()
    {
        $estudiante_id = Session::get('id');

        $solicitudes = DB::table('estudiantes AS est')
            ->join('prestamos AS pre', 'est.id', '=', 'pre.estudiante_id')
            ->join('status_prestamo AS sta', 'sta.id', '=',
                'pre.status_prestamo_id')
            ->join('inventarios AS inv', 'inv.id', '=', 'pre.inventario_id')
            ->join('dispositivos AS dis', 'dis.id', '=', 'inv.dispositivo_id')
            ->where('est.id', '=', $estudiante_id)
            ->select('pre.id AS prestamo_id', 'inv.num_serie AS num_serie',
                'inv.id AS inventario_id', 'dis.nombre AS dispositivo',
                'pre.fecha_solicitud AS fecha_solicitud',
                'sta.descripcion AS status_prestamo')
            ->orderBy('fecha_solicitud', 'desc')
            ->get();

        return View::make('prestamos/misSolicitudes')->with('solicitudes',
            $solicitudes);
    }

    /**
     * Abre el panel de administracion de las solicitudes que hacen los
     * estudiantes.
     */
    public function administrar_solicitudes()
    {
        $prestamos = DB::table('estudiantes AS est')
            ->join('prestamos AS pre', 'est.id', '=', 'pre.estudiante_id')
            ->join('status_prestamo AS sta', 'sta.id', '=',
                'pre.status_prestamo_id')
            ->join('inventarios AS inv', 'inv.id', '=', 'pre.inventario_id')
            ->join('dispositivos AS dis', 'dis.id', '=', 'inv.dispositivo_id')
            ->select('pre.id AS prestamo_id',
                'est.nombres AS nombres_estudiante',
                'est.apellidos AS apellidos_estudiante',
                'inv.num_serie AS num_serie',
                'inv.id AS inventario_id', 'dis.nombre AS dispositivo',
                'pre.fecha_solicitud AS fecha_solicitud',
                'sta.descripcion AS status_prestamo')
            ->orderBy('fecha_solicitud', 'desc')
            ->get();
        return View::make('prestamos/administrarSolicitudes')->with('prestamos',
            $prestamos);
    }
}