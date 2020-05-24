<?php

namespace App\Http\Controllers;

use App\Provincias;
use DB;
use Datatables;
use Illuminate\Http\Request;
use Response;

class provinciasController extends Controller
{
    // public function __construct()
    // {
	// 	$this->middleware('auth');
    // }

    public function index()
    {
        return view('admin.provincias', ['pagTitulo' => "Provincias"]);
    }

    public function show()
    {
        $provincia = DB::table('provincias')->join('paises', 'provincias.id_pais', '=', 'paises.id_pais')
        ->select('provincias.*', 'paises.nombre')->get();

        return Datatables($provincia)->toJson();
    }

    public function store(Request $request)
    {

		$provincia = new Provincias();
        $provincia->provincia_nombre = $request['nombre'];
        $provincia->id_pais = $request['id_pais'];
        $provincia->fecha_alta = date("Y-m-d h:m:s");
        $provincia->fecha_modificacion = date("Y-m-d h:m:s");
        $provincia->save();
        
        return 'Registro almacenado correctamente';
    }

    public function update(Request $request, $id)
    {

		$provincia = Provincias::findOrFail($id);
        $provincia->provincia_nombre = $request['nombre'];
        $provincia->id_pais = $request['id_pais'];
        $provincia->fecha_modificacion = date("Y-m-d h:m:s");
        $provincia->save();
        
        return 'Registro modificado correctamente' ;
    }

    public function destroy(Request $request, $id)
    {
 
		$provincia = Provincias::findOrFail($id);
        $provincia->delete();
        
        return 'Registro eliminado correctamente' ;
    }

    public function listProvincia(Request $request)
    {
        $provincia = Provincias::where('provincia_nombre', 'LIKE', '%'.$request->busqueda.'%')->get();
        $response = array();       
        foreach($provincia as $pro){
            $response[] = array(
                "id"=>$pro->id_provincia,
                "text"=>$pro->provincia_nombre
            );            
        }

        return response()->json($response);
    }     
}
