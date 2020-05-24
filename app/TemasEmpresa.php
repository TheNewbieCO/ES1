<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TemasEmpresa extends Model
{
	protected $fillable = ['tema_nombre', 'id_pais', 'estado', 'fecha_alta', 'fecha_modificacion'];
	protected $primaryKey = 'id_temaEmp';
    protected $table = 'temas_empresa';
    public $timestamps = false;
}