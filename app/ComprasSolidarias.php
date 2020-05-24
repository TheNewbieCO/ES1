<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ComprasSolidarias extends Model
{
	protected $fillable = ['id_usuario', 'id_promocion', 'referencia', 'id_empresa', 'id_pais','cant_donada','fecha'];
	protected $primaryKey = 'id_compra';
	protected $table = 'qrs';
	public $timestamps = false;
}

