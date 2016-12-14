<?php

class Planeacion extends \Eloquent {
	protected $fillable = [];
	protected $table = 'planeaciones';

	public function proyecto(){

		return $this->belongsTo('Proyecto');
	}

	public function tareas(){

		return $this->hasMany('Tarea');
	}

	
}