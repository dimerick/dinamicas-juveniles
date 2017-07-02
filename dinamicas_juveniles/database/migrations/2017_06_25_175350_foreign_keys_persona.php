<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ForeignKeysPersona extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('persona', function (Blueprint $table) {
            $table->foreign('id_genero')->references('id')->on('genero');
            $table->foreign('id_nivel_educ')->references('id')->on('nivel_educativo');
            $table->foreign('id_grupo_pob')->references('id')->on('grupo_poblacional');
            $table->foreign('id_comuna')->references('id')->on('comuna');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('persona', function (Blueprint $table) {
            $table->dropForeign(['id_genero']);
            $table->dropForeign(['id_nivel_educ']);
            $table->dropForeign(['id_grupo_pob']);
            $table->dropForeign(['id_comuna']);
        });
    }
}
