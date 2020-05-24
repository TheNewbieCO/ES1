<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parametros extends Model
{
    protected $fillable = ['usuario_superadmin', 'password_superadmin', 'comision_usucontrata', 'comision_usugestor', 'comision_captador',
    'comision_entidadsuper', 'comision_agencental','dia_reclamacion', 'gestor_pais', 'organizacion_central', 'usuario_refCapta', 'fecha_alta',
    'fecha_modificacion'];
	protected $primaryKey = 'id_parametro';
    protected $table = 'parametros';
    public $timestamps = false;
}