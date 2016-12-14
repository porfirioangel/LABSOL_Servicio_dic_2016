<?php

class Tarea extends \Eloquent {
	protected $fillable = [];
	protected $table = 'tareas';

	public function estudiante(){

		return $this->belongsTo('Estudiante');
	}

	public function proyecto(){

		return $this->belongsTo('Proyecto');
	}

	
}