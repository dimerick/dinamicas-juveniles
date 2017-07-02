<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRelacionActorXMotivosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relacion_actor_x_motivo', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_relacion_actor');
            $table->unsignedInteger('id_motivo_relacion');
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
        Schema::drop('relacion_actor_x_motivo');
    }
}
