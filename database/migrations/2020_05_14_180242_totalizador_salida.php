<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TotalizadorSalida extends Migration
{
    public function up()
    {
        Schema::create('totalizador_salida', function (Blueprint $table) {
            $table->bigIncrements('id_transsalida');
            $table->integer('id_tipousu');
            $table->integer('nombre_usu');
            $table->integer('id_entidad');
            $table->integer('donaciones');
            $table->integer('cuotas');
            $table->integer('total_qrs');
            $table->integer('incentivos');
            $table->integer('total_aportaciones');
            $table->integer('id_usucapta');
            $table->integer('id_usucontrata');
            $table->integer('id_supervisora');
            $table->integer('id_gestorpais'); 
            $table->integer('id_orgcentral');
            $table->integer('gestion');
            $table->integer('id_pais');
            $table->integer('total_transferencia');
            $table->dateTime('fecha');
        });
    }

    public function down()
    {
        Schema::dropIfExists('totalizador_salida');
    }
}