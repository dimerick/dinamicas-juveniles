<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRelacionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('relacion', function(Blueprint $table)
		{
			$table->increments('id');
            $table->unsignedInteger('id_grupo');
            $table->string('actor');
            $table->text('acciones');
            $table->unsignedInteger('id_tiempo_relacion');
            $table->unsignedInteger('id_frecuencia_relacion');
            $table->unsignedInteger('id_estado_relacion');
            $table->unsignedInteger('id_medio_relacion');
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
		Schema::drop('relacion');
	}

}
