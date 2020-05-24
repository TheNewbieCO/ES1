<?php

namespace App\Http\Controllers;

use App\TipoUsuarios;
use DB;
use Datatables;
use Illuminate\Http\Request;
use Response;

class tipoUsuarioController extends Controller
{
    // public function __construct()
    // {
	// 	$this->middleware('auth');
    // }

    public function index()
    {
        return view('admin.tipoUsuario', ['pagTitulo' => "Tipo de Usuarios"]);
    }

    public function show()
    {
        return Datatables(DB::table('tipo_usuario')->get())->toJson();
    }

    public function store(Request $request)
    {
		$tipUsu = new TipoUsuarios();
        $tipUsu->tipo_nombre = $request['nombre'];
        $tipUsu->estado = $request['selEstado'];
        $tipUsu->fecha_alta = date("Y-m-d h:m:s");
        $tipUsu->fecha_modificacion = date("Y-m-d h:m:s");
        $tipUsu->save();
        
        return 'Registro almacenado correctamente';
    }

    public function update(Request $request, $id)
    {

		$tipUsu = TipoUsuarios::findOrFail($id);
        $tipUsu->tipo_nombre = $request['nombre'];
        $tipUsu->estado = $request['selEstado'];
        $tipUsu->fecha_modificacion = date("Y-m-d h:m:s");
        $tipUsu->save();
        
        return 'Registro modificado correctamente' ;
    }

    public function destroy(Request $request, $id)
    {
 
		$tipUsu = TipoUsuarios::findOrFail($id);
        $tipUsu->delete();
        
        return 'Registro eliminado correctamente' ;
    }

    public function listTipoUsu(Request $request)
    {
        $tipUsu = TipoUsuarios::where('tipo_nombre', 'LIKE', '%'.$request->busqueda.'%')->get();
        $response = array();       
        foreach($tipUsu as $tip){
            $response[] = array(
                "id"=>$tip->id_tipoUsu,
                "text"=>$tip->tipo_nombre
            );            
        }

        return response()->json($response);
    }     
}
