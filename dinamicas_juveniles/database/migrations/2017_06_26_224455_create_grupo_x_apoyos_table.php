<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGrupoXApoyosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('grupo_x_apoyo', function(Blueprint $table)
		{
            $table->unsignedInteger('id_grupo');
            $table->unsignedInteger('id_apoyo');
            $table->primary(['id_grupo', 'id_apoyo']);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('grupo_x_apoyo');
	}

}
