<?php

class Beca extends \Eloquent {
	protected $fillable = [];
	protected $table = 'becas';

	public function estudiante()
	{
		return $this->belongsTo('Estudiante');
	}
}