<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoProfesional extends Model
{
	protected $fillable = ['profesional_nombre', 'estado', 'id_pais', 'impuesto_directo', 'impuesto_indirecto', 'fecha_alta', 'fecha_modificacion'];
	protected $primaryKey = 'id_profesional';
    protected $table = 'tipo_profesional';
    public $timestamps = false;
}