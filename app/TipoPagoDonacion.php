<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoPagoDonacion extends Model
{
	protected $fillable = ['tipopag_nombre', 'estado', 'id_pais', 'fecha_alta', 'fecha_modificacion'];
	protected $primaryKey = 'id_tipopago';
    protected $table = 'tipo_pago_donacion';
    public $timestamps = false;
}