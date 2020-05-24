<?php

namespace App\Http\Controllers;

use App\NoticiasEntidad;
use DB;
use Datatables;
use Illuminate\Http\Request;
use Response;

class noticiasEntidadController extends Controller
{
    // public function __construct()
    // {
	// 	$this->middleware('auth');
    // }

    public function index()
    {
        return view('admin.noticiasEntidad', ['pagTitulo' => "Noticias de Entidades"]);
    }

    public function show()
    {
        $noticia = DB::table('noticias_entidades')->join('paises', 'noticias_entidades.id_pais', '=', 'paises.id_pais')
        ->select('noticias_entidades.*', 'paises.nombre')->get();

        return Datatables($noticia)->toJson();
    }

    public function store(Request $request)
    {
		$noticia = new NoticiasEntidad();
        $noticia->titulo = $request['titulo'];
        $noticia->descripcion = $request['descripcion'];
        $noticia->link = $request['link'];
        $noticia->estado = $request['selEstado'];        
        $noticia->id_pais = $request['id_pais'];
        $noticia->fecha_alta = date("Y-m-d h:m:s");
        $noticia->fecha_modificacion = date("Y-m-d h:m:s");
        $noticia->save();
        
        return 'Registro almacenado correctamente';
    }

    public function update(Request $request, $id)
    {

		$noticia = NoticiasEntidad::findOrFail($id);
        $noticia->titulo = $request['titulo'];
        $noticia->descripcion = $request['descripcion'];
        $noticia->link = $request['link'];
        $noticia->estado = $request['selEstado'];
        $noticia->id_pais = $request['id_pais'];
        $noticia->fecha_modificacion = date("Y-m-d h:m:s");
        $noticia->save();
        
        return 'Registro modificado correctamente' ;
    }

    public function destroy(Request $request, $id)
    {
 
		$noticia = NoticiasEntidad::findOrFail($id);
        $noticia->delete();
        
        return 'Registro eliminado correctamente' ;
    }
}
