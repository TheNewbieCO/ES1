<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TotalizadorEntrada extends Model
{
	protected $fillable = ['memo_cliente', 'devuelto', 'Cuota', 'cant_compras', 'total_compras', 'total_donacion', 'id_pais', 'id_empresa', 'fecha'];
	protected $primaryKey = 'id_transentrante';
    protected $table = 'totalizador_entrada';
    public $timestamps = false;
}