@extends('layouts.mainAdmin')

@section('contentAdmin')
    <div id="pnlTipPro" class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h4 class="card-title"><span id="pnlTit"></span>Tipo profesional</h4>
                </div>      
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3 mt-auto form-group">
                            <label for="idPais">Pais</label>
                            <select class="form-control" name="idPais" id="idPais" style="width: 100% !important"></select>
                            <p id="errPais" class="text-danger" style="display: none;"><em>Debe seleccionar un pais</em></p>
                        </div>                    
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <label for="nombre" class="">Nombre</label>
                            <input name="nombre" id="nombre" type="text" class="form-control">
                            <p id="errIdPagina" class="text-danger" style="display: none;"><em>El campo id pagina debe estar lleno</em></p>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <div class="position-relative form-group">
                                <label for="selImpIndir" class="">Impuesto Indirecto</label>
                                <select name="selImpIndir" id="selImpIndir" class="form-control">
                                    <option value="...">Seleccione</option>
                                    <option value="Si">Si</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                        </div>                                
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <div class="position-relative form-group">
                                <label for="selImpDir" class="">Impuesto directo</label>
                                <select name="selImpDir" id="selImpDir" class="form-control">
                                    <option value="...">Seleccione</option>
                                    <option value="Si">Si</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
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

                        <input name="idTipPro" id="idTipPro" type="text" class="form-control" hidden>
                        <input name="accion" id="accion" type="text" class="form-control" hidden>
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
                    <h3 class="card-title">Listado tipos de profesional</h3>

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
                        <table class="table table-bordered mb-0" style="width: 100% !important;" id="tablaTipPro">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Fecha alta</th>
                                    <th>Fecha modificacion</th>                                    
                                    <th>Nombre</th>
                                    <th>Impuesto indirecto</th>                                    
                                    <th>Impuesto directo</th>
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
            $("#pnlTipPro").hide();
            var table = $('#tablaTipPro').DataTable({
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
                ajax: "{{ url('/tipoProfesional/show') }}",
                columns: [
                    { data: 'id_profesional', "visible": false },
                    { data: 'fecha_alta' },
                    { data: 'fecha_modificacion' },                    
                    { data: 'profesional_nombre' },
                    { data: 'impuesto_directo' },
                    { data: 'impuesto_indirecto' },
                    { data: 'estado' },
                    { data: 'id_pais', "visible": false },
                    { data: 'nombre' },                    
                    { defaultContent: "<button class='btn btn-secondary' data-placement='bottom' data-html='true' title='Modificar' onclick='editar()' type='button'>"+
                        "<i class='fas fa-pencil-alt'></i></button> &nbsp; "+
                        "<button class='btn btn-danger' data-placement='bottom' data-html='true' title='Eliminar' onclick='eliminar()' type='button'>"+
                        "<i class='fas fa-trash'></i></button>"}
                ],
                order: [[1,"asc"]]
                            
            });

            $('#tablaTipPro tbody').on( 'click', 'tr', function () {
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
            $("#pnlTipPro").fadeIn(900);
            $("#accion").val('1');
            $("#nombre").focus();
            document.getElementById("pnlTit").innerHTML = "Nuevo ";
        };

        function cancelar(){
            limpiarCampos();
            $("#pnlTipPro").fadeOut(300);
        };

        function limpiarCampos(){
            $("#nombre").val('');
            $("#idPais").val('').trigger('change');
            $("#idTipPro").val('');
            $("#accion").val('');                                                
        };        

        function guardar(){
            var nombre = document.getElementById("nombre").value;
            var selEstado = document.getElementById("selEstado").value;
            var idPais = document.getElementById("idPais").value;
            var idTipPro = document.getElementById("idTipPro").value;
            var selImpDir = document.getElementById("selImpDir").value;
            var selImpIndir = document.getElementById("selImpIndir").value;
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
            if(idPais == ''){
                $('#errPais').css("display","block");
                cantErr ++ ;
            }else{
                $('#errPais').css("display","none");
            }
            if(selImpDir == ''){
                $('#selImpDir').addClass("is-invalid");
                cantErr ++ ;
            }else{
                $('#selImpDir').removeClass("is-invalid");
            }
            if(selImpIndir == ''){
                $('#selImpIndir').addClass("is-invalid");
                cantErr ++ ;
            }else{
                $('#selImpIndir').removeClass("is-invalid");
            }                        

            if(cantErr == 0){
                if(tipoAcc == '1'){ // 1 - significa que esta insertando
                    $.ajax({
                        url: "/tipoProfesional",
                        type: 'POST',
                        data: {'nombre':nombre,'id_pais':idPais,'selImpDir':selImpDir,'selImpIndir':selImpIndir,'selEstado':selEstado},
                        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                        error: function(err) {
                            mensajes('Error',err.statusText+" : "+err.responseJSON['message'],'error');
                        },
                        success: function(res) {
                            mensajes('Exito!',res,'success');
                            $("#pnlTipPro").fadeOut(300);
                            $('#tablaTipPro').DataTable().ajax.reload(null, false);
                            limpiarCampos();
                            return false;
                        }
                    });
                }
                
                if(tipoAcc == '2'){ // 2 significa que esta actualizando
                    $.ajax({
                        url: "/tipoProfesional/"+idTipPro,
                        type: 'PUT',
                        data: {'nombre':nombre,'id_pais':idPais,'selImpDir':selImpDir,'selImpIndir':selImpIndir,'selEstado':selEstado},
                        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},                  
                        error: function(err) {
                            mensajes('Error',err.statusText+" : "+err.responseJSON['message'],'error');
                        },
                        success: function(res) {
                            mensajes('Exito!',res,'success');
                            $("#pnlTipPro").fadeOut(300);
                            $('#tablaTipPro').DataTable().ajax.reload(null, false);
                            limpiarCampos();
                            return false;
                        }
                    });
                }            
            }
        };

        function eliminar(){
            var table = $('#tablaTipPro').DataTable();
            $('#tablaTipPro tbody').on( 'click', 'tr', function () {
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
                            url: "/tipoProfesional/"+arrData['id_profesional'],
                            type: 'DELETE',
                            data: {},
                            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                            error: function(err) {
                                mensajes('Error',err.statusText+" : "+err.responseJSON['message'],'error');
                            },
                            success: function(res) {
                                mensajes('Exito!',res,'success');
                                $('#tablaTipPro').DataTable().ajax.reload(null, false);
                                cancelar();
                                return false;
                            }
                        });
                    }
                });
            });
        };

        function editar(){
            var table = $('#tablaTipPro').DataTable();
            $('#tablaTipPro tbody').on( 'click', 'tr', function () {
                var idx = table.row(this).index();
                var arrData = table.row(idx).data();

                document.getElementById("pnlTit").innerHTML = "Modificar ";                    
                $("#nombre").val(arrData['profesional_nombre']);
                $("#selEstado").val(arrData['estado']);
                $("#selImpDir").val(arrData['impuesto_directo']);
                $("#selImpIndir").val(arrData['impuesto_indirecto']);
                $('#idPais').empty().append($("<option/>").val(arrData['id_pais']).text(arrData['nombre'])).val(arrData['id_pais']).trigger("change");
                $("#idTipPro").val(arrData['id_profesional']);                                                             
                $("#accion").val('2');
            });

            $("#pnlTipPro").fadeIn(900);
            $("#nombre").focus();
        };        
    </script>
@endsection