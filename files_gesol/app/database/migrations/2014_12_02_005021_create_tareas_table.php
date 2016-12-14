<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTareasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tareas', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nombre');
			$table->integer('porcentaje');
			$table->integer('tiempo');
			$table->integer('estatus');
			$table->integer('proyecto_id');
			$table->integer('estudiante_id');
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
		Schema::drop('tareas');
	}

}
