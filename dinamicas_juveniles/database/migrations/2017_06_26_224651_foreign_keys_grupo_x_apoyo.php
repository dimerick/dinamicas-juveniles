<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ForeignKeysGrupoXApoyo extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('grupo_x_apoyo', function(Blueprint $table)
		{
            $table->foreign('id_grupo')->references('id')->on('grupo');
            $table->foreign('id_apoyo')->references('id')->on('apoyo');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('grupo_x_apoyo', function(Blueprint $table)
		{
            $table->dropForeign(['id_grupo']);
            $table->dropForeign(['id_apoyo']);
		});
	}

}
