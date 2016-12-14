<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBecasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('becas', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('perfil');
			$table->string('cartaSolicitud');
			$table->string('curp');
			$table->string('ife');
			$table->string('cartaPrestacion');
			$table->string('cartaAceptacion');
			$table->integer ('estudiante_id');
			$table->string ('periodo');
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
		Schema::drop('becas');
	}

}
