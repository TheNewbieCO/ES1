<?php

namespace App\Http\Controllers;

use App\Parametros;
use DB;
use Datatables;
use Illuminate\Http\Request;
use Response;

class ParametrosController extends Controller
{
    // public function __construct()
    // {
	// 	$this->middleware('auth');
    // }

    public function index()
    {
        $parametros = DB::table('parametros')->get();        
        return view('admin.parametros', ['pagTitulo' => "Parametros", 'params' => $parametros]);
    }

    public function update(Request $request, $id)
    {
		$params = Parametros::findOrFail($id);
        $params->usuario_superadmin = $request['usuSuperAdmin'];
        $params->password_superadmin = $request['passSuperAdmin'];
        $params->comision_usucontrata = $request['comiContra'];
        $params->comision_usugestor = $request['comiGest'];
        $params->comision_captador = $request['comiCapta'];
        $params->comision_entidadsuper = $request['comiEntSuper'];
        $params->comision_agencental = $request['comiAgenCent'];
        $params->dia_reclamacion = $request['diaReclama'];
        $params->gestor_pais = $request['descripcionGesPai'];
        $params->organizacion_central = $request['descripcionOrgCentral'];
        $params->usuario_refCapta = $request['usuario_refCapta'];
        $params->fecha_modificacion = date("Y-m-d h:m:s");
        $params->save();
        
        return 'Registro modificado correctamente' ;
    }
}