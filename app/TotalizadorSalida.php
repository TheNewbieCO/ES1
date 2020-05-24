<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TotalizadorSalida extends Model
{
    protected $fillable = ['id_tipousu', 'nombre_usu', 'id_entidad', 'donaciones', 'cuotas', 'total_qrs', 'incentivos',
    'total_aportaciones', 'id_usucapta', 'id_usucontrata', 'id_supervisora', 'id_gestorpais', 'id_orgcentral', 'gestion',
    'id_pais', 'total_transferencia', 'fecha'];
	protected $primaryKey = 'id_transsalida';
    protected $table = 'totalizador_salida';
    public $timestamps = false;
}