<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ForeignKeyRelacionXLugarRelacion extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('relacion_x_lugar_relacion', function(Blueprint $table)
		{
            $table->foreign('id_relacion')->references('id')->on('relacion');
            $table->foreign('id_lugar_relacion')->references('id')->on('lugar_relacion');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('relacion_x_lugar_relacion', function(Blueprint $table)
		{
            $table->dropForeign(['id_relacion']);
            $table->dropForeign(['id_lugar_relacion']);
		});
	}

}
