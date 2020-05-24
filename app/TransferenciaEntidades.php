<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransferenciaEntidades extends Model
{
	protected $fillable = ['id_entidad', 'donacion_total', 'donacion_concoste', 'cuenta_bancaria', 'id_pais', 'fecha'];
	protected $primaryKey = 'id_transferencia';
	protected $table = 'transferencia_entidad';
	public $timestamps = false;
}