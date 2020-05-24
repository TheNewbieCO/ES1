<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TipoPagoDonacion extends Migration
{

    public function up()
    {
        Schema::create('tipo_pago_donacion', function (Blueprint $table) {
            $table->bigIncrements('id_tipopago');
            $table->string('tipopag_nombre', 30);
            $table->string('estado', 2);
            $table->integer('id_pais');
            $table->dateTime('fecha_alta');
            $table->dateTime('fecha_modificacion')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tipo_pago_donacion');
    }
}
