<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRelacionXAspectoFomentoRelacionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('relacion_x_aspecto_fomento_relacion', function(Blueprint $table)
		{
            $table->increments('id');
		    $table->unsignedInteger('id_relacion');
            $table->unsignedInteger('id_asp_fom_rel');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('relacion_x_aspecto_fomento_relacion');
	}

}
