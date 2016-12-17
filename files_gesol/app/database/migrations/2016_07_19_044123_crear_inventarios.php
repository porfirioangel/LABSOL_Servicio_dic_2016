<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearInventarios extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventarios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('num_serie', 100)->unique();
            $table->string('reg_labsol', 100)->unique();
            $table->date('fecha_adquisicion');
            $table->integer('dispositivo_id')->unsigned();
            $table->foreign('dispositivo_id')->references('id')->on
            ('dispositivos');
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
        Schema::drop('inventarios');
    }

}
