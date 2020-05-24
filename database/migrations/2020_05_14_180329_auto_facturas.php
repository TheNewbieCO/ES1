<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AutoFacturas extends Migration
{
    public function up()
    {
        Schema::create('autofactura', function (Blueprint $table) {
            $table->bigIncrements('id_autofactura');
            $table->integer('id_usugestor');
            $table->integer('base');
            $table->integer('impuesto_indirecto');            
            $table->integer('impuesto_directo');
            $table->integer('total_conImpuestos');
            $table->string('estado',25);
            $table->string('activo', 2);
            $table->integer('id_pais');
            $table->dateTime('fecha');
        });
    }

    public function down()
    {
        Schema::dropIfExists('autofactura');
    }
}