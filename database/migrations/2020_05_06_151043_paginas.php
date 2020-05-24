<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Paginas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paginas', function (Blueprint $table) {
            $table->bigIncrements('pag_id');
            $table->string('pag_titulo', 80);
            $table->integer('pag_pais');
            $table->string('pag_contenido',40000);
            $table->string('pag_estado',1);
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
        Schema::dropIfExists('paginas');
    }
}
