<?php

use Illuminate\Database\Seeder;
use App\paises;

class PaisesTableSeeder extends Seeder
{
    public function run()
    {
        $pais = new paises();
        $pais->codISO = 'CO';
        $pais->nombre = 'Colombia';
        $pais->moneda = 'Peso';
        $pais->idioma = 'Español';
        $pais->coste_recibo = '10000';
        $pais->coste_tranferencia = '10000';
        $pais->minima_promo = '1';
        $pais->cant_impdirecto = '2';
        $pais->cant_impindirecto = '2';
        $pais->fecha_alta = date("Y/m/d");
        $pais->fecha_modificacion = date("Y/m/d");
        $pais->save();

        $pais = new paises();
        $pais->codISO = 'AR';
        $pais->nombre = 'Argentina';
        $pais->moneda = 'Peso';
        $pais->idioma = 'Español';
        $pais->coste_recibo = '10000';
        $pais->coste_tranferencia = '10000';
        $pais->minima_promo = '1';
        $pais->cant_impdirecto = '2';
        $pais->cant_impindirecto = '2';        
        $pais->fecha_alta = date("Y/m/d");
        $pais->fecha_modificacion = date("Y/m/d");
        $pais->save();

        $pais = new paises();
        $pais->codISO = 'VE';
        $pais->nombre = 'Venezuela';
        $pais->moneda = 'Bolivar';
        $pais->idioma = 'Español';
        $pais->coste_recibo = '10000';
        $pais->coste_tranferencia = '10000';
        $pais->minima_promo = '1';
        $pais->cant_impdirecto = '2';
        $pais->cant_impindirecto = '2';        
        $pais->fecha_alta = date("Y/m/d");
        $pais->fecha_modificacion = date("Y/m/d");
        $pais->save();        
    }
}