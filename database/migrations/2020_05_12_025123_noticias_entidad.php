<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class NoticiasEntidad extends Migration
{
    public function up()
    {
        Schema::create('noticias_entidades', function (Blueprint $table) {
            $table->bigIncrements('id_noticia');
            $table->string('titulo', 60);
            $table->string('descripcion', 220);
            $table->string('link', 200);
            $table->integer('id_pais');
            $table->string('estado',2);
            $table->dateTime('fecha_alta');
            $table->dateTime('fecha_modificacion')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('noticias_entidades');
    }
}