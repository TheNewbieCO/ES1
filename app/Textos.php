<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Textos extends Model
{
	protected $fillable = ['texto_español', 'texto_ingles', 'texto_frances', 'texto_aleman', 'texto_ruso', 'texto_portugues', 'estado', 'fecha_alta', 'fecha_modificacion'];
	protected $primaryKey = 'id_texto';
    protected $table = 'textos';
    public $timestamps = false;
}