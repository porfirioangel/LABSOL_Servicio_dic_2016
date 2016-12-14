<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProyectosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('proyectos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nombre');
			$table->string('dependencia');
			$table->string('tipoProyecto');
			$table->integer('duracion');
			$table->integer('numeroIntegrantes');
			$table->string('objetivo');
			$table->text('descripcion');
			$table->integer('porcentaje');
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
		Schema::drop('proyectos');
	}

}
