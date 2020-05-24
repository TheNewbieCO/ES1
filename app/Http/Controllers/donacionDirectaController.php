<?php

namespace App\Http\Controllers;

use App\DonacionDirecta;
use DB;
use Datatables;
use Illuminate\Http\Request;
use Response;

class donacionDirectaController extends Controller
{
    // public function __construct()
    // {
	// 	$this->middleware('auth');
    // }

    public function index()
    {
        return view('admin.donacionDirecta', ['pagTitulo' => "Donaciones Directas"]);
    }

    public function show()
    {
        $donadirect = DB::table('donacion_directa')->get();

        return Datatables($donadirect)->toJson();
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
