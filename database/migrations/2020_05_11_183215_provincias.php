<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Provincias extends Migration
{

    public function up()
    {
        Schema::create('provincias', function (Blueprint $table) {
            $table->bigIncrements('id_provincia');
            $table->string('provincia_nombre', 30);
            $table->integer('id_pais');
            $table->dateTime('fecha_alta');
            $table->dateTime('fecha_modificacion')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('provincias');
    }
}
