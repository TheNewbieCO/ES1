<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paginas extends Model
{
	protected $fillable = ['pag_titulo', 'pag_pais', 'pag_contenido', 'pag_estado'];
	protected $primaryKey = 'pag_id';
    protected $table = 'paginas';
    public $timestamps = false;
}