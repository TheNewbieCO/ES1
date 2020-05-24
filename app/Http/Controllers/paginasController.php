<?php

namespace App\Http\Controllers;

use App\Paginas;
use DB;
use Datatables;
use Illuminate\Http\Request;
use Response;

class paginasController extends Controller
{
    // public function __construct()
    // {
	// 	$this->middleware('auth');
    // }

    public function index()
    {
        return view('admin.paginas', ['pagTitulo' => "Creador de Paginas"]);
    }

    public function show()
    {
        $paginas = DB::table('paginas')->join('paises', 'paginas.pag_pais', '=', 'paises.id_pais')
        ->select('paginas.*', 'paises.nombre')->get();

        // return response()->json($paginas);
        return Datatables($paginas)->toJson();
    }

    public function store(Request $request)
    {	
		$Pagina = new Paginas();
        $Pagina->pag_titulo = $request['titulo'];
        $Pagina->pag_pais = $request['idPais'];
        $Pagina->pag_contenido = $request['contenido'];
        $Pagina->pag_estado = $request['selEstado'];
        $Pagina->fecha_alta = date("Y-m-d h:m:s");
        $Pagina->fecha_modificacion = date("Y-m-d h:m:s");
        $Pagina->save();
        
        return 'Registro almacenado correctamente' ;
    }

    public function update(Request $request, $id)
    {

		$Pagina = Paginas::findOrFail($id);
        $Pagina->pag_titulo = $request['titulo'];
        $Pagina->pag_pais = $request['idPais'];
        $Pagina->pag_contenido = $request['contenido'];
        $Pagina->pag_estado = $request['selEstado'];
        $Pagina->fecha_modificacion = date("Y-m-d h:m:s");
        $Pagina->save();
        
        return 'Registro modificado correctamente' ;
    }

    public function destroy(Request $request, $id)
    {
 
		$Pagina = Paginas::findOrFail($id);
        $Pagina->delete();
        
        return 'Registro eliminado correctamente' ;
    }    
}