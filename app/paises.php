<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class paises extends Model
{
	protected $fillable = ['codISO', 'nombre','moneda','idioma','coste_recibo','coste_tranferencia','minima_promo', 'cant_impdirecto', 'cant_impindirecto','dat_gestoraFactura', 'gasto_enviosello','fecha_alta','fecha_modificacion'];
	protected $primaryKey = 'id_pais';
	protected $table = 'paises'; 
	public $timestamps = false;
}