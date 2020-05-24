<?php

namespace App\Http\Controllers;

use App\User;
use DB;
use Datatables;
use Illuminate\Http\Request;
use Response;

class UserController extends Controller
{
    // public function __construct()
    // {
	// 	$this->middleware('auth');
    // }

    public function index()
    {
        return view('admin.usuarios', ['pagTitulo' => "Usuarios"]);
    }

    public function show()
    {
        $tipProfe = DB::table('usuarios')->join('paises', 'usuarios.id_pais', '=', 'paises.id_pais')
        ->select('usuarios.*', 'paises.nombre')->get();

        return Datatables($tipProfe)->toJson();
    }

    // public function store(Request $request)
    // {	
	// 	$User = new User();
    //     $User->ctg_nombre = $request['nomCate'];
    //     $User->ctg_icono = $request['icoImg'];
    //     $User->ctg_estado = $request['selEstado'];
    //     $User->save();
        
    //     return 'Registro almacenado correctamente' ;
    // }

    public function listUsuEmpresa(Request $request)
    {
        $User = DB::table('usuarios')->where('nombre', 'LIKE', '%'.$request->busqueda.'%')->where('estado', '=', '1')->where('id_tipousu', '=', '1')->get();
        $response = array();       
        foreach($User as $usu){
            $response[] = array(
                "id"=>$usu->id_usuario,
                "text"=>$usu->nombre
            );            
        }

        return response()->json($response);
    }     
}