<?php

namespace App\Http\Controllers;

use App\TemasEmpresa;
use DB;
use Datatables;
use Illuminate\Http\Request;
use Response;

class temasEmpresaController extends Controller
{
    // public function __construct()
    // {
	// 	$this->middleware('auth');
    // }

    public function index()
    {
        return view('admin.temasEmpresa', ['pagTitulo' => "Temas Empresa"]);
    }

    public function show()
    {
        $temas = DB::table('temas_empresa')->join('paises', 'temas_empresa.id_pais', '=', 'paises.id_pais')
        ->select('temas_empresa.*', 'paises.nombre')->get();

        return Datatables($temas)->toJson();
    }

    public function store(Request $request)
    {

		$temas = new TemasEmpresa();
        $temas->tema_nombre = $request['nombre'];
        $temas->estado = $request['selEstado'];
        $temas->id_pais = $request['id_pais'];
        $temas->fecha_alta = date("Y-m-d h:m:s");
        $temas->fecha_modificacion = date("Y-m-d h:m:s");
        $temas->save();
        
        return 'Registro almacenado correctamente';
    }

    public function update(Request $request, $id)
    {

		$temas = TemasEmpresa::findOrFail($id);
        $temas->tema_nombre = $request['nombre'];
        $temas->estado = $request['selEstado'];
        $temas->id_pais = $request['id_pais'];
        $temas->fecha_modificacion = date("Y-m-d h:m:s");
        $temas->save();
        
        return 'Registro modificado correctamente' ;
    }

    public function destroy(Request $request, $id)
    {
 
		$temas = TemasEmpresa::findOrFail($id);
        $temas->delete();
        
        return 'Registro eliminado correctamente' ;
    }

    public function listTemaEmpresa(Request $request)
    {
        $temas = TemasEmpresa::where('tema_nombre', 'LIKE', '%'.$request->busqueda.'%')->get();
        $response = array();       
        foreach($temas as $tema){
            $response[] = array(
                "id"=>$tema->id_temaEmp,
                "text"=>$tema->tema_nombre
            );            
        }

        return response()->json($response);
    }     
}
