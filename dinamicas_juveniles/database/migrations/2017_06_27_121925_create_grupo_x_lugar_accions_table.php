<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGrupoXLugarAccionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('grupo_x_lugar_accion', function(Blueprint $table)
		{
            $table->unsignedInteger('id_grupo');
            $table->unsignedInteger('id_lugar_accion');
            $table->primary(['id_grupo', 'id_lugar_accion']);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('grupo_x_lugar_accion');
	}

}
