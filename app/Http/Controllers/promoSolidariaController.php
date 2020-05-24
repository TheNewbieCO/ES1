<?php

namespace App\Http\Controllers;

use App\PromocionSolidaria;
use DB;
use Datatables;
use Illuminate\Http\Request;
use Response;

class promoSolidariaController extends Controller
{
    // public function __construct()
    // {
	// 	$this->middleware('auth');
    // }

    public function index()
    {
        return view('admin.promocionSolidaria', ['pagTitulo' => "Promociones Solidarias"]);
    }

    public function show()
    {
        $promoSol = DB::table('promocion_solidaria')->join('paises', 'promocion_solidaria.id_pais', '=', 'paises.id_pais')
        ->join('temas_empresa', 'promocion_solidaria.id_usuempresa', '=', 'temas_empresa.id_temaEmp')
        ->join('usuarios', 'promocion_solidaria.tematica', '=', 'usuarios.id_usuario')
        ->select('promocion_solidaria.*', 'paises.nombre as nombrePai', 'usuarios.nombre as nombreEmp', 'temas_empresa.tema_nombre')
        ->where('usuarios.id_tipousu', '=', '1')->get();

        return Datatables($promoSol)->toJson();
    }

    public function store(Request $request)
    {
		$promoSol = new PromocionSolidaria();
        $promoSol->titulo = $request['titulo'];
        $promoSol->descripcion = $request['descripcion'];
        $promoSol->imagen = $request['imagen'];
        $promoSol->id_usuempresa = $request['id_empresa'];
        $promoSol->tematica = $request['id_temaemp'];
        $promoSol->id_pais = $request['id_pais'];
        $promoSol->cant_donada = $request['cantDona'];
        $promoSol->fecha_desde = $request['fecini'];
        $promoSol->fecha_hasta = $request['fecfin'];
        $promoSol->estado = $request['selEstado'];
        $promoSol->fecha_alta = date("Y-m-d h:m:s");
        $promoSol->fecha_modificacion = date("Y-m-d h:m:s");
        $promoSol->save();
        
        return 'Registro almacenado correctamente';
    }

    public function update(Request $request, $id)
    {

		$promoSol = PromocionSolidaria::findOrFail($id);
        $promoSol->titulo = $request['titulo'];
        $promoSol->descripcion = $request['descripcion'];
        $promoSol->imagen = $request['imagen'];
        $promoSol->id_usuempresa = $request['id_empresa'];
        $promoSol->tematica = $request['id_temaemp'];
        $promoSol->id_pais = $request['id_pais'];
        $promoSol->cant_donada = $request['cantDona'];
        $promoSol->fecha_desde = $request['fecini'];
        $promoSol->fecha_hasta = $request['fecfin'];
        $promoSol->estado = $request['selEstado'];
        $promoSol->fecha_modificacion = date("Y-m-d h:m:s");
        $promoSol->save();
        
        return 'Registro modificado correctamente' ;
    }

    public function destroy(Request $request, $id)
    {
 
		$promoSol = PromocionSolidaria::findOrFail($id);
        $promoSol->delete();
        
        return 'Registro eliminado correctamente' ;
    }

    public function listPromocionSolidaria(Request $request)
    {
        $promoSol = PromocionSolidaria::where('titulo', 'LIKE', '%'.$request->busqueda.'%')->get();
        $response = array();       
        foreach($promoSol as $promo){
            $response[] = array(
                "id"=>$promo->id_promocion,
                "text"=>$promo->titulo
            );            
        }

        return response()->json($response);
    }     
}
