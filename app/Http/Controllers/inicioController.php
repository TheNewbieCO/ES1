<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class inicioController extends Controller
{
    public function index()
    {        
        $text = DB::table('textos')->select('textos.id_texto as id', 'textos.texto_español as texto')->where('estado', '=', '1')->get();
        return view('inicio.general',['textos' => $text]);
    }
}