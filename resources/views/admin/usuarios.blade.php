@extends('layouts.mainAdmin')

@section('contentAdmin')
    <div id="pnlUsuario" class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h4 class="card-title"><span id="titPnl"></span> Usuario</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <label for="idPais">Pais</label>
                            <select class="form-control" name="idPais" id="idPais" style="width: 100% !important"></select>
                            <p id="errPais" class="text-danger" style="display: none;"><em>Debe seleccionar un pais</em></p>
                        </div>                    
                        <div class="col-lg-3 col-md-3 col-sm-3 form-group">
                            <label for="nombre" class="">Nombre</label>
                            <input name="nombre" id="nombre" type="text"  class="form-control">
                            <p id="errNombre" class="text-danger" style="display: none;"><em>El campo codigo iso debe estar lleno</em></p>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 form-group">
                            <label for="clave" class="">Contraseña</label>
                            <input name="clave" id="clave" type="text" class="form-control">
                            <p id="errClave" class="text-danger" style="display: none;"><em>El campo nombre debe estar lleno</em></p>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <label for="tipoUsu">Tipo usuario</label>
                            <select class="form-control" name="tipoUsu" id="tipoUsu" style="width: 100% !important"></select>
                            <p id="errTipoUsu" class="text-danger" style="display: none;"><em>Debe seleccionar un tipo de usuario</em></p>
                        </div>                                      
                    </div>

                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3 ">
                            <label for="idProvincia">Provincia</label>
                            <select class="form-control" name="idProvincia[]" id="idProvincia" multiple="multiple" style="width: 100% !important"></select>
                            <p id="errProvincia" class="text-danger" style="display: none;"><em>Debe seleccionar una provincia</em></p>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <label for="idPobla">Poblacion</label>
                            <input name="idPobla" id="idPobla" type="text"  class="form-control">
                            <p id="errPoblacion" class="text-danger" style="display: none;"><em>El campo poblacion debe estar lleno</em></p>                       
                        </div>                     
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <label for="codpostal" class="">Codigo postal</label>
                            <input name="codpostal" id="codpostal" type="text"  class="form-control">
                            <p id="errCP" class="text-danger" style="display: none;"><em>El campo codigo postal debe estar lleno</em></p>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <label for="direccion" class="">Direccion</label>
                            <input name="direccion" id="direccion" type="text" class="form-control">
                            <p id="errDirec" class="text-danger" style="display: none;"><em>El campo direccion debe estar lleno</em></p>
                        </div>                    
                    </div>

                    <div class="row">                
                        <div class="col-lg-3 col-md-3 col-sm-3 form-group">
                            <label for="email" class="">Correo</label>
                            <input name="email" id="email" type="text" class="form-control">
                            <p id="errEmail" class="text-danger" style="display: none;"><em>El campo email debe estar lleno</em></p>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <label for="telefono" class="">Telefono</label>
                            <input name="telefono" id="telefono" type="text" class="form-control">
                            <p id="errTel" class="text-danger" style="display: none;"><em>El campo telefono debe estar lleno</em></p>
                        </div>                                      
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <label for="cif" class="">CIF</label>
                            <input name="cif" id="cif" type="text" class="form-control">
                            <p id="errCif" class="text-danger" style="display: none;"><em>El campo CIF debe estar lleno</em></p>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <label for="cuentaBank" class="">Cuenta bancaria</label>
                            <input name="cuentaBank" id="cuentaBank" type="text" class="form-control">
                            <p id="errCuentaBank" class="text-danger" style="display: none;"><em>El campo cuenta bancaria debe estar lleno</em></p>
                        </div>                    
                    </div>

                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3 ">
                            <label for="temaEmp">Tematica empresa</label>
                            <select class="form-control" name="temaEmp" id="temaEmp" style="width: 100% !important"></select>
                            <p id="errTemaEmp" class="text-danger" style="display: none;"><em>Debe seleccionar una tematica empresa</em></p>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <label for="temaEnt">Tematica entidad</label>
                            <select class="form-control" name="temaEnt" id="temaEnt" style="width: 100% !important"></select>
                            <p id="errTemaEnt" class="text-danger" style="display: none;"><em>Debe seleccionar una tematica entidad</em></p>                      
                        </div>                                      
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <div class="position-relative form-group">
                                <label for="selEstado" class="">Entidad asociada</label>
                                <select name="selEstado" id="selEstado" class="form-control">
                                    <option value="1">alguna</option>
                                    <option value="1">alguna</option>
                                </select>
                            </div>                        
                        </div> 
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <label for="nombrePai" class="">Imagen</label>
                            <input name="nombrePai" id="nombrePai" type="text" class="form-control">
                            <p id="errNomPai" class="text-danger" style="display: none;"><em>El campo nombre debe estar lleno</em></p>
                        </div>                    
                    </div>         

                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3 form-group">
                            <label for="link" class="">Link</label>
                            <input name="link" id="link" type="text" class="form-control">
                            <p id="errLink" class="text-danger" style="display: none;"><em>El campo link debe estar lleno</em></p>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <label for="cuota">Cuota</label>
                            <select class="form-control" name="cuota" id="cuota" style="width: 100% !important"></select>
                            <p id="errCuota" class="text-danger" style="display: none;"><em>Debe seleccionar una cuota</em></p>                       
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 form-group">
                            <label for="porc_dona" class="">% a donar</label>
                            <input name="porc_dona" id="porc_dona" type="text" class="form-control">
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <label for="id_profesional">Tipo profesional</label>
                            <select class="form-control" name="id_profesional" id="id_profesional" style="width: 100% !important"></select>
                            <p id="errIdProfes" class="text-danger" style="display: none;"><em>Debe seleccionar un tipo de profesional</em></p>                       
                        </div>                        
                    </div>

                    <div class="row">     
                        <div class="col-lg-3 col-md-3 col-sm-3 form-group">
                            <label for="linkFacebook" class="">Link facebook</label>
                            <input name="linkFacebook" id="linkFacebook" type="text" class="form-control">
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <label for="linkInsta" class="">Link instagram</label>
                            <input name="linkInsta" id="linkInsta" type="text" class="form-control">
                        </div> 
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <label for="linkTwitter" class="">Link twitter</label>
                            <input name="linkTwitter" id="linkTwitter" type="text" class="form-control">
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <label for="linkYoutube" class="">Link youtube</label>
                            <input name="linkYoutube" id="linkYoutube" type="text" class="form-control">
                        </div>                    
                    </div>

                    <div class="row">     
                        <div class="col-lg-3 col-md-3 col-sm-3 form-group">
                            <label for="salIncentivo" class="">Saldo incentivo</label>
                            <input name="salIncentivo" id="salIncentivo" type="text" class="form-control">
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <label for="canalCompra" class="">Canal de compra</label>
                            <input name="canalCompra" id="canalCompra" type="text" class="form-control">
                        </div>                    
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <label for="usuCapta" class="">Usuario Captador</label>
                            <input name="usuCapta" id="usuCapta" type="text" class="form-control">
                        </div> 
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <label for="usuContra" class="">Usuario Contratante</label>
                            <input name="usuContra" id="usuContra" type="text" class="form-control">
                        </div>                    
                    </div>

                    <div class="row">     
                        <div class="col-lg-3 col-md-3 col-sm-3 form-group">
                            <label for="tiempoConfirma" class="">Tiempo Confirmacion</label>
                            <input name="tiempoConfirma" id="tiempoConfirma" type="text" class="form-control">
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <label for="fechaConfirma" class="">Fecha Confirmacion</label>
                            <input name="fechaConfirma" id="fechaConfirma" type="text" class="form-control">
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <label for="linkTienda" class="">Link Tiendas</label>
                            <input name="linkTienda" id="linkTienda" type="text" class="form-control">
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <div class="position-relative form-group">
                                <label for="selEstado" class="">Estado</label>
                                <select name="selEstado" id="selEstado" class="form-control">
                                    <option value="1">Activo</option>
                                    <option value="2">Inactivo</option>
                                </select>
                            </div>                        
                        </div>                                                
                    </div>

                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 form-group">
                            <label for="descripcion">Descripcion</label>
                            <textarea class="form-control" id="descripcion" rows="3"></textarea>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <div class="position-relative form-group">
                                <label for="selContratante" class="">Contratante</label>
                                <select name="selContratante" id="selContratante" class="form-control">
                                    <option value="SI">Si</option>
                                    <option value="NO">No</option>
                                </select>
                            </div>                        
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 form-group">
                            <label for="fechaContrata" class="">Fecha Contratacion</label>
                            <input name="fechaContrata" id="fechaContrata" type="text" class="form-control">
                        </div>                        
                    </div>

                    <div class="row">                        
                        <div class="col-lg-6 col-md-6 col-sm-6 form-group">
                            <input type="file">
                        </div>
                    </div>                     

                    <div class="row">
                        <button class="mb-2 mr-2 btn btn-success ml-auto" onclick='guardar()'>Aceptar</button>
                        <button class="mb-2 mr-2 btn btn-danger" onclick='cancelar()'>Cancelar</button>
                    </div>
                </div>
            </div>
            <br>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h3 class="card-title">Listado usuarios</h3>

                    <div class="card-tools">
                        <ul class="nav nav-pills ml-auto">
                            <li class="nav-item">
                                <button class="btn btn-primary" onclick='nuevo()'>Nuevo</button>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive cell-border compact stripe">                    
                        <table class="table table-bordered mb-0" style="width: 100% !important;" id="tablaUsuarios">
                            <thead>
                                <tr>
                                    <th>Fecha alta</th>
                                    <th>Fecha modificacion</th>                                
                                    <th>Id</th>
                                    <th>Contraseña</th>
                                    <th>Nombre</th>
                                    <th>Tipo Usuario</th>
                                    <th>Tematica</th>
                                    <th>Usuario Captador</th>
                                    <th>Usuario Contratante</th>
                                    <th>Contratante</th>
                                    <th>Saldo Incentivo</th>
                                    <th>% a Donar</th>
                                    <th>Tipo Profesional</th>
                                    <th>Pais</th>
                                    <th>Opciones</th>
                                </tr>
                            </thead>
                        </table>
                    </div>                  
                </div>
            </div>            
        </div>
    </div>    

    <script>
        $(function() {

            $('#tipoUsu').select2({
                ajax: {
                    url: 'listaCmbTipUsu',
                    dataType: 'json',
                    data: function (params) {
                        return {
                            busqueda: params.term,
                        };
                    },
                    processResults: function (data) {
                        return {
                            results: data
                        };
                    },
                    cache: true
                },
                placeholder: 'Seleccione ...',
                language: {
                    noResults: function() {
                        return "No hay resultados";        
                    },
                    searching: function() {
                        return "Buscando...";
                    }
                }         
            });

            $('#idPais').select2({
                ajax: {
                    url: 'listCmbPais',
                    dataType: 'json',
                    data: function (params) {
                        return {
                            busqueda: params.term,
                        };
                    },
                    processResults: function (data) {
                        return {
                            results: data
                        };
                    },
                    cache: true
                },
                placeholder: 'Seleccione ...',
                language: {
                    noResults: function() {
                        return "No hay resultados";        
                    },
                    searching: function() {
                        return "Buscando...";
                    }
                }         
            }); 

            $('#idProvincia').select2({
                ajax: {
                    url: 'listaCmbProvincia',
                    dataType: 'json',
                    data: function (params) {
                        return {
                            busqueda: params.term,
                        };
                    },
                    processResults: function (data) {
                        return {
                            results: data
                        };
                    },
                    cache: true
                },
                placeholder: 'Seleccione ...',
                language: {
                    noResults: function() {
                        return "No hay resultados";        
                    },
                    searching: function() {
                        return "Buscando...";
                    }
                }         
            });

            $('#cuota').select2({
                ajax: {
                    url: 'listaCmbEpl',
                    dataType: 'json',
                    data: function (params) {
                        return {
                            busqueda: params.term,
                        };
                    },
                    processResults: function (data) {
                        return {
                            results: data
                        };
                    },
                    cache: true
                },
                placeholder: 'Seleccione ...',
                language: {
                    noResults: function() {
                        return "No hay resultados";        
                    },
                    searching: function() {
                        return "Buscando...";
                    }
                }         
            });

            $('#id_profesional').select2({
                ajax: {
                    url: 'listaCmbTipPro',
                    dataType: 'json',
                    data: function (params) {
                        return {
                            busqueda: params.term,
                        };
                    },
                    processResults: function (data) {
                        return {
                            results: data
                        };
                    },
                    cache: true
                },
                placeholder: 'Seleccione ...',
                language: {
                    noResults: function() {
                        return "No hay resultados";        
                    },
                    searching: function() {
                        return "Buscando...";
                    }
                }         
            });        
        });
    </script>        
@endsection