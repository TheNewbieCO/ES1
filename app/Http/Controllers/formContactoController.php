<?php

namespace App\Http\Controllers;

use App\FormularioContacto;
use DB;
use Datatables;
use Illuminate\Http\Request;
use Response;

class formContactoController extends Controller
{
    // public function __construct()
    // {
	// 	$this->middleware('auth');
    // }

    public function index()
    {
        return view('admin.formContacto', ['pagTitulo' => "Formulario de Contacto"]);
    }

    public function show()
    {
        $noticia = DB::table('formulario_contacto')->join('paises', 'formulario_contacto.id_pais', '=', 'paises.id_pais')
        ->select('formulario_contacto.*', 'paises.nombre as nompais')->get();

        return Datatables($noticia)->toJson();
    }

    public function store(Request $request)
    {
		$form = new FormularioContacto();
        $form->nombre = $request['titulo'];
        $form->correo = $request['descripcion'];
        $form->telefono = $request['link'];
        $form->texto = $request['link'];
        $form->id_pais = $request['id_pais'];
        $form->fecha_alta = date("Y-m-d h:m:s");
        $form->fecha_modificacion = date("Y-m-d h:m:s");
        $form->save();
        
        return 'Registro almacenado correctamente';
    }
}
