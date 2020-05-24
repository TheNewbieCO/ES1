<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Usuarios extends Migration
{
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->bigIncrements('id_usuario')->unsigned();
            $table->string('nombre',60);
            $table->string('password');
            $table->integer('id_tipousu');
            $table->integer('id_pais')->nullable();
            $table->integer('id_provincia')->nullable();
            $table->integer('id_poblacion')->nullable();
            $table->string('codigo_postal',20)->nullable();
            $table->string('direccion',100)->nullable();
            $table->string('correo',100);
            $table->string('telefono',25);
            $table->string('cif',30);
            $table->string('cuenta_bancaria',40)->nullable();
            $table->integer('id_temaEmp')->nullable();
            $table->integer('id_temaEnt')->nullable();
            $table->integer('id_entidadAsoc')->nullable();
            $table->string('imagen')->nullable();
            $table->string('link',60)->nullable();
            $table->integer('id_franjaepl')->nullable();
            $table->string('link_facebook',60)->nullable();
            $table->string('link_instagram',60)->nullable();
            $table->string('link_twitter',60)->nullable();
            $table->string('link_youtube',60)->nullable();
            $table->integer('saldo_incentivo')->nullable();
            $table->string('canal_compra',70)->nullable();
            $table->integer('id_usucapta')->nullable();
            $table->integer('id_usucontrata')->nullable();
            $table->integer('porcen_dona')->nullable();
            $table->integer('id_profesional');
            $table->string('tiempo_confirmacion',1);
            $table->dateTime('fecha_confirmacion');
            $table->dateTime('fecha_contratacion');
            $table->string('descripcion',250);
            $table->string('estado',1);
            $table->dateTime('fecha_alta');
            $table->dateTime('fecha_modificacion')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}