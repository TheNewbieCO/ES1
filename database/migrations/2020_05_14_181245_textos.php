<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Textos extends Migration
{
    public function up()
    {
        Schema::create('textos', function (Blueprint $table) {
            $table->bigIncrements('id_texto');
            $table->string('texto_español',200)->nullable();
            $table->string('texto_ingles',200)->nullable();
            $table->string('texto_frances',200)->nullable();
            $table->string('texto_aleman',200)->nullable();
            $table->string('texto_ruso',200)->nullable();
            $table->string('texto_portugues',200)->nullable();
            $table->string('estado',2);
            $table->dateTime('fecha_alta');
            $table->dateTime('fecha_modificacion')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('textos');
    }
}
