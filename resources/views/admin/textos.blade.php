@extends('layouts.mainAdmin')

@section('contentAdmin')
<div id="pnlTexto" class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card card-primary card-outline">
            <div class="card-header">
                <h4 class="card-title"><span id="titPnl"></span> Texto</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 form-group">
                        <label for="español" class="">Texto en Español</label>
                        <input name="español" id="español" type="text" class="form-control">
                    </div>                
                    <div class="col-lg-3 col-md-3 col-sm-3 form-group">
                        <label for="ingles" class="">Texto en Ingles</label>
                        <input name="ingles" id="ingles" type="text" class="form-control">
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 form-group">
                        <label for="frances" class="">Texto en Frances</label>
                        <input name="frances" id="frances" type="text" class="form-control">
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 form-group">
                        <label for="aleman" class="">Texto en Aleman</label>
                        <input name="aleman" id="aleman" type="text" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 form-group">
                        <label for="ruso" class="">Texto en Ruso</label>
                        <input name="ruso" id="ruso" type="text" class="form-control">
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 form-group">
                        <label for="portugues" class="">Texto en Portugues</label>
                        <input name="portugues" id="portugues" type="text" class="form-control">
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
                    <input name="idTexto" id="idTexto" type="text" class="form-control" hidden>
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
                <h3 class="card-title">Listado Textos</h3>

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
                    <table class="table display table-striped table-bordered " style="width: 100% !important;" id="tablaTextos">
                        <thead>
                            <tr>
                                <th>Fecha alta</th>
                                <th>Fecha modificación</th>                            
                                <th>Id</th>                                
                                <th>Texto en Español</th>
                                <th>Texto en Ingles</th>
                                <th>Texto en Frances</th>
                                <th>Texto en Aleman</th>
                                <th>Texto en Ruso</th>
                                <th>Texto en Portugues</th>
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
        $("#pnlTexto").hide();

        let table = $('#tablaTextos').DataTable({
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
            ajax: "{{ url('/textos/show') }}",
            columns: [
                { data: 'fecha_alta' },
                { data: 'fecha_modificacion' },                
                { data: 'id_texto' },
                { data: 'texto_español' },
                { data: 'texto_ingles' },
                { data: 'texto_frances' },
                { data: 'texto_aleman' },
                { data: 'texto_ruso' },
                { data: 'texto_portugues' },
                { render: function (data, type, JsonResultRow, meta) {
                  var dato = "Activo";
                  if(JsonResultRow['estado'] == 2){
                      dato = "Inactivo";
                  };
                  return "<span>"+dato+"</span>";}
                },
                { defaultContent: "<button class='btn btn-secondary' id='btnedit' data-placement='bottom' data-html='true' title='Modificar' onclick='editar()' type='button'>"+
                    "<i class='fas fa-pencil-alt'></i></button> &nbsp; "+
                    "<button class='btn btn-danger' data-placement='bottom' data-html='true' title='Eliminar' onclick='eliminar()' type='button'>"+
                    "<i class='fas fa-trash'></i></button>"}
            ],
            "order": [[0, 'desc']]
        });

        $('#tablaTextos tbody').on( 'click', 'tr', function () {
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
        $("#pnlTexto").fadeIn(900);
        $("#accion").val('1');
        $("#español").focus();
        document.getElementById("titPnl").innerHTML = "Nuevo ";
    };

    function guardar(){
        var español = document.getElementById("español").value;
        var ingles = document.getElementById("ingles").value;
        var frances = document.getElementById("frances").value;
        var aleman = document.getElementById("aleman").value;
        var ruso = document.getElementById("ruso").value;
        var portugues = document.getElementById("portugues").value;
        var selEstado = document.getElementById("selEstado").value;

        var idTexto = document.getElementById("idTexto").value;
        var tipoAcc = document.getElementById("accion").value;
        var cantErr = 0;       

        if(cantErr == 0){
            if(tipoAcc == '1'){ // 1 - significa que esta insertando
                $.ajax({
                    url: "/textos",
                    type: 'POST',
                    data: {'español':español,'ingles':ingles,'frances':frances,'aleman':aleman,'ruso':ruso,'portugues':portugues,'selEstado':selEstado},
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    error: function(err) {
                        mensajes('Error',err.statusText+" : "+err.responseJSON['message'],'error');
                    },
                    success: function(res) {
                        mensajes('Exito!',res,'success');
                        $("#pnlTexto").fadeOut(300);
                        $('#tablaTextos').DataTable().ajax.reload(null, false);
                        limpiarCampos();
                        return false;
                    }
                });
            }
            
            if(tipoAcc == '2'){ // 2 significa que esta actualizando
                $.ajax({
                    url: "/textos/"+idTexto,
                    type: 'PUT',
                    data: {'español':español,'ingles':ingles,'frances':frances,'aleman':aleman,'ruso':ruso,'portugues':portugues,'selEstado':selEstado},
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},                  
                    error: function(err) {
                        mensajes('Error',err.statusText+" : "+err.responseJSON['message'],'error');
                    },
                    success: function(res) {
                        mensajes('Exito!',res,'success');
                        $("#pnlTexto").fadeOut(300);
                        $('#tablaTextos').DataTable().ajax.reload(null, false);
                        limpiarCampos();
                        return false;
                    }
                });
            }            
        }
    };

    function cancelar(){
        $("#pnlTexto").fadeOut(300);
        limpiarCampos();
    };

    function eliminar(){
        var table = $('#tablaTextos').DataTable();
        $('#tablaTextos tbody').on( 'click', 'tr', function () {
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
                        url: "/textos/"+arrData['id_texto'],
                        type: 'DELETE',
                        data: {},
                        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},                  
                        error: function(err) {
                            mensajes('Error',err.statusText+" : "+err.responseJSON['message'],'error');
                        },
                        success: function(res) {
                            mensajes('Exito!',res,'success');
                            $('#tablaTextos').DataTable().ajax.reload(null, false);
                            return false;
                        }
                    });
                }
            });
        });
    };

    function limpiarCampos(){
        $("#español").val('');
        $("#ingles").val('');
        $("#frances").val('');
        $("#aleman").val('');
        $("#ruso").val('');
        $("#portugues").val('');                 

        $("#idTexto").val('');
        $("#accion").val('');      
    };

    function editar(){
        var table = $('#tablaTextos').DataTable();
        $('#tablaTextos tbody').on( 'click', 'tr', function () {
            var idx = table.row(this).index();
            var arrData = table.row(idx).data();

            $("#español").val(arrData['texto_español']);
            $("#ingles").val(arrData['texto_ingles']);
            $("#frances").val(arrData['texto_frances']);
            $("#aleman").val(arrData['texto_aleman']);
            $("#ruso").val(arrData['texto_ruso']);
            $("#portugues").val(arrData['texto_portugues']);
            $("#selEstado").val(arrData['estado']);
            
            $("#idTexto").val(arrData['id_texto']);
            $("#accion").val('2');
            document.getElementById("titPnl").innerHTML = "Modificar ";
        });

        $("#pnlTexto").fadeIn(900);
        $("#español").focus();
    };
</script>    
@endsection