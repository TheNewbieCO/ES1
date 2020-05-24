<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TemasEntidad extends Model
{
	protected $fillable = ['tema_nombre', 'id_pais', 'estado', 'fecha_alta', 'fecha_modificacion'];
	protected $primaryKey = 'id_temaEnt';
    protected $table = 'temas_entidad';
    public $timestamps = false;
}