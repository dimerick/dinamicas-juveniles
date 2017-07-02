<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRelacionXLugarRelacionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('relacion_x_lugar_relacions', function(Blueprint $table)
		{
            $table->unsignedInteger('id_relacion');
            $table->unsignedInteger('id_lugar_relacion');
            $table->primary(['id_relacion', 'id_lugar_relacion']);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('relacion_x_lugar_relacions');
	}

}
