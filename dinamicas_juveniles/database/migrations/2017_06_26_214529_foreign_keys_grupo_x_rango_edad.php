<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ForeignKeysGrupoXRangoEdad extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('grupo_x_rango_edad', function(Blueprint $table)
		{
            $table->foreign('id_grupo')->references('id')->on('grupo');
            $table->foreign('id_rango_edad')->references('id')->on('rango_edad');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('grupo_x_rango_edad', function(Blueprint $table)
		{
            $table->dropForeign(['id_grupo']);
            $table->dropForeign(['id_rango_edad']);
		});
	}

}
