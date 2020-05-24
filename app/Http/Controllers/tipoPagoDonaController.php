<?php

namespace App\Http\Controllers;

use App\TipoPagoDonacion;
use DB;
use Datatables;
use Illuminate\Http\Request;
use Response;

class tipoPagoDonaController extends Controller
{
    // public function __construct()
    // {
	// 	$this->middleware('auth');
    // }

    public function index()
    {
        return view('admin.tipoPagoDonacion', ['pagTitulo' => "Tipo Pago Donacion"]);
    }

    public function show()
    {
        $tipoPago = DB::table('tipo_pago_donacion')->join('paises', 'tipo_pago_donacion.id_pais', '=', 'paises.id_pais')
        ->select('tipo_pago_donacion.*', 'paises.nombre')->get();

        return Datatables($tipoPago)->toJson();
    }

    public function store(Request $request)
    {

		$tipPago = new TipoPagoDonacion();
        $tipPago->tipopag_nombre = $request['nombre'];
        $tipPago->estado = $request['selEstado'];
        $tipPago->id_pais = $request['id_pais'];
        $tipPago->fecha_alta = date("Y-m-d h:m:s");
        $tipPago->fecha_modificacion = date("Y-m-d h:m:s");
        $tipPago->save();
        
        return 'Registro almacenado correctamente';
    }

    public function update(Request $request, $id)
    {

		$tipPago = TipoPagoDonacion::findOrFail($id);
        $tipPago->tipopag_nombre = $request['nombre'];
        $tipPago->estado = $request['selEstado'];
        $tipPago->id_pais = $request['id_pais'];
        $tipPago->fecha_modificacion = date("Y-m-d h:m:s");
        $tipPago->save();
        
        return 'Registro modificado correctamente' ;
    }

    public function destroy(Request $request, $id)
    {
 
		$tipPago = TipoPagoDonacion::findOrFail($id);
        $tipPago->delete();
        
        return 'Registro eliminado correctamente' ;
    }

    public function listTipoPagoDona(Request $request)
    {
        $tipPago = TipoPagoDonacion::where('tipopag_nombre', 'LIKE', '%'.$request->busqueda.'%')->get();
        $response = array();       
        foreach($tipPago as $tip){
            $response[] = array(
                "id"=>$tip->id_tipopago,
                "text"=>$tip->tipopag_nombre
            );            
        }

        return response()->json($response);
    }     
}
