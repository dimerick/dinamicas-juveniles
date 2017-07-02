<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persona', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->date('fecha_nac');
            $table->unsignedInteger('id_genero');
            $table->unsignedInteger('id_nivel_educ');
            $table->unsignedInteger('id_grupo_pob');
            $table->string('email');
            $table->string('telefono');
            $table->unsignedInteger('id_comuna');
            $table->string('barrio');
            $table->string('rol');
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
        Schema::drop('persona');
    }
}
