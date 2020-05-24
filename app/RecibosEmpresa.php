<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RecibosEmpresa extends Model
{
	protected $fillable = ['id_empresa', 'donacion_total', 'donacion_concoste', 'cuenta_bancaria', 'id_pais', 'fecha','devuelto'];
	protected $primaryKey = 'id_recibo';
	protected $table = 'recibos_empresa';
	public $timestamps = false;
}