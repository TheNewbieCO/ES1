<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TransferenciaEntidades extends Migration
{
    public function up()
    {
        Schema::create('transferencia_entidad', function (Blueprint $table) {
            $table->bigIncrements('id_transferencia');
            $table->integer('id_entidad');
            $table->integer('donacion_total');
            $table->integer('donacion_concoste');
            $table->string('cuenta_bancaria', 40);
            $table->integer('id_pais');
            $table->dateTime('fecha');
        });
    }

    public function down()
    {
        Schema::dropIfExists('transferencia_entidad');
    }
}