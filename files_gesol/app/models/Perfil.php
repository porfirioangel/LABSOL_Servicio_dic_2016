<?php

class Perfil extends \Eloquent {
	protected $fillable = [];
	protected $table = 'perfiles';

	public function estudiantes(){

		return $this->hasMany('Estudiante');
	}

	public function proyectos(){

		return $this->belongsToMany('Proyecto');
	}
	
	
}