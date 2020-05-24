<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TipoUsuarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_usuario', function (Blueprint $table) {
            $table->bigIncrements('id_tipoUsu');
            $table->string('tipo_nombre', 30);
            $table->string('estado',2);
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
        Schema::dropIfExists('tipo_usuario');
    }
}
