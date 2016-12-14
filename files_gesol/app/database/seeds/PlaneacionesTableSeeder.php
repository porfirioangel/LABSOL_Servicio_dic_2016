<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class PlaneacionesTableSeeder extends Seeder {

	public function run()
	{
		$paneacion1 = Planeacion::create(array(
			'porcentaje' => 10,
			'proyecto_id' => $proyecto1->id;
			));
	}

}