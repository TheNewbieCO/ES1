<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DonacionDirecta extends Migration
{
    public function up()
    {
        Schema::create('donacion_directa', function (Blueprint $table) {
            $table->bigIncrements('id_donacion');
            $table->integer('id_tipoUsu');
            $table->string('nombre',80);
            $table->string('referencia',30);
            $table->integer('cantidad_donada');
            $table->integer('id_tipopago');
            $table->string('activa',2);            
            $table->integer('id_pais');
            $table->dateTime('fecha_alta');
            $table->dateTime('fecha_modificacion')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('donacion_directa');
    }
}