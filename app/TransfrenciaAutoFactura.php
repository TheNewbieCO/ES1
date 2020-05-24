<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransfrenciaAutoFactura extends Model
{
	protected $fillable = ['id_usuario', 'pago_total', 'pago_concoste', 'cuenta_bancaria', 'id_pais', 'fecha'];
	protected $primaryKey = 'id_transautofac';
	protected $table = 'transferencia_autofactura';
	public $timestamps = false;
}