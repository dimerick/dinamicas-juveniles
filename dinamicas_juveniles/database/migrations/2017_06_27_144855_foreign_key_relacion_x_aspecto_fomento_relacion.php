<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ForeignKeyRelacionXAspectoFomentoRelacion extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('relacion_x_aspecto_fomento_relacion', function(Blueprint $table)
		{
            $table->foreign('id_relacion')->references('id')->on('relacion');
            $table->foreign('id_asp_fom_rel')->references('id')->on('aspecto_fomento_relacion');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('relacion_x_aspecto_fomento_relacion', function(Blueprint $table)
		{
            $table->dropForeign(['id_relacion']);
            $table->dropForeign(['id_asp_fom_rel']);
		});
	}

}
