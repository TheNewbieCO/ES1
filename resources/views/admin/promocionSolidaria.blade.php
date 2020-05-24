@extends('layouts.mainAdmin')

@section('contentAdmin')
    <div id="pnlPromo" class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h4 class="card-title"><span id="pnlTit"></span>Promocion Solidaria</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3 form-group">
                            <label for="idPais">Pais</label>
                            <select class="form-control" name="idPais" id="idPais" style="width: 100% !important"></select>
                            <p id="errPais" class="text-danger" style="display: none;"><em>Debe seleccionar un pais</em></p>
                        </div>                    
                        <div class="col-lg-3 col-md-3 col-sm-3 form-group">
                            <label for="idEmpresa">Empresa</label>
                            <select class="form-control" name="idEmpresa" id="idEmpresa" style="width: 100% !important"></select>
                            <p id="errEmpresa" class="text-danger" style="display: none;"><em>Debe seleccionar una empresa</em></p>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 form-group">
                            <label for="idTemaEmp">Tematica</label>
                            <select class="form-control" name="idTemaEmp" id="idTemaEmp" style="width: 100% !important"></select>
                            <p id="errTemaEmp" class="text-danger" style="display: none;"><em>Debe seleccionar una tematica</em></p>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 form-group">
                            <label for="titulo" class="">Titulo</label>
                            <input name="titulo" id="titulo" type="text" class="form-control">
                            <p id="errTitulo" class="text-danger" style="display: none;"><em>El campo titulo debe estar lleno</em></p>
                        </div>                                                                         
                    </div>

                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3 form-group">
                            <label for="fecini" class="">Fecha Desde</label>
                            <input name="fecini" id="fecini" type="datetime-local" class="form-control">
                            <p id="errFecIni" class="text-danger" style="display: none;"><em>Debe seleccionar una fecha desde</em></p>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 form-group">
                            <label for="fecfin" class="">Fecha Hasta</label>
                            <input name="fecfin" id="fecfin" type="datetime-local" class="form-control">
                            <p id="errFecFin" class="text-danger" style="display: none;"><em>Debe seleccionar una fecha hasta</em></p>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 form-group">
                            <label for="cantDona" class="">Cantidad Donada</label>
                            <input name="cantDona" id="cantDona" type="text"  class="form-control">
                            <p id="errCantDona" class="text-danger" style="display: none;"><em>El campo cantidad donada debe estar lleno</em></p>
                        </div>                        
                        <div class="col-lg-3 col-md-3 col-sm-3 form-group">
                            <label for="imagen" class="">Imagen</label>
                            <input name="imagen" id="imagen" type="text"  class="form-control">
                            <p id="errImagen" class="text-danger" style="display: none;"><em>Debe seleccionar una imagen</em></p>                    
                        </div>                                                
                    </div>

                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <div class="position-relative form-group">
                                <label for="selEstado" class="">Estado</label>
                                <select name="selEstado" id="selEstado" class="form-control">
                                    <option value="1">Activo</option>
                                    <option value="2">Inactivo</option>
                                </select>
                            </div>                        
                        </div> 
                        <div class="col-lg-6 col-md-6 col-sm-6 form-group">
                            <label for="descripcion">Descripcion</label>
                            <textarea class="form-control" id="descripcion" rows="3"></textarea>
                        </div>                                               
                    </div>

                    <input name="idPromo" id="idPromo" type="text" class="form-control" hidden>
                    <input name="accion" id="accion" type="text" class="form-control" hidden>

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
                    <h3 class="card-title">Listado de promociones</h3>

                    <div class="card-tools">
                        <ul class="nav nav-pills ml-auto">
                            <li class="nav-item">
                                <button class="btn btn-primary" onclick='nuevo()'>Nueva</button>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive cell-border compact stripe">                    
                        <table class="table table-bordered mb-0" style="width: 100% !important;" id="tablaPromo">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Fecha alta</th>
                                    <th>Fecha modificacion</th>                                    
                                    <th>Titulo</th>
                                    <th>ID Empresa</th>
                                    <th>Empresa</th>
                                    <th>Tematica</th>
                                    <th>Cantidad donada</th>
                                    <th>Fecha desde</th>
                                    <th>Fecha hasta</th>
                                    <th>Estado</th>
                                    <th>ID Pais</th>
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
            $("#pnlPromo").hide();
            var table = $('#tablaPromo').DataTable({
                "language": {
                    "emptyTable":			"No hay datos disponibles en la tabla.",
                    "info":		   		"Del _START_ al _END_ de _TOTAL_ ",
                    "infoEmpty":			"Mostrando 0 registros de un total de 0.",
                    "infoFiltered":			"(filtrados de un total de _MAX_ registros)",
                    "infoPostFix":			"(actualizados)",
                    "lengthMenu":			"Mostrar _MENU_ registros",
                    "loadingRecords":		"Cargando...",
                    "processing":			"Procesando...",
                    "search":			"Buscar:",
                    "searchPlaceholder":		"Dato para buscar",
                    "zeroRecords":			"No se han encontrado coincidencias.",
                    "paginate": {
                        "first":			"Primera",
                        "last":				"Última",
                        "next":				"Siguiente",
                        "previous":			"Anterior"
                    },
                    "aria": {
                        "sortAscending":	"Ordenación ascendente",
                        "sortDescending":	"Ordenación descendente"
                    }
                },                
                processing: true,
                serverSide: true,
                ajax: "{{ url('/promocionesSolidarias/show') }}",
                columns: [
                    { data: 'id_promocion', "visible": false },
                    { data: 'fecha_alta' },
                    { data: 'fecha_modificacion' },                    
                    { data: 'titulo' },
                    { data: 'id_usuempresa', "visible": false },
                    { data: 'nombreEmp' },
                    { data: 'tematica' },
                    { data: 'cant_donada' },
                    { data: 'fecha_desde' },
                    { data: 'fecha_hasta' },
                    { data: 'estado' },
                    { data: 'id_pais', "visible": false },
                    { data: 'nombrePai' },
                    { defaultContent: "<button class='btn btn-secondary' data-placement='bottom' data-html='true' title='Modificar' onclick='editar()' type='button'>"+
                        "<i class='fas fa-pencil-alt'></i></button> &nbsp; "+
                        "<button class='btn btn-danger' data-placement='bottom' data-html='true' title='Eliminar' onclick='eliminar()' type='button'>"+
                        "<i class='fas fa-trash'></i></button>"}
                ]
                            
            });

            $('#tablaPromo tbody').on( 'click', 'tr', function () {
                if ( $(this).hasClass('selected') ) {
                    $(this).removeClass('selected');
                }
                else {
                    table.$('tr.selected').removeClass('selected');
                    $(this).addClass('selected');
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

            $('#idEmpresa').select2({
                ajax: {
                    url: 'listCmbUsuEmp',
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

        function nuevo(){
            limpiarCampos();
            $("#pnlPromo").fadeIn(900);
            $("#accion").val('1');
            $("#titulo").focus();
            document.getElementById("pnlTit").innerHTML = "Nuevo ";
        };

        function cancelar(){
            limpiarCampos();
            $("#pnlPromo").fadeOut(300);
        };

        function limpiarCampos(){
            $("#titulo").val('');
            $("#descripcion").val('');
            $("#imagen").val('').trigger('change');
            $("#idEmpresa").val('').trigger('change');
            $("#idPais").val('').trigger('change');            
            $("#idTemaEmp").val('').trigger('change');            
            $("#cantDona").val('');
            $("#fecini").val('');
            $("#fecfin").val('');
            $("#idPromo").val('');
            $("#accion").val('');                                                
        };        

        function guardar(){
            var titulo = document.getElementById("titulo").value;
            var descripcion = document.getElementById("descripcion").value;
            var imagen = document.getElementById("imagen").value;
            var idEmpresa = document.getElementById("idEmpresa").value;
            var idPais = document.getElementById("idPais").value;
            var idTemaEmp = document.getElementById("idTemaEmp").value;
            var cantDona = document.getElementById("cantDona").value;
            var fecini = document.getElementById("fecini").value;
            var fecfin = document.getElementById("fecfin").value;
            var selEstado = document.getElementById("selEstado").value;
            var idPromo = document.getElementById("idPromo").value;
            var tipoAcc = document.getElementById("accion").value;
            var cantErr = 0;

            if(titulo == ''){
                $('#titulo').addClass("is-invalid");
                $('#errTitulo').css("display","block");
                cantErr ++ ;
            }else{
                $('#titulo').removeClass("is-invalid");
                $('#errTitulo').css("display","none");
            }
            if(descripcion == ''){
                $('#descripcion').addClass("is-invalid");
                $('#errDescripcion').css("display","block");
                cantErr ++ ;
            }else{
                $('#descripcion').removeClass("is-invalid");
                $('#errDescripcion').css("display","none");
            }
            if(idEmpresa == ''){
                $('#errEmpresa').css("display","block");
                cantErr ++ ;
            }else{
                $('#errEmpresa').css("display","none");
            }
            if(idPais == ''){
                $('#errPais').css("display","block");
                cantErr ++ ;
            }else{
                $('#errPais').css("display","none");
            }
            if(idTemaEmp == ''){
                $('#errTemaEmp').css("display","block");
                cantErr ++ ;
            }else{
                $('#errTemaEmp').css("display","none");
            }                        
            if(cantDona == ''){
                $('#cantDona').addClass("is-invalid");
                $('#errCantDona').css("display","block");
                cantErr ++ ;
            }else{
                $('#cantDona').removeClass("is-invalid");
                $('#errCantDona').css("display","none");
            }       
            if(fecini == ''){
                $('#fecini').addClass("is-invalid");
                $('#errFecIni').css("display","block");
                cantErr ++ ;
            }else{
                $('#fecini').removeClass("is-invalid");
                $('#errFecIni').css("display","none");
            }
            if(fecfin == ''){
                $('#fecfin').addClass("is-invalid");
                $('#errFecFin').css("display","block");
                cantErr ++ ;
            }else{
                $('#fecfin').removeClass("is-invalid");
                $('#errFecFin').css("display","none");
            }            

            if(cantErr == 0){
                if(tipoAcc == '1'){ // 1 - significa que esta insertando
                    $.ajax({
                        url: "/promocionesSolidarias",
                        type: 'POST',
                        data: {'titulo':titulo,'descripcion':descripcion,'imagen':imagen,'id_empresa':idEmpresa,'id_pais':idPais,'id_temaemp':idTemaEmp,'cantDona':cantDona,'fecini':fecini,'fecfin':fecfin,'selEstado':selEstado},
                        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                        error: function(err) {
                            mensajes('Error',err.statusText+" : "+err.responseJSON['message'],'error');
                        },
                        success: function(res) {
                            mensajes('Exito!',res,'success');
                            $("#pnlPromo").fadeOut(300);
                            $('#tablaPromo').DataTable().ajax.reload(null, false);
                            limpiarCampos();
                            return false;
                        }
                    });
                }
                
                if(tipoAcc == '2'){ // 2 significa que esta actualizando
                    $.ajax({
                        url: "/promocionesSolidarias/"+idPromo,
                        type: 'PUT',
                        data: {'titulo':titulo,'descripcion':descripcion,'imagen':imagen,'id_empresa':idEmpresa,'id_pais':idPais,'id_temaemp':idTemaEmp,'cantDona':cantDona,'fecini':fecini,'fecfin':fecfin,'selEstado':selEstado},
                        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},                  
                        error: function(err) {
                            mensajes('Error',err.statusText+" : "+err.responseJSON['message'],'error');
                        },
                        success: function(res) {
                            mensajes('Exito!',res,'success');
                            $("#pnlPromo").fadeOut(300);
                            $('#tablaPromo').DataTable().ajax.reload(null, false);
                            limpiarCampos();
                            return false;
                        }
                    });
                }            
            }
        };

        function eliminar(){
            var table = $('#tablaPromo').DataTable();
            $('#tablaPromo tbody').on( 'click', 'tr', function () {
                var idx = table.row(this).index();
                var arrData = table.row(idx).data();

                swal({
                    title: "Esta seguro de eliminar este registro?",
                    text: "Una vez eliminado no podra recuperarlo!",
                    icon: "warning",
                    buttons: ["No", "Si"],
                    dangerMode: true,
                    })
                .then((willDelete) => {
                    if (willDelete) {
                        $.ajax({
                            url: "/promocionesSolidarias/"+arrData['id_pais'],
                            type: 'DELETE',
                            data: {},
                            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                            error: function(err) {
                                mensajes('Error',err.statusText+" : "+err.responseJSON['message'],'error');
                            },
                            success: function(res) {
                                mensajes('Exito!',res,'success');
                                $('#tablaPromo').DataTable().ajax.reload(null, false);
                                cancelar();
                                return false;
                            }
                        });
                    }
                });
            });
        };

        function editar(){
            var table = $('#tablaPromo').DataTable();
            $('#tablaPromo tbody').on( 'click', 'tr', function () {
                var idx = table.row(this).index();
                var arrData = table.row(idx).data();

                document.getElementById("pnlTit").innerHTML = "Modificar ";                    
                $("#nombrePai").val(arrData['nombre']);
                $("#codIso").val(arrData['codISO']);
                $("#moneda").val(arrData['moneda']);
                $("#idioma").val(arrData['idioma']);
                $("#costeRecib").val(arrData['coste_recibo']);
                $("#costeTrans").val(arrData['coste_tranferencia']);
                $("#miniPromo").val(arrData['minima_promo']);
                $("#idPromo").val(arrData['id_pais']);

                $("#estado").val(arrData['estado']);
                $("#accion").val('2');
            });

            $("#pnlPromo").fadeIn(900);
            $("#nombrePai").focus();
        };        
    </script>
@endsection