<?php

namespace App\Http\Controllers;

use App\Paginas;
use DB;
use Illuminate\Http\Request;
use Response;

class pagEstaticasController extends Controller
{
    // public function __construct()
    // {
	// 	$this->middleware('auth');
    // }

    public function mostrar($valor)
    {
        $view = 'layouts.error';

        if($valor === 'Sello-Solidario'){
            $dato = 'Sello Solidario';
            $view = 'inicio.pagEstaticas';
        }    
        if($valor === 'Entidad-Supervisora'){
            $dato = 'Entidad Supervisora';
            $view = 'inicio.pagEstaticas';
        }
        if($valor === 'PYMEF'){
            $dato = 'PYMEF';
            $view = 'inicio.pagEstaticas';
        }
        if($valor === 'Aviso-Legal'){
            $dato = 'Aviso Legal';
            $view = 'inicio.pagEstaticas';
        }
        if($valor === 'Politica-de-Privacidad'){
            $dato = 'Política de Privacidad';
            $view = 'inicio.pagEstaticas';
        }
        if($valor === 'Equipo'){
            $dato = 'Equipo';
            $view = 'inicio.pagEstaticas';
        }          

        if($valor > 1000 && $valor <= 9999999999){
            $view = 'inicio.landingPage';
        }

        if($valor  === 'registro'){
            $view = 'inicio.landingPage';
        }

        $text = DB::table('textos')->select('textos.id_texto as id', 'textos.texto_español as texto')->where('estado', '=', '1')->get();

        if($view === 'inicio.pagEstaticas'){

            $pagina = DB::table('paginas')->where('pag_titulo', '=', $dato)->get();
            return view('inicio.pagEstaticas', ['tit' => $dato, 'pagina' => $pagina, 'textos' => $text]);

        }else if($view === 'inicio.landingPage'){
            
            return view('inicio.landingPage',['textos' => $text]);
        }
    }
}
