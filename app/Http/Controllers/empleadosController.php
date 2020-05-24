<?php

namespace App\Http\Controllers;

use App\Empleados;
use DB;
use Datatables;
use Illuminate\Http\Request;
use Response;

class empleadosController extends Controller
{
    // public function __construct()
    // {
	// 	$this->middleware('auth');
    // }

    public function index()
    {
        return view('admin.empleados', ['pagTitulo' => "Franja Empleados"]);
    }

    public function show()
    {
        $Empleados = DB::table('empleados')->join('paises', 'empleados.id_pais', '=', 'paises.id_pais')
        ->select('empleados.*', 'paises.nombre')->get();

        return Datatables($Empleados)->toJson();
    }

    public function store(Request $request)
    {	
		$Empleados = new Empleados();
        $Empleados->titulo_franja = $request['titFranja'];
        $Empleados->cuota = $request['cuota'];
        $Empleados->estado = $request['selEstado'];
        $Empleados->id_pais = $request['id_pais'];
        $Empleados->fecha_alta = date("Y-m-d h:m:s");
        $Empleados->fecha_modificacion = date("Y-m-d h:m:s");
        $Empleados->save();
        
        return 'Registro almacenado correctamente' ;
    }

    public function update(Request $request, $id)
    {
 
		$Empleados = Empleados::findOrFail($id);
        $Empleados->titulo_franja = $request['titFranja'];
        $Empleados->cuota = $request['cuota'];
        $Empleados->estado = $request['selEstado'];
        $Empleados->id_pais = $request['id_pais'];
        $Empleados->fecha_modificacion = date("Y-m-d h:m:s");
        $Empleados->save();
        
        return 'Registro modificado correctamente' ;
    }

    public function destroy(Request $request, $id)
    {
 
		$Empleados = Empleados::findOrFail($id);
        $Empleados->delete();
        
        return 'Registro eliminado correctamente' ;
    }

    public function listFranjas(Request $request)
    { 

        $Empleados = Empleados::where('titulo_franja', 'LIKE', '%'.$request->busqueda.'%')->get();        
        $response = array();
        foreach($Empleados as $epl){
            $response[] = array(
                "id"=>$epl->id_empleado,
                "text"=>$epl->titulo_franja
            );
        }        

        return response()->json($response);
    }    
}