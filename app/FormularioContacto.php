<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FormularioContacto extends Model
{
	protected $fillable = ['nombre', 'correo', 'telefono', 'texto', 'id_pais','fecha_alta','fecha_modificacion'];
	protected $primaryKey = 'id_contacto';
	protected $table = 'formulario_contacto'; 
	public $timestamps = false;
}