<?php

class Actividad extends \Eloquent {
	protected $fillable = [];
	protected $table = 'actividades';

	public function proyecto(){

		return $this->belongsTo('Proyecto');
	}

	//En estos casos creo que la funcion no es necesaria. 
	public function delete()
    {
        return parent::delete();
    }

	
}