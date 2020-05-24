<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RecibosEmpresas extends Migration
{
    public function up()
    {
        Schema::create('recibos_empresa', function (Blueprint $table) {
            $table->bigIncrements('id_recibo');
            $table->integer('id_empresa');
            $table->integer('donacion_total');
            $table->integer('donacion_concoste');
            $table->string('cuenta_bancaria', 40);
            $table->integer('id_pais');
            $table->dateTime('fecha');
            $table->string('devuelto',2);
        });
    }

    public function down()
    {
        Schema::dropIfExists('recibos_empresa');
    }
}