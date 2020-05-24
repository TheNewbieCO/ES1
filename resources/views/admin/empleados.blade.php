@extends('layouts.mainAdmin')

@section('contentAdmin')
<div id="pnlEmpleado" class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card card-primary card-outline">
            <div class="card-header">
                <h4 class="card-title"><span id="titPnl"></span> Empleado</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 mt-auto form-group">
                        <label for="idPais">Pais</label>
                        <select class="form-control" name="idPais" id="idPais" style="width: 100% !important"></select>
                        <p id="errPais" class="text-danger" style="display: none;"><em>Debe seleccionar un pais</em></p>
                    </div>                 
                    <div class="col-lg-3 col-md-3 col-sm-3 form-group">
                        <label for="titFranja" class="">Franja</label>
                        <input name="titFranja" id="titFranja" type="text" class="form-control">
                        <p id="errTitFranja" class="text-danger" style="display: none;"><em>El campo franja debe estar lleno</em></p>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 form-group">
                        <label for="cuota" class="">Cuota</label>
                        <input name="cuota" id="cuota" type="text" class="form-control">
                        <p id="errCuota" class="text-danger" style="display: none;"><em>El campo cuota debe estar lleno</em></p>
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
                    <input name="idEmpleado" id="idEmpleado" type="text" class="form-control" hidden>
                    <input name="accion" id="accion" type="text" class="form-control" hidden>
                </div>
                <div class="row">
                    <button class="mb-2 mr-2 btn btn-success ml-auto" onclick='guardar()'>Aceptar</button>
                    <button class="mb-2 mr-2 btn btn-danger" onclick='cancelar()'>Cancelar</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card card-primary card-outline">
            <div class="card-header">
                <h3 class="card-title">Listado franjas de empleados</h3>

                <div class="card-tools">
                    <ul class="nav nav-pills ml-auto">
                        <li class="nav-item">
                            <button class="btn btn-primary" onclick='nuevo()'>Nuevo</button>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">                    
                    <table class="table display table-striped table-bordered " style="width: 100% !important;" id="tablaEmpleados">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Fecha de alta</th>
                                <th>Fecha de modificacion</th>                                
                                <th>Titulo</th>
                                <th>Cuota</th>
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
        $("#pnlEmpleado").hide();

        let table = $('#tablaEmpleados').DataTable({
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
            ajax: "{{ url('/empleados/show') }}",
            columns: [
                { data: 'id_empleado', "visible": false },
                { data: 'fecha_alta' },
                { data: 'fecha_modificacion' },                
                { data: 'titulo_franja' },
                { data: 'cuota' },
                { data: 'estado' },
                { data: 'id_pais', "visible": false },
                { data: 'nombre' },                
                { defaultContent: "<button class='btn btn-info' id='btnedit' data-placement='bottom' data-html='true' title='Modificar' onclick='editar()' type='button'>"+
                    "<i class='fas fa-pencil-alt'></i></button> &nbsp; "+
                    "<button class='btn btn-danger' data-placement='bottom' data-html='true' title='Eliminar' onclick='eliminar()' type='button'>"+
                    "<i class='fas fa-trash'></i></button>"}
            ],
            "order": [[3, 'desc']]
        });

        $('#tablaEmpleados tbody').on( 'click', 'tr', function () {
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
    });

    function nuevo(){
        limpiarCampos();        
        $("#pnlEmpleado").fadeIn(900);
        $("#accion").val('1');
        $("#titFranja").focus();
        document.getElementById("titPnl").innerHTML = "Nuevo ";
    };

    function guardar(){
        var titFranja = document.getElementById("titFranja").value;
        var cuota = document.getElementById("cuota").value;
        var selEstado = document.getElementById("selEstado").value;
        var idPais = document.getElementById("idPais").value;
        var idEmpleado = document.getElementById("idEmpleado").value;
        var tipoAcc = document.getElementById("accion").value;
        var cantErr = 0;

        if(titFranja == ''){
            $('#titFranja').addClass("is-invalid");
            $('#errTitFranja').css("display","block");
            cantErr ++ ;
        }else{
            $('#titFranja').removeClass("is-invalid");
            $('#errTitFranja').css("display","none");
        }
        if(cuota == ''){
            $('#cuota').addClass("is-invalid");
            $('#errCuota').css("display","block");
            cantErr ++ ;
        }else{
            $('#cuota').removeClass("is-invalid");
            $('#errCuota').css("display","none");
        }
        if(idPais == ''){
            $('#errPais').css("display","block");
            cantErr ++ ;
        }else{
            $('#errPais').css("display","none");
        }         

        if(cantErr == 0){
            if(tipoAcc == '1'){ // 1 - significa que esta insertando
                $.ajax({
                    url: "/empleados",
                    type: 'POST',
                    data: {'titFranja':titFranja,'cuota':cuota,'id_pais':idPais,'selEstado':selEstado},
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    error: function(err) {
                        mensajes('Error',err.statusText+" : "+err.responseJSON['message'],'error');
                    },
                    success: function(res) {
                        mensajes('Exito!',res,'success');
                        $("#pnlEmpleado").fadeOut(300);
                        $('#tablaEmpleados').DataTable().ajax.reload();
                        limpiarCampos();
                        return false;
                    }
                });
            }
            
            if(tipoAcc == '2'){ // 2 significa que esta actualizando
                $.ajax({
                    url: "/empleados/"+idEmpleado,
                    type: 'PUT',
                    data: {'titFranja':titFranja,'cuota':cuota,'id_pais':idPais,'selEstado':selEstado},
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},                  
                    error: function(err) {
                        mensajes('Error',err.statusText+" : "+err.responseJSON['message'],'error');
                    },
                    success: function(res) {
                        mensajes('Exito!',res,'success');
                        $("#pnlEmpleado").fadeOut(300);
                        $('#tablaEmpleados').DataTable().ajax.reload();
                        limpiarCampos();
                        return false;
                    }
                });
            }            
        }
    };

    function cancelar(){
        $("#pnlEmpleado").fadeOut(300);
        limpiarCampos();
    };

    function eliminar(){
        var table = $('#tablaEmpleados').DataTable();
        $('#tablaEmpleados tbody').on( 'click', 'tr', function () {
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
                        url: "/empleados/"+arrData['id_empleado'],
                        type: 'DELETE',
                        data: {},
                        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},                  
                        error: function(err) {
                            mensajes('Error',err.statusText+" : "+err.responseJSON['message'],'error');
                        },
                        success: function(res) {
                            mensajes('Exito!',res,'success');
                            $('#tablaEmpleados').DataTable().ajax.reload();
                            return false;
                        }
                    });
                }
            });
        });
    };

    function limpiarCampos(){
        $("#titFranja").val('');
        $("#cuota").val('');
        $("#idEmpleado").val('');
        $("#accion").val('');
        $("#idPais").val('').trigger('change');

        $('#titFranja').removeClass("is-invalid");
        $('#errTitFranja').css("display","none");
        $('#cuota').removeClass("is-invalid");
        $('#errCuota').css("display","none");        
    };

    function editar(){
        var table = $('#tablaEmpleados').DataTable();
        $('#tablaEmpleados tbody').on( 'click', 'tr', function () {
            var idx = table.row(this).index();
            var arrData = table.row(idx).data();

            $("#titFranja").val(arrData['titulo_franja']);
            $("#cuota").val(arrData['cuota']);
            $("#selEstado").val(arrData['estado']);
            $("#idEmpleado").val(arrData['id_empleado']);
            $('#idPais').empty().append($("<option/>").val(arrData['id_pais']).text(arrData['nombre'])).val(arrData['id_pais']).trigger("change");
            $("#accion").val('2');
            document.getElementById("titPnl").innerHTML = "Modificar ";
        });

        $("#pnlEmpleado").fadeIn(900);
        $("#titFranja").focus();
    };
</script>    
@endsection