<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Paises extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paises', function (Blueprint $table) {
            $table->bigIncrements('id_pais');
            $table->string('codISO', 2)->unique();
            $table->string('nombre', 80);
            $table->string('moneda', 20);
            $table->string('idioma', 20);
            $table->integer('cant_impdirecto')->nullable();
            $table->integer('cant_impindirecto')->nullable();
            $table->integer('coste_recibo')->nullable();
            $table->integer('coste_tranferencia')->nullable();
            $table->string('minima_promo',10)->nullable();
            $table->string('dat_gestoraFactura',400)->nullable();
            $table->string('gestor_pais',2)->nullable();
            $table->integer('gasto_enviosello')->nullable();
            $table->dateTime('fecha_alta');
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
        Schema::dropIfExists('paises');
    }
}