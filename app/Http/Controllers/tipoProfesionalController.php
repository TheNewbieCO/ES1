<?php

namespace App\Http\Controllers;

use App\TipoProfesional;
use DB;
use Datatables;
use Illuminate\Http\Request;
use Response;

class tipoProfesionalController extends Controller
{
    // public function __construct()
    // {
	// 	$this->middleware('auth');
    // }

    public function index()
    {
        return view('admin.tipoProfesional', ['pagTitulo' => "Tipo de Profesional"]);
    }

    public function show()
    {
        $tipProfe = DB::table('tipo_profesional')->join('paises', 'tipo_profesional.id_pais', '=', 'paises.id_pais')
        ->select('tipo_profesional.*', 'paises.nombre')->get();

        return Datatables($tipProfe)->toJson();
    }

    public function store(Request $request)
    {
		$tipProfe = new TipoProfesional();
        $tipProfe->profesional_nombre = $request['nombre'];
        $tipProfe->estado = $request['selEstado'];
        $tipProfe->id_pais = $request['id_pais'];
        $tipProfe->impuesto_directo = $request['selImpDir'];
        $tipProfe->impuesto_indirecto = $request['selImpIndir'];
        $tipProfe->fecha_alta = date("Y-m-d h:m:s");
        $tipProfe->fecha_modificacion = date("Y-m-d h:m:s");
        $tipProfe->save();
        
        return 'Registro almacenado correctamente';
    }

    public function update(Request $request, $id)
    {

		$tipProfe = TipoProfesional::findOrFail($id);
        $tipProfe->profesional_nombre = $request['nombre'];
        $tipProfe->estado = $request['selEstado'];
        $tipProfe->id_pais = $request['id_pais'];
        $tipProfe->impuesto_directo = $request['selImpDir'];
        $tipProfe->impuesto_indirecto = $request['selImpIndir'];
        $tipProfe->fecha_modificacion = date("Y-m-d h:m:s");
        $tipProfe->save();
        
        return 'Registro modificado correctamente' ;
    }

    public function destroy(Request $request, $id)
    {
 
		$tipProfe = TipoProfesional::findOrFail($id);
        $tipProfe->delete();
        
        return 'Registro eliminado correctamente' ;
    }

    public function listTipoProfesional(Request $request)
    {
        $tipProfe = TipoProfesional::where('profesional_nombre', 'LIKE', '%'.$request->busqueda.'%')->get();
        $response = array();       
        foreach($tipProfe as $tip){
            $response[] = array(
                "id"=>$tip->id_tipopago,
                "text"=>$tip->id_profesional
            );            
        }

        return response()->json($response);
    }     
}
