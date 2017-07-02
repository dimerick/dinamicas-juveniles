<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGrupoXGrupoPoblacionalsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('grupo_x_grupo_poblacional', function(Blueprint $table)
		{
            $table->unsignedInteger('id_grupo');
            $table->unsignedInteger('id_grupo_pob');
            $table->integer('cantidad');
            $table->primary(['id_grupo', 'id_grupo_pob']);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('grupo_x_grupo_poblacional');
	}

}
