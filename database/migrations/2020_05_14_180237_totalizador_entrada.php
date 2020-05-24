<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TotalizadorEntrada extends Migration
{
    public function up()
    {
        Schema::create('totalizador_entrada', function (Blueprint $table) {
            $table->bigIncrements('id_transentrante');
            $table->string('memo_cliente');
            $table->string('devuelto',2);
            $table->string('Cuota', 20);
            $table->integer('cant_compras');
            $table->integer('total_compras');
            $table->integer('total_donacion');
            $table->integer('id_pais');
            $table->integer('id_empresa');
            $table->dateTime('fecha'); 
        });
    }


    public function down()
    {
        Schema::dropIfExists('totalizador_entrada');
    }
}