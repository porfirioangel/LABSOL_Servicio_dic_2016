<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ProyectosTableSeeder extends Seeder {

	public function run()
	{
		
		//Limpiar la tabla 
		DB::table('proyectos')->delete();

		$proyecto1 = Proyecto::create(array(


			'nombre'			=>	'proyecto 1',
			'dependencia'		=>	'labsol',
			'tipoProyecto'		=>	'software',
			'duracion'			=>	6,
			'numeroIntegrantes'	=>	4,
			'objetivo'			=>	'Objetivo proyecto 1',
			'descripcion'		=>	'Descripcion proyecto 1'

			));

		$proyecto2 = Proyecto::create(array(


			'nombre'			=>	'proyecto 2',
			'dependencia'		=>	'labsol',
			'tipoProyecto'		=>	'hardware',
			'duracion'			=>	9,
			'numeroIntegrantes'	=>	2,
			'objetivo'			=>	'Objetivo proyecto 2',
			'descripcion'		=>	'Descripcion proyecto 2'

			));

		$proyecto3 = Proyecto::create(array(


			'nombre'			=>	'proyecto 3',
			'dependencia'		=>	'cozcyt',
			'tipoProyecto'		=>	'redes',
			'duracion'			=>	4,
			'numeroIntegrantes'	=>	1,
			'objetivo'			=>	'objetivo proyecto 3',
			'descripcion'		=>	'descripcion proyecto 3'

			));

		$proyecto4 = Proyecto::create(array(


			'nombre'			=>	'proyecto 4',
			'dependencia'		=>	'gobierno',
			'tipoProyecto'		=>	'linux',
			'duracion'			=>	8,
			'numeroIntegrantes'	=>	3,
			'objetivo'			=>	'objetivo proyecto 4',
			'descripcion'		=>	'descripcion proyecto 4'

			));

		$proyecto5 = Proyecto::create(array(


			'nombre'			=>	'proyecto 5',
			'dependencia'		=>	'labsol',
			'tipoProyecto'		=>	'hardware',
			'duracion'			=>	5,
			'numeroIntegrantes'	=>	3,
			'objetivo'			=>	'objetivo proyecto 5',
			'descripcion'		=>	'descripcion proyecto 5'

			));

		$proyecto6 = Proyecto::create(array(


			'nombre'			=>	'proyecto 6',
			'dependencia'		=>	'gobierno',
			'tipoProyecto'		=>	'redes',
			'duracion'			=>	10,
			'numeroIntegrantes'	=>	5,
			'objetivo'			=>	'objetivo proyecto 6',
			'descripcion'		=>	'descripcion proyecto 6'

			));


		$proyecto7 = Proyecto::create(array(


			'nombre'			=>	'proyecto 7',
			'dependencia'		=>	'cozcyt',
			'tipoProyecto'		=>	'software',
			'duracion'			=>	9,
			'numeroIntegrantes'	=>	6,
			'objetivo'			=>	'objetivo proyecto 7',
			'descripcion'		=>	'descripcion proyecto 7'

			));

		$proyecto8 = Proyecto::create(array(


			'nombre'			=>	'proyecto 8',
			'dependencia'		=>	'intel',
			'tipoProyecto'		=>	'linux',
			'duracion'			=>	10,
			'numeroIntegrantes'	=>	9,
			'objetivo'			=>	'objetivo proyecto 8',
			'descripcion'		=>	'descripcion proyecto 8'

			));

		$proyecto9 = Proyecto::create(array(


			'nombre'			=>	'proyecto 9',
			'dependencia'		=>	'intel',
			'tipoProyecto'		=>	'hardware',
			'duracion'			=>	8,
			'numeroIntegrantes'	=>	4,
			'objetivo'			=>	'objetivo proyecto 9',
			'descripcion'		=>	'descripcion proyecto 9'

			));

		$proyecto10 = Proyecto::create(array(


			'nombre'			=>	'proyecto 10',
			'dependencia'		=>	'labsol',
			'tipoProyecto'		=>	'redes',
			'duracion'			=>	10,
			'numeroIntegrantes'	=>	9,
			'objetivo'			=>	'objetivo proyecto 10',
			'descripcion'		=>	'descripcion proyecto 10'

			));

	$this->command->info('El catalogo de proyectos esta listo!');


	}

}