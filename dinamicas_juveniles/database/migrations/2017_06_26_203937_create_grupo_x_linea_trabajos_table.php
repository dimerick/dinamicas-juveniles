<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGrupoXLineaTrabajosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('grupo_x_linea_trabajo', function(Blueprint $table)
		{
            $table->unsignedInteger('id_grupo');
            $table->unsignedInteger('id_linea_trabajo');
            $table->primary(['id_grupo', 'id_linea_trabajo']);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('grupo_x_linea_trabajo');
	}

}
