<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ForeignKeyGrupoXCondicionDificultad extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('grupo_x_condicion_dificultad', function(Blueprint $table)
		{
            $table->foreign('id_grupo')->references('id')->on('grupo');
            $table->foreign('id_condicion_dificultad')->references('id')->on('condicion_dificultad');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('grupo_x_condicion_dificultad', function(Blueprint $table)
		{
            $table->dropForeign(['id_grupo']);
            $table->dropForeign(['id_condicion_dificultad']);
		});
	}

}
