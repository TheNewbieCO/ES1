<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TipoProfesional extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_profesional', function (Blueprint $table) {
            $table->bigIncrements('id_profesional');
            $table->string('profesional_nombre', 40);
            $table->integer('id_pais');
            $table->string('estado',2);
            $table->string('impuesto_directo', 2);
            $table->string('impuesto_indirecto', 2);
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
        Schema::dropIfExists('tipo_profesional');
    }
}