<?php

namespace App\Http\Controllers;

use App\Textos;
use DB;
use Datatables;
use Illuminate\Http\Request;
use Response;

class textosController extends Controller
{
    // public function __construct()
    // {
	// 	$this->middleware('auth');
    // }

    public function index()
    {
        return view('admin.textos', ['pagTitulo' => "Textos"]);
    }

    public function show()
    {
        $Texto = DB::table('textos')->get();

        return Datatables($Texto)->toJson();
    }

    public function store(Request $request)
    {	
		$Texto = new Textos();
        $Texto->texto_español = $request['español'];
        $Texto->texto_ingles = $request['ingles'];
        $Texto->texto_frances = $request['frances'];
        $Texto->texto_aleman = $request['aleman'];
        $Texto->texto_ruso = $request['ruso'];
        $Texto->texto_portugues = $request['portugues'];
        $Texto->estado = $request['selEstado'];
        $Texto->fecha_alta = date("Y-m-d h:m:s");
        $Texto->fecha_modificacion = date("Y-m-d h:m:s");
        $Texto->save();
        
        return 'Registro almacenado correctamente' ;
    }

    public function update(Request $request, $id)
    {
 
		$Texto = Textos::findOrFail($id);
        $Texto->texto_español = $request['español'];
        $Texto->texto_ingles = $request['ingles'];
        $Texto->texto_frances = $request['frances'];
        $Texto->texto_aleman = $request['aleman'];
        $Texto->texto_ruso = $request['ruso'];
        $Texto->texto_portugues = $request['portugues'];
        $Texto->estado = $request['selEstado'];
        $Texto->fecha_modificacion = date("Y-m-d h:m:s");
        $Texto->save();
        
        return 'Registro modificado correctamente' ;
    }

    public function destroy(Request $request, $id)
    {
 
		$Texto = Textos::findOrFail($id);
        $Texto->delete();
        
        return 'Registro eliminado correctamente' ;
    }  
}