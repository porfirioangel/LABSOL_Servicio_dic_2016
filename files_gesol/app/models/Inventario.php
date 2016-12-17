<?php

/**
 * Este es el modelo para la tabla 'inventarios'
 * User: porfirio
 * Date: 7/18/16
 * Time: 6:35 PM
 */
class Inventario extends \Eloquent
{
    /*
    * The database table used by the model.
    *
    * @var string
    */
    protected $table = 'inventarios';

    /**
     * Devuelve el dispositivo al cual este inventario pertenece.
     */
    public function getDispositivo()
    {
        return $this->belongsTo('Dispositivo');
    }
}