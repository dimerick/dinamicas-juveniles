<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePosibleRelacionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('posible_relacion', function(Blueprint $table)
		{
            $table->increments('id');
            $table->unsignedInteger('id_grupo');
            $table->string('nombre');
            $table->text('proposito');
            $table->unsignedInteger('id_medio');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('posible_relacion');
	}

}
