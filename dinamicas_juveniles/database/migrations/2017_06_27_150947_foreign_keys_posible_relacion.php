<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ForeignKeysPosibleRelacion extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('posible_relacion', function(Blueprint $table)
		{
            $table->foreign('id_grupo')->references('id')->on('grupo');
            $table->foreign('id_medio')->references('id')->on('medio_relacion');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('posible_relacion', function(Blueprint $table)
		{
            $table->dropForeign(['id_grupo']);
            $table->dropForeign(['id_medio']);
		});
	}

}
