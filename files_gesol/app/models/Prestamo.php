<?php

use \Illuminate\Database\Eloquent;

/**
 * Este es el modelo para la tabla 'prestamos'
 * User: porfirio
 * Date: 7/19/16
 * Time: 12:02 AM
 */
class Prestamo extends \Eloquent
{
    /*
    * The database table used by the model.
    *
    * @var string
    */
    protected $table = 'prestamos';

    /**
     * Devuelve el dispositivo del inventario incluido en el prestamo.
     */
    public function getInventario()
    {
        return $this->belongsToMany('Inventario', 'prestamos');
    }

    /**
     * Devuelve el estudiante al cual le fue prestado algo.
     */
    public function getEstudiante()
    {
        return $this->belongsToMany('Estudiante', 'prestamos');
    }

    public function getStatusPrestamo()
    {
        return $this->hasMany('StatusPrestamo', 'status_prestamo_id');
    }
}