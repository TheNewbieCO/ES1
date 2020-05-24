@extends('layouts.mainInicio')

@section('contentInicio')
    <div class="w-100 d-flex" style="margin-top: 104px;">
        <div class="aos-init aos-animate w-100" data-aos="fade-up" style="background-color: #2ea3f2; padding: 10px 30px 3px 30px;">
            <h5 style="color:#FFFFFF;">Iniciar sesión / Registrarse</h5>
        </div>
    </div>

    <section id="hero" class="d-flex align-items-center" style="background-color: #fff !important; height: auto; margin-top: 0px;">
        <div class="container">
            <div class="col-lg-12 col-md-12 col-sm-12">    
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-5 col-md-5 col-sm-12" style="border-right: 1px outset #f3f3f3;">
                                <div class="heading-line-bottom" style="margin-bottom: 15px;">
                                    <h6 class="heading-title mt-0">Acceso</h6>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <label for="usuario" class="">Usuario Solidario</label>
                                        <input name="usuario" id="usuario" type="text" class="form-control">
                                        <p id="errUsuario" class="text-danger" style="display: none;"><em>El campo usuario debe estar lleno</em></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <label for="clave" class="">Contraseña</label>
                                        <input name="clave" id="clave" type="password" class="form-control">
                                        <p id="errClave" class="text-danger" style="display: none;"><em>El campo clave debe estar lleno</em></p>
                                    </div>                                                            
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <div class="g-recaptcha" data-sitekey="6LepRfkUAAAAAM6tanQtLzdxrr9XJAbeWQt_Rq-v"></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 form-group">
                                        <button class="mb-2 mr-2 btn btn-info ml-auto" onclick='Ingreso()'>Ingresar</button>
                                    </div>
                                </div>                            
                            </div>
                            <div class="col-lg-7 col-md-7 col-sm-12" style="padding-left: 120px;">
                                <div class="heading-line-bottom" style="margin-bottom: 15px;">
                                    <h6 class="heading-title mt-0">¿No tienes cuenta?, registra una cuenta</h6>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 mt-auto form-group">
                                        <label for="idTipoUsu">Tipo Usuario</label>
                                        <select class="form-control" name="idTipoUsu" id="idTipoUsu" style="width: 100% !important" onchange="verTematica(this.value)"></select>
                                        <p id="errTipoUsu" class="text-danger" style="display: none;"><em>Debe seleccionar un tipo de usuario</em></p>
                                    </div>
                                    <div id="temaEmp" class="col-lg-6 col-md-6 col-sm-6 mt-auto form-group">
                                        <label for="idTemaEmp">Tematica Empresa</label>
                                        <select class="form-control" name="idTemaEmp" id="idTemaEmp" style="width: 100% !important"></select>
                                    </div>
                                    <div id="temaEnt" class="col-lg-6 col-md-6 col-sm-6 mt-auto form-group">
                                        <label for="idTemaEnt" class="">Tematica Entidad</label>
                                        <select class="form-control" name="idTemaEnt" id="idTemaEnt" style="width: 100% !important"></select>
                                    </div>                                    
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 mt-auto form-group">
                                        <label for="correo" class="">Correo</label>
                                        <input name="correo" id="correo" type="text" class="form-control">
                                        <p id="errCorreo" class="text-danger" style="display: none;"><em>El campo correo debe estar lleno</em></p>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 mt-auto form-group">
                                        <label for="clave" class="">Contraseña</label>
                                        <input name="clave" id="clave" type="password" class="form-control">
                                        <p id="errClave" class="text-danger" style="display: none;"><em>El campo clave debe estar lleno</em></p>
                                    </div>
                                </div>
                                <div id="otrosDatos1" class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 mt-auto form-group">
                                        <label for="nombre" class="">Nombre</label>
                                        <input name="nombre" id="nombre" type="text" class="form-control">
                                        <p id="errNombre" class="text-danger" style="display: none;"><em>El campo nombre debe estar lleno</em></p>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 mt-auto form-group">
                                        <label for="cp" class="">Codigo Postal</label>
                                        <input name="cp" id="cp" type="text" class="form-control">
                                        <p id="errCp" class="text-danger" style="display: none;"><em>El campo codigo postal debe estar lleno</em></p>
                                    </div>
                                </div>
                                <div id="otrosDatos2" class="row">                            
                                    <div class="col-lg-6 col-md-6 col-sm-6 mt-auto form-group">
                                        <label for="poblacion" class="">Poblacion</label>
                                        <input name="poblacion" id="poblacion" type="text" class="form-control">
                                        <p id="errPoblacion" class="text-danger" style="display: none;"><em>El campo poblacion debe estar lleno</em></p>
                                    </div>                            
                                    <div class="col-lg-6 col-md-6 col-sm-6 mt-auto form-group">
                                        <label for="idProvin">Provincia</label>
                                        <select class="form-control" name="idProvin" id="idProvin" style="width: 100% !important"></select>
                                    </div>                            
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <div class="g-recaptcha" data-sitekey="6LepRfkUAAAAAM6tanQtLzdxrr9XJAbeWQt_Rq-v"></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 form-group">
                                        <button class="mb-2 mr-2 btn btn-info ml-auto" onclick='guardar()'>Aceptar</button>
                                    </div>
                                </div>
                            </div>              
                        </div>                
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        $(function() {
            $('#idTipoUsu').select2({
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

            $('#idTemaEmp').select2({
                ajax: {
                    url: 'listaCmbTemaEmp',
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

            $('#idTemaEnt').select2({
                ajax: {
                    url: 'listaCmbTemaEnt',
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

            $('#idProvin').select2({
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

            $('#idTipoUsu').empty().append($("<option/>").val(3).text('Usuario Solidario')).val(3).trigger("change");

            var temaEmp = document.getElementById("temaEmp");
            temaEmp.style.display = 'none';

            var temaEnt = document.getElementById("temaEnt");
            temaEnt.style.display = 'none';

            var otrosDatos1 = document.getElementById("otrosDatos1");
            otrosDatos1.style.display = 'none';

            var otrosDatos2 = document.getElementById("otrosDatos2");
            otrosDatos2.style.display = 'none';            
        });

        function verTematica(dato){
            var temaEmp = document.getElementById("temaEmp");
            var temaEnt = document.getElementById("temaEnt");
            var otrosDatos1 = document.getElementById("otrosDatos1");
            var otrosDatos2 = document.getElementById("otrosDatos2");

            if(dato == 1){
                temaEmp.style.display = 'block';
                temaEnt.style.display = 'none';
                otrosDatos1.style.display = 'flex';
                otrosDatos2.style.display = 'flex';
            }

            if(dato == 2){
                temaEmp.style.display = 'none';
                temaEnt.style.display = 'block';
                otrosDatos1.style.display = 'flex';
                otrosDatos2.style.display = 'flex';
            }

            if(dato == 3){
                temaEmp.style.display = 'none';
                temaEnt.style.display = 'none';
                otrosDatos1.style.display = 'none';
                otrosDatos2.style.display = 'none';
            }                        

        };

        function mensajes($titulo,$texto,$tipo){
            swal({
                title: $titulo,
                text: $texto,
                icon: $tipo,
                buttons: false,
                timer: 1400,
            });
        };   
    </script>
@endsection