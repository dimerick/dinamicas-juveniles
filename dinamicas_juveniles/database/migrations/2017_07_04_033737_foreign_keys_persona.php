<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ForeignKeysPersona extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('persona', function(Blueprint $table)
		{
            $table->foreign('id_estado_civil')->references('id')->on('estado_civil');
            $table->foreign('id_barrio')->references('id')->on('barrio');
            $table->foreign('id_estrato')->references('id')->on('estrato');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('persona', function(Blueprint $table)
		{
            $table->dropForeign(['id_estado_civil']);
            $table->dropForeign(['id_barrio']);
            $table->dropForeign(['id_estrato']);
		});
	}

}
