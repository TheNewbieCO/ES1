<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PromocionSolidaria extends Model
{
    protected $fillable = ['titulo', 'descripcion', 'imagen','id_usuempresa', 'id_pais', 'tematica', 'cant_donada', 'fecha_desde', 'fecha_hasta', 'estado', 'fecha_alta', 'fecha_modificacion'];
	protected $primaryKey = 'id_promocion';
    protected $table = 'promocion_solidaria';
    public $timestamps = false;
}