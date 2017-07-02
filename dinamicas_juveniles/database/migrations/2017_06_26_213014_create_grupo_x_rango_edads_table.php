<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGrupoXRangoEdadsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('grupo_x_rango_edad', function(Blueprint $table)
		{
            $table->unsignedInteger('id_grupo');
            $table->unsignedInteger('id_rango_edad');
            $table->integer('cantidad');
            $table->primary(['id_grupo', 'id_rango_edad']);

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('grupo_x_rango_edad');
	}

}
