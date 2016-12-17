<?php

/**
 * Created by PhpStorm.
 * User: porfirio
 * Date: 7/19/16
 * Time: 8:57 AM
 */
class DispositivoController extends \BaseController
{
    private $rules = null;
    private $messages = null;

    public function __construct()
    {
        $this->rules = array(
            'nombre' => 'required|unique:dispositivos',
            'descripcion' => 'required'
        );

        $this->messages = array(
            'required' => 'El campo ":attribute" es obligatorio',
            'unique' => 'El valor de ":attribute" ya se encuentra en uso'
        );
    }

    /**
     * Funcion que guarda el dispositivo creado, el cual fue enviado en el
     * formulario a traves del metodo POST.
     */
    public function store()
    {
        $validator = Validator::make(Input::all(), $this->rules, $this->messages);

        if ($validator->fails()) {
            return Redirect::to('crearInventario')->withErrors($validator);
        } else {
            $dispositivo = new Dispositivo();
            $dispositivo->url_imagen = 'no_url';
            $dispositivo->nombre = Input::get('nombre');
            $dispositivo->descripcion = Input::get('descripcion');
            $dispositivo->save();
            return Redirect::to('crearInventario');
        }
    }
}