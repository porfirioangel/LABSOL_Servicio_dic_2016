<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEstudiantesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('estudiantes', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nombres');
			$table->string('apellidos');
			$table->integer('edad');
			$table->date('fechaNacimiento');
			$table->integer('telefono');
			$table->integer('celular');
			$table->string('email')->unique();
			$table->string('contrasena');
			$table->char('sexo');
			$table->integer('codigoPostal');
			$table->string('direccion');
			$table->string('estado');
			$table->string('municipio');
			$table->string('universidad');
			$table->string('carrera');
			$table->string('matricula');
			$table->string('modalidad');
			$table->integer('grado');
			$table->double('promedio');
			$table->string('periodo');
			$table->integer('estatus');
			$table->integer('estatusProyecto');
			$table->integer('proyecto_id');
			$table->integer('perfil_id');
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('estudiantes');
	}

}
