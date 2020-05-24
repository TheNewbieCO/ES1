<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NoticiasEntidad extends Model
{
	protected $fillable = ['titulo', 'descripcion', 'link', 'id_pais', 'estado', 'fecha_alta', 'fecha_modificacion'];
	protected $primaryKey = 'id_noticia';
    protected $table = 'noticias_entidades';
    public $timestamps = false;
}