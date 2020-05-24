<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = ['nombre', 'password', 'id_tipousu','id_pais', 'id_provincia', 'id_poblacion','codigo_postal', 'direccion',
    'correo','telefono', 'cif', 'cuenta_bancaria', 'id_temaEmp', 'id_temaEnt', 'id_entidadAsoc','imagen', 'link', 'id_franjaepl',
    'link_facebook','link_instagram', 'link_twitter', 'link_youtube','saldo_incentivo', 'canal_compra', 'id_usucapta',
    'id_usucontrata', 'estado', 'porcen_dona', 'id_profesional', 'fecha_alta', 'fecha_modificacion', 'descripcion'];

    protected $hidden = ['password'];

    protected $table = 'usuarios';
    protected $primaryKey = "id_usuario";
    public $timestamps = false;

    // /**
    //  * The attributes that should be cast to native types.
    //  *
    //  * @var array
    //  */
    // protected $casts = [
    //     'email_verified_at' => 'datetime',
    // ];
}