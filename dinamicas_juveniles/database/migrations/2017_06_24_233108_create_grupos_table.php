<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGruposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grupo', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_encargado');
            $table->string('nombre');
            $table->unsignedInteger('num_integrantes');
            $table->unsignedInteger('id_comuna');
            $table->string('barrio');
            $table->string('otra_linea_trabajo')->nullable();
            $table->unsignedInteger('id_tiempo_inicio');
            $table->string('telefono');
            $table->string('email');
            $table->string('direccion');
            $table->string('facebook');
            $table->string('twitter');
            $table->string('instagram');
            $table->text('frec_reuniones');
            $table->text('actividades');
            $table->text('proyeccion');
            $table->text('actor_relacion');//actor o institucion con el que establecen mayor relacion
            $table->text('acciones_juntos');//acciones que han realizado las 2 organizaciones
            $table->boolean('apoyo_financiero');
            $table->boolean('apoyo_tec_logi');//apoyo tecnico logistico
            $table->boolean('apoyo_humano');
            $table->string('otro_apoyo')->nullable();
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
        Schema::drop('grupo');
    }
}
