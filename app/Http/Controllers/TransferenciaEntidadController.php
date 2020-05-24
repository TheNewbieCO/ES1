<?php

namespace App\Http\Controllers;

use App\QR;
use DB;
use Datatables;
use Illuminate\Http\Request;
use Response;

class TransferenciaEntidadController extends Controller
{
    // public function __construct()
    // {
	// 	$this->middleware('auth');
    // }

    public function index()
    {
        return view('admin.transferenciaEntidad', ['pagTitulo' => "Tranferencias Entidades"]);
    }

    public function show()
    {
        $transfe = DB::table('transferencia_entidad')->get();

        return Datatables($transfe)->toJson();
    }

    // public function store(Request $request)
    // {
	// 	$form = new FormularioContacto();
    //     $form->nombre = $request['titulo'];
    //     $form->correo = $request['descripcion'];
    //     $form->telefono = $request['link'];
    //     $form->texto = $request['link'];
    //     $form->id_pais = $request['id_pais'];
    //     $form->fecha_alta = date("Y-m-d h:m:s");
    //     $form->fecha_modificacion = date("Y-m-d h:m:s");
    //     $form->save();
        
    //     return 'Registro almacenado correctamente';
    // }
}
