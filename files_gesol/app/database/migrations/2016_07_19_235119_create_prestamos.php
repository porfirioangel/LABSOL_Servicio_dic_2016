<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrestamos extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestamos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('estudiante_id')->unsigned();
            $table->integer('inventario_id')->unsigned();
            $table->date('fecha_solicitud');
            $table->date('fecha_aprobacion')->nullable();
            $table->date('fecha_devolucion')->nullable();
            $table->foreign('estudiante_id')->references('id')->on
            ('estudiantes');
            $table->foreign('inventario_id')->references('id')->on
            ('inventarios');
            $table->unique(array('estudiante_id', 'inventario_id',
                'fecha_solicitud'));
            $table->integer('status_prestamo_id')->unsigned();
            $table->foreign('status_prestamo_id')->references('id')->on
            ('status_prestamo');
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
        Schema::drop('prestamos');
    }

}
