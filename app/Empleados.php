<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleados extends Model
{
	protected $fillable = ['titulo_franja', 'cuota', 'estado', 'id_pais', 'fecha_alta', 'fecha_modificacion'];
	protected $primaryKey = 'id_empleado';
    protected $table = 'empleados';
    public $timestamps = false;
}