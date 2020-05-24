<?php

namespace App\Http\Controllers;

use App\TemasEntidad;
use DB;
use Datatables;
use Illuminate\Http\Request;
use Response;

class temasEntidadController extends Controller
{
    // public function __construct()
    // {
	// 	$this->middleware('auth');
    // }

    public function index()
    {
        return view('admin.temasEntidad', ['pagTitulo' => "Temas Entidad"]);
    }

    public function show()
    {
        $temasEnt = DB::table('temas_entidad')->join('paises', 'temas_entidad.id_pais', '=', 'paises.id_pais')
        ->select('temas_entidad.*', 'paises.nombre')->get();

        return Datatables($temasEnt)->toJson();
    }

    public function store(Request $request)
    {

		$temasEnt = new TemasEntidad();
        $temasEnt->tema_nombre = $request['nombre'];
        $temasEnt->estado = $request['selEstado'];
        $temasEnt->id_pais = $request['id_pais'];
        $temasEnt->fecha_alta = date("Y-m-d h:m:s");
        $temasEnt->fecha_modificacion = date("Y-m-d h:m:s");
        $temasEnt->save();
        
        return 'Registro almacenado correctamente';
    }

    public function update(Request $request, $id)
    {

		$temasEnt = TemasEntidad::findOrFail($id);
        $temasEnt->tema_nombre = $request['nombre'];
        $temasEnt->estado = $request['selEstado'];
        $temasEnt->id_pais = $request['id_pais'];
        $temasEnt->fecha_modificacion = date("Y-m-d h:m:s");
        $temasEnt->save();
        
        return 'Registro modificado correctamente' ;
    }

    public function destroy(Request $request, $id)
    {
 
		$temasEnt = TemasEntidad::findOrFail($id);
        $temasEnt->delete();
        
        return 'Registro eliminado correctamente' ;
    }

    public function listTemaEntidad(Request $request)
    {
        $temasEnt = TemasEntidad::where('tema_nombre', 'LIKE', '%'.$request->busqueda.'%')->get();
        $response = array();       
        foreach($temasEnt as $tema){
            $response[] = array(
                "id"=>$tema->id_temaEnt,
                "text"=>$tema->tema_nombre
            );            
        }

        return response()->json($response);
    }     
}
