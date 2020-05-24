<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FormularioContacto extends Migration
{

    public function up()
    {
        Schema::create('formulario_contacto', function (Blueprint $table) {
            $table->bigIncrements('id_contacto');
            $table->string('nombre', 60);
            $table->string('correo', 80);
            $table->string('telefono', 20);
            $table->string('texto', 220);
            $table->integer('id_pais');
            $table->dateTime('fecha_alta');
            $table->dateTime('fecha_modificacion')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('formulario_contacto');
    }
}
