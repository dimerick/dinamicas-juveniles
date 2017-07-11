<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ForeignKeysGrupo extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('grupo', function(Blueprint $table)
		{
            $table->foreign('id_dia_reunion')->references('id')->on('dia_reunion');
            $table->foreign('id_hora_reunion')->references('id')->on('hora_reunion');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('grupo', function(Blueprint $table)
		{
            $table->dropForeign(['id_dia_reunion']);
            $table->dropForeign(['id_hora_reunion']);
		});
	}

}
