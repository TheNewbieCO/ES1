<?php

Route::get('/', 'inicioController@index');
Route::get('/Inicio', 'inicioController@index');
Route::get('/inicio', 'inicioController@index');


Route::get('/admin', function () {
    return view('layouts/mainAdmin', ['pagTitulo' => "Administrador"]);
});

/*  PAISES  */
    Route::resource('/paises', 'paisController');
    Route::get('listCmbPais', 'paisController@listPaises');
/************/
    
/*  PAGINAS  */
    Route::resource('/paginas', 'paginasController');
/************/

/*  USUARIOS  */
    Route::resource('/usuarios', 'UserController');
    Route::get('listCmbUsuEmp', 'UserController@listUsuEmpresa');
/************/

/*  FRANJA EMPLEADOS  */
    Route::resource('/empleados', 'empleadosController');
    Route::get('listaCmbEpl', 'empleadosController@listFranjas');
/************/

/*  TIPO DE USUARIOS  */
    Route::resource('/tipoUsuarios', 'tipoUsuarioController');
    Route::get('listaCmbTipUsu', 'tipoUsuarioController@listTipoUsu');
/************/

/*  TIPO PAGO DONACIONES  */
    Route::resource('/tipoPagoDonacion', 'tipoPagoDonaController');
    Route::get('listaCmbTipPagoDona', 'tipoPagoDonaController@listTipoPagoDona');
/************/

/*  TEMAS ENTIDADES  */
    Route::resource('/temasEntidad', 'temasEntidadController');
    Route::get('listaCmbTemaEnt', 'temasEntidadController@listTemaEntidad');
/************/

/*  PROVINCIAS  */
    Route::resource('/provincias', 'provinciasController');
    Route::get('listaCmbProvincia', 'provinciasController@listProvincia');
/************/

/*  NOTICIAS ENTIDADES  */
    Route::resource('/noticiasEntidad', 'noticiasEntidadController');
/************/

/*  FORMULARIO CONTACTO  */
    Route::resource('/formularioContacto', 'formContactoController');
/************/

/*  TEMAS EMPRESAS  */
    Route::resource('/temasEmpresa', 'temasEmpresaController');
    Route::get('listaCmbTemaEmp', 'temasEmpresaController@listTemaEmpresa');
/************/

/*  TIPO PROFESIONAL  */
    Route::resource('/tipoProfesional', 'tipoProfesionalController');
    Route::get('listaCmbTipPro', 'tipoProfesionalController@listTipoProfesional');
/************/

/*  PROMOCIONES SOLIDARIAS  */
    Route::resource('/promocionesSolidarias', 'promoSolidariaController');
    Route::get('listaCmbPromoSoli', 'promoSolidariaController@listPromocionSolidaria');
/************/

/*  COMPRAS SOLIDARIAS  */
    Route::resource('/comprasSolidarias', 'ComprasSolidariasController');
/************/

/*  DONACIONES DIRECTAS  */
    Route::resource('/donacionDirecta', 'donacionDirectaController');
/************/

/*  TRANSFERENCIA ENTIDAD  */
    Route::resource('/tranferenciaEntidad', 'TransferenciaEntidadController');
/************/

/*  RECIBOS EMPRESA  */
    Route::resource('/recibosEmpresa', 'recibosEmpresaController');
/************/

/*  RECIBOS EMPRESA  */
    Route::resource('/autoFacturas', 'autoFacturaController');
/************/

/*  TEXTOS  */
    Route::resource('/textos', 'textosController');
/************/

/*  PARAMETROS  */
    Route::resource('/parametros', 'parametrosController');
/************/

/*  TOTALIZADOR ENTRADA  */
    Route::resource('/totalizadorEntrada', 'totEntradaController');
/************/

/*  TOTALIZADOR SALIDA  */
    Route::resource('/totalizadorSalida', 'totSalidaController');
/************/

/*  TOTALIZADOR SALIDA  */
    Route::resource('/transferenciasAutoFacturas', 'TransferAutoFacController');
/************/

/*  PAGINAS ESTATICAS  */
    Route::get('/{nom}', 'pagEstaticasController@mostrar');
/************/

Auth::routes();

Route::group(array('before' => 'auth'), function(){
    
});