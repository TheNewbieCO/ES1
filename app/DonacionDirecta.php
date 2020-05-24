<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DonacionDirecta extends Model
{
	protected $fillable = ['id_tipoUsu', 'nombre', 'referencia', 'cantidad_donada', 'id_tipopago', 'activa','id_pais','fecha_alta', 'fecha_modificacion'];
	protected $primaryKey = 'id_donacion';
	protected $table = 'donacion_directa';
	public $timestamps = false;
}