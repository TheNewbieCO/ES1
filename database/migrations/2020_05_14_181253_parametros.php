<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Parametros extends Migration
{
    public function up()
    {
        Schema::create('parametros', function (Blueprint $table) {
            $table->bigIncrements('id_parametro');
            $table->string('usuario_superadmin',60)->nullable();
            $table->string('password_superadmin')->nullable();
            $table->integer('comision_usucontrata')->nullable();
            $table->integer('comision_usugestor')->nullable();
            $table->integer('comision_captador')->nullable();
            $table->integer('comision_entidadsuper')->nullable();
            $table->integer('comision_agencental')->nullable();
            $table->string('dia_reclamacion')->nullable();
            $table->string('gestor_pais')->nullable();
            $table->string('organizacion_central')->nullable();
            $table->string('usuario_refCapta')->nullable();
            $table->dateTime('fecha_alta')->nullable();
            $table->dateTime('fecha_modificacion')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('parametros');
    }
}
