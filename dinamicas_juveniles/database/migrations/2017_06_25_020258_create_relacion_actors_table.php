<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRelacionActorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relacion_actor', function (Blueprint $table) {
            $table->increments('id');
            $table->string('actor_relacion');
            $table->text('acciones');
            $table->unsignedInteger('id_lugar_accion');
            $table->unsignedInteger('id_tiempo_inicio');
            $table->unsignedInteger('id_frecuencia');
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
        Schema::drop('relacion_actor');
    }
}
