<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AutoFacturas extends Model
{
	protected $fillable = ['id_usugestor', 'base', 'impuesto_indirecto', 'impuesto_directo', 'total_conImpuestos','estado','activo', 'id_pais', 'fecha'];
	protected $primaryKey = 'id_autofactura';
	protected $table = 'autofactura';
	public $timestamps = false;
}