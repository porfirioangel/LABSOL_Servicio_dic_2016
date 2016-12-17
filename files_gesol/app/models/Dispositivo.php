<?php

//use \Illuminate\Database\Eloquent;

/**
 * Este es el modelo para la tabla 'inventarios'
 * User: porfirio
 * Date: 7/18/16
 * Time: 6:17 PM
 */
class Dispositivo extends \Eloquent
{
    /*
    * The database table used by the model.
    *
    * @var string
    */
    protected $table = 'dispositivos';

    /**
     * Devuelve los inventarios en el inventario que corresponden a este
     * tipo de dispositivo.
     */
    public function getInventario()
    {
        return $this->hasMany('Inventario', 'dispositivo_id');
    }
}