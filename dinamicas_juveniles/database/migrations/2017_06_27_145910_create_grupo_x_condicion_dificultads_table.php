<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGrupoXCondicionDificultadsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('grupo_x_condicion_dificultad', function(Blueprint $table)
		{
            $table->increments('id');
            $table->unsignedInteger('id_grupo');
            $table->unsignedInteger('id_condicion_dificultad');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('grupo_x_condicion_dificultad');
	}

}
