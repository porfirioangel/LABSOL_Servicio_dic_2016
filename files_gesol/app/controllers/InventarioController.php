<?php

/**
 * Created by PhpStorm.
 * User: porfirio
 * Date: 7/19/16
 * Time: 8:57 AM
 */
class InventarioController extends \BaseController
{
    private $messages = null;
    private $rules = null;

    public function __construct()
    {
        $this->rules = array(
            'num_serie' => 'required|unique:inventarios',
            'reg_labsol' => 'required|unique:inventarios',
            'fecha_adquisicion' => 'required',
            'tipo_dispositivo' => 'NotIn:Otro'
        );

        $this->messages = array(
            'num_serie.required' => 'Debes insertar el número de serie.',
            'reg_labsol.required' => 'Debes insertar el registro LABSOL.',
            'fecha_adquisicion.required' => 'Debes seleccionar la fecha de 
            adquisición',
            'num_serie.unique' => 'El número de serie indicado ya se encuentra
             en uso',
            'reg_labsol.unique' => 'El registro LABSOL indicado ya se encuentra
             en uso'
        );
    }

    public function administrar_inventario()
    {
        $inventarios = Inventario::All()->sortBy("num_serie");
        return View::make('inventarios/administrarInventarios')->with
        ('inventarios', $inventarios);
    }

    public function crear_inventario()
    {
        $tiposDispositivo = Dispositivo::all();
        return View::make('inventarios/nuevoInventario')->with('tiposDispositivo',
            $tiposDispositivo);
    }

    /**
     * Show the form for editing the specified resource.
     * GET /inventarios/{id}/edit
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        $tiposDispositivo = Dispositivo::all();
        $inventario = Inventario::find($id);
        return View::make('inventarios.editarInventario')->with(array
        ('inventario' => $inventario, 'tiposDispositivo' => $tiposDispositivo));
    }

    /**
     * Update the specified resource in storage.
     * PUT /inventarios/{id}
     */
    public function update($id)
    {
        $validator = Validator::make(Input::all(), $this->rules($id),
            $this->messages);

        if ($validator->fails()) {
            return Redirect::to('http://localhost:8000/inventarios/' . $id
                . '/edit')->withErrors($validator);
        } else {
            $inventario = Inventario::find($id);
            $dispositivo_id = DB::table('dispositivos')->where('nombre', Input::get
            ('tipo_dispositivo'))->pluck('id');
            $inventario->num_serie = Input::get('num_serie');
            $inventario->reg_labsol = Input::get('reg_labsol');
            $inventario->fecha_adquisicion = Input::get('fecha_adquisicion');
            $inventario->dispositivo_id = $dispositivo_id;
            $inventario->save();
            return Redirect::to('administrarInventario');
        }
    }

    public function store()
    {
        $validator = Validator::make(Input::all(), $this->rules(),
            $this->messages);

        if ($validator->fails()) {
            return Redirect::to('crearInventario')->withErrors($validator);
        } else {
            $dispositivo_id = DB::table('dispositivos')->where('nombre', Input::get
            ('tipo_dispositivo'))->pluck('id');
            $inventario = new Inventario();
            $inventario->num_serie = Input::get('num_serie');
            $inventario->reg_labsol = Input::get('reg_labsol');
            $inventario->fecha_adquisicion = Input::get('fecha_adquisicion');
            $inventario->dispositivo_id = $dispositivo_id;
            $inventario->save();
            return Redirect::to('administrarInventario');
        }
    }

    /**
     * Funcion que elimina de la base de datos el dispositivo del inventario
     * con el id proporcionado, el cual fue enviado en el formulario a traves
     * del metodo DELETE.
     */
    public function destroy($id)
    {
        $prestamos = DB::table('prestamos')
            ->where('inventario_id', $id)
            ->get();

        foreach ($prestamos as $prestamo) {
            $item = Prestamo::find($prestamo->id);
            $item->delete();
        }

        $inventario = Inventario::find($id);
        $inventario->delete();
        return Redirect::to('administrarInventario');
    }

    /**
     * Funcion que muestra las caracteristicas de un dispositivo en el
     * inventario, el cual contiene un join con la tabla 'dispositivos'
     */
    public function show($id)
    {
        $inv_join_disp = DB::table('inventarios AS inv')
            ->join('dispositivos AS dis', 'dis.id', '=', 'inv.dispositivo_id')
            ->join('status_prestamo AS stp', 'stp.id', '=',
                'inv.status_prestamo_id')
            ->where('inv.id', '=', $id)
            ->select('dis.id', 'inv.num_serie', 'inv.reg_labsol',
                'inv.fecha_adquisicion', 'stp.descripcion AS status_prestamo',
                'dis.nombre')->first();

        return View::make('inventarios.verInventario')->with('inv_join_disp',
            $inv_join_disp);
    }

    public function rules($id = '')
    {
        $rules = array(
            'num_serie' => 'required|unique:inventarios',
            'reg_labsol' => 'required|unique:inventarios',
            'fecha_adquisicion' => 'required',
            'tipo_dispositivo' => 'NotIn:Otro'
        );

        if (!empty($id)) {
            $rules['num_serie'] .= ',num_serie,' . $id . ',id';
            $rules['reg_labsol'] .= ',reg_labsol,' . $id . ',id';
        }

        return $rules;
    }
}