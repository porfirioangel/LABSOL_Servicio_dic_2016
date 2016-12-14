<?php

/**
 * Este es el modelo para la tabla 'status_prestamo'
 * User: porfirio
 * Date: 7/19/16
 * Time: 11:39 PM
 */
class StatusPrestamo extends \Eloquent
{
    protected $table = 'status_prestamo';

    public function getPrestamos()
    {
        return $this->belongsTo('Prestamo');
    }
}