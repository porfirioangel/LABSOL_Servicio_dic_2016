<?php

class Proyecto extends \Eloquent {
	protected $fillable = [];
	protected $table = 'proyectos';

	public function estudiantes(){

		return $this->hasMany('Estudiante');
	}

	public function actividades(){

		return $this->hasMany('Actividad');
	}

	public function tareas(){

		return $this->hasMany('Tarea');
	}

	public function perfiles(){

		return $this->belongsToMany('Perfil');
	}

	public function delete()
    {
    	$this->actividades()->delete();
        $this->perfiles()->detach();
        return parent::delete();
    }


	
}