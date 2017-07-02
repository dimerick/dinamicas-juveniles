<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ForeignKeysRelacion extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('relacion', function(Blueprint $table)
		{
            $table->foreign('id_grupo')->references('id')->on('grupo');
            $table->foreign('id_tiempo_relacion')->references('id')->on('tiempo_inicio');
            $table->foreign('id_frecuencia_relacion')->references('id')->on('frecuencia_relacion');
            $table->foreign('id_estado_relacion')->references('id')->on('estado_relacion');
            $table->foreign('id_medio_relacion')->references('id')->on('medio_relacion');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('relacion', function(Blueprint $table)
		{
            $table->dropForeign(['id_grupo']);
            $table->dropForeign(['id_tiempo_relacion']);
            $table->dropForeign(['id_frecuencia_relacion']);
            $table->dropForeign(['id_estado_relacion']);
            $table->dropForeign(['id_medio_relacion']);
		});
	}

}
