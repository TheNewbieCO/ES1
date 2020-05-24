<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ComprasSolidarias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compras_solidarias', function (Blueprint $table) {
            $table->bigIncrements('id_compra');
            $table->integer('id_usuario');
            $table->integer('id_promocion');
            $table->string('referencia', 20);
            $table->integer('id_empresa');
            $table->integer('id_pais');
            $table->integer('cant_donada');
            $table->dateTime('fecha');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('compras_solidarias');
    }
}
