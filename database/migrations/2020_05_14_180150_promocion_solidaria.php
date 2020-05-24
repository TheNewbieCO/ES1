<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PromocionSolidaria extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('promocion_solidaria', function (Blueprint $table) {
            $table->bigIncrements('id_promocion');
            $table->string('titulo', 40);
            $table->string('descripcion', 240);
            $table->string('imagen');
            $table->integer('id_usuempresa');
            $table->integer('id_pais');
            $table->string('tematica');
            $table->integer('cant_donada');
            $table->dateTime('fecha_desde');
            $table->dateTime('fecha_hasta');
            $table->dateTime('fecha_alta');
            $table->string('estado',2);
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
        Schema::dropIfExists('promocion_solidaria');
    }
}
