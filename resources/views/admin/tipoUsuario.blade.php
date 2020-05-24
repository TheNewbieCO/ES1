@extends('layouts.mainAdmin')

@section('contentAdmin')
    <div id="pnlTipUsu" class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h4 class="card-title"><span id="pnlTit"></span>Tipo de Usuario</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3 form-group">
                            <label for="nombre" class="">Nombre</label>
                            <input name="nombre" id="nombre" type="text" class="form-control">
                            <p id="errNom" class="text-danger" style="display: none;"><em>El campo nombre debe estar lleno</em></p>
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

                    <input name="idTipUsu" id="idTipUsu" type="text" class="form-control" hidden>
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
                    <h3 class="card-title">Listado tipos de usuarios</h3>

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
                        <table class="table table-bordered mb-0" style="width: 100% !important;" id="tablaTipoUsu">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Fecha alta</th>
                                    <th>Fecha modificacion</th>                                    
                                    <th>Nombre</th>
                                    <th>Estado</th>
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
            $("#pnlTipUsu").hide();
            var table = $('#tablaTipoUsu').DataTable({
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
                ajax: "{{ url('/tipoUsuarios/show') }}",
                columns: [
                    { data: 'id_tipoUsu', "visible": false },
                    { data: 'fecha_alta' },
                    { data: 'fecha_modificacion' },                    
                    { data: 'tipo_nombre' },
                    { data: 'estado' },
                    { defaultContent: "<button class='btn btn-secondary' data-placement='bottom' data-html='true' title='Modificar' onclick='editar()' type='button'>"+
                        "<i class='fas fa-pencil-alt'></i></button> &nbsp; "+
                        "<button class='btn btn-danger' data-placement='bottom' data-html='true' title='Eliminar' onclick='eliminar()' type='button'>"+
                        "<i class='fas fa-trash'></i></button>"}
                ],
                order: [[1,"asc"]]
                            
            });

            $('#tablaTipoUsu tbody').on( 'click', 'tr', function () {
                if ( $(this).hasClass('selected') ) {
                    $(this).removeClass('selected');
                }
                else {
                    table.$('tr.selected').removeClass('selected');
                    $(this).addClass('selected');
                }
            });            
        });

        function nuevo(){
            limpiarCampos();
            $("#pnlTipUsu").fadeIn(900);
            $("#accion").val('1');
            $("#nombre").focus();
            document.getElementById("pnlTit").innerHTML = "Nuevo ";
        };

        function cancelar(){
            limpiarCampos();
            $("#pnlTipUsu").fadeOut(300);
        };

        function limpiarCampos(){
            $("#nombre").val('');
            $("#idTipUsu").val('');
            $("#accion").val('');                                                
        };        

        function guardar(){
            var nombre = document.getElementById("nombre").value;
            var selEstado = document.getElementById("selEstado").value;
            var idTipUsu = document.getElementById("idTipUsu").value;
            var tipoAcc = document.getElementById("accion").value;
            var cantErr = 0;

            if(nombre == ''){
                $('#nombre').addClass("is-invalid");
                $('#errNom').css("display","block");
                cantErr ++ ;
            }else{
                $('#nombre').removeClass("is-invalid");
                $('#errNom').css("display","none");
            }       

            if(cantErr == 0){
                if(tipoAcc == '1'){ // 1 - significa que esta insertando
                    $.ajax({
                        url: "/tipoUsuarios",
                        type: 'POST',
                        data: {'nombre':nombre, 'selEstado':selEstado},
                        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                        error: function(err) {
                            mensajes('Error',err.statusText+" : "+err.responseJSON['message'],'error');
                        },
                        success: function(res) {
                            mensajes('Exito!',res,'success');
                            $("#pnlTipUsu").fadeOut(300);
                            $('#tablaTipoUsu').DataTable().ajax.reload(null, false);
                            limpiarCampos();
                            return false;
                        }
                    });
                }
                
                if(tipoAcc == '2'){ // 2 significa que esta actualizando
                    $.ajax({
                        url: "/tipoUsuarios/"+idTipUsu,
                        type: 'PUT',
                        data: {'nombre':nombre, 'selEstado':selEstado},
                        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},                  
                        error: function(err) {
                            mensajes('Error',err.statusText+" : "+err.responseJSON['message'],'error');
                        },
                        success: function(res) {
                            mensajes('Exito!',res,'success');
                            $("#pnlTipUsu").fadeOut(300);
                            $('#tablaTipoUsu').DataTable().ajax.reload(null, false);
                            limpiarCampos();
                            return false;
                        }
                    });
                }            
            }
        };

        function eliminar(){
            var table = $('#tablaTipoUsu').DataTable();
            $('#tablaTipoUsu tbody').on( 'click', 'tr', function () {
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
                            url: "/tipoUsuarios/"+arrData['id_tipoUsu'],
                            type: 'DELETE',
                            data: {},
                            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                            error: function(err) {
                                mensajes('Error',err.statusText+" : "+err.responseJSON['message'],'error');
                            },
                            success: function(res) {
                                mensajes('Exito!',res,'success');
                                $('#tablaTipoUsu').DataTable().ajax.reload(null, false);
                                cancelar();
                                return false;
                            }
                        });
                    }
                });
            });
        };

        function editar(){
            var table = $('#tablaTipoUsu').DataTable();
            $('#tablaTipoUsu tbody').on( 'click', 'tr', function () {
                var idx = table.row(this).index();
                var arrData = table.row(idx).data();

                document.getElementById("pnlTit").innerHTML = "Modificar ";                    
                $("#nombre").val(arrData['tipo_nombre']);
                $("#selEstado").val(arrData['estado']);
                $("#idTipUsu").val(arrData['id_tipoUsu']);                                                             
                $("#accion").val('2');
            });

            $("#pnlTipUsu").fadeIn(900);
            $("#nombre").focus();
        };        
    </script>
@endsection