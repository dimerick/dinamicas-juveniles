<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIncidentesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('incidente', function(Blueprint $table)
		{
			$table->increments('id');
            $table->unsignedInteger('id_categoria');
            $table->date('fecha');
            $table->string('latitud');
            $table->string('longitud');
            $table->text('detalle');
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
		Schema::drop('incidente');
	}

}
