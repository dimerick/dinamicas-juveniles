<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ForeignKeyIncidente extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('incidente', function(Blueprint $table)
		{
            $table->foreign('id_categoria')->references('id')->on('categoria');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('incidente', function(Blueprint $table)
		{
            $table->dropForeign(['id_categoria']);
		});
	}

}
