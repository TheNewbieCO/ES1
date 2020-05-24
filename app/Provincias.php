<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provincias extends Model
{
	protected $fillable = ['provincia_nombre', 'id_pais', 'fecha_alta', 'fecha_modificacion'];
	protected $primaryKey = 'id_provincia';
    protected $table = 'provincias';
    public $timestamps = false;
}