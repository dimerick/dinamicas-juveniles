<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ForeignKeysAdditionals extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('grupo', function(Blueprint $table)
		{
            $table->foreign('id_encargado')->references('id')->on('persona');
            $table->foreign('id_comuna')->references('id')->on('comuna');
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
            $table->dropForeign(['id_encargado']);
            $table->dropForeign(['id_comuna']);
		});
	}

}
