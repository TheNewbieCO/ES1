<?php

namespace App\Http\Controllers;

use App\paises;
use DB;
use Datatables;
use Illuminate\Http\Request;
use Response;

class paisController extends Controller
{
    // public function __construct()
    // {
	// 	$this->middleware('auth');
    // }

    public function index()
    {
        return view('admin.paises', ['pagTitulo' => "Paises"]);
    }

    public function show()
    {
        return Datatables(DB::table('paises')->get())->toJson();
    }

    public function store(Request $request)
    {
		$pais = new paises();
        $pais->nombre = $request['nombrePai'];
        $pais->codISO = $request['codIso'];
        $pais->moneda = $request['moneda'];
        $pais->idioma = $request['idioma'];
        $pais->coste_recibo = $request['costeRecib'];
        $pais->coste_tranferencia = $request['costeTrans'];
        $pais->cant_impdirecto = $request['cant_impDir'];
        $pais->cant_impindirecto = $request['cant_impIndir'];
        $pais->minima_promo = $request['miniPromo'];
        $pais->dat_gestoraFactura = $request['datosGestora'];
        $pais->gasto_enviosello = $request['gastoSello'];
        $pais->fecha_alta = date("Y-m-d h:m:s");
        $pais->fecha_modificacion = date("Y-m-d h:m:s");
        $pais->save();
        
        return 'Registro almacenado correctamente';
    }

    public function update(Request $request, $id)
    {

		$pais = paises::findOrFail($id);
        $pais->nombre = $request['nombrePai'];
        $pais->codISO = $request['codIso'];
        $pais->moneda = $request['moneda'];
        $pais->idioma = $request['idioma'];
        $pais->coste_recibo = $request['costeRecib'];
        $pais->coste_tranferencia = $request['costeTrans'];
        $pais->cant_impdirecto = $request['cant_impDir'];
        $pais->cant_impindirecto = $request['cant_impIndir'];        
        $pais->minima_promo = $request['miniPromo'];
        $pais->dat_gestoraFactura = $request['datosGestora'];
        $pais->gasto_enviosello = $request['gastoSello'];
        $pais->fecha_modificacion = date("Y-m-d h:m:s");
        $pais->save();
        
        return 'Registro modificado correctamente' ;
    }

    public function destroy(Request $request, $id)
    {
 
		$pais = paises::findOrFail($id);
        $pais->delete();
        
        return 'Registro eliminado correctamente' ;
    }

    public function listPaises(Request $request)
    {
        $pais = paises::where('nombre', 'LIKE', '%'.$request->busqueda.'%')->get();
        $response = array();       
        foreach($pais as $pai){
            $response[] = array(
                "id"=>$pai->id_pais,
                "text"=>$pai->nombre
            );            
        }

        return response()->json($response);
    }     
}
