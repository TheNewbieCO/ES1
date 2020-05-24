<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoUsuarios extends Model
{
	protected $fillable = ['tipo_nombre', 'estado', 'fecha_alta', 'fecha_modificacion'];
	protected $primaryKey = 'id_tipoUsu';
    protected $table = 'tipo_usuario';
    public $timestamps = false;
}