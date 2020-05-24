<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TransferenciaAutofactura extends Migration
{
    public function up()
    {
        Schema::create('transferencia_autofactura', function (Blueprint $table) {
            $table->bigIncrements('id_transautofac');
            $table->integer('id_usuario');
            $table->integer('pago_total');
            $table->integer('pago_concoste');
            $table->string('cuenta_bancaria', 40);
            $table->integer('id_pais');
            $table->dateTime('fecha');
        });
    }

    public function down()
    {
        Schema::dropIfExists('transferencia_autofactura');
    }
}
