<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TemasEntidad extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temas_entidad', function (Blueprint $table) {
            $table->bigIncrements('id_temaEnt');
            $table->string('tema_nombre', 80);
            $table->integer('id_pais');
            $table->string('estado',2);
            $table->dateTime('fecha_alta');
            $table->dateTime('fecha_modificacion')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('temas_entidad');
    }
}
