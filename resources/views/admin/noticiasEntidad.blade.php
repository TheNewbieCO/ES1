@extends('layouts.mainAdmin')

@section('contentAdmin')
    <div id="pnlNoticia" class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h4 class="card-title"><span id="pnlTit"></span>Noticia Entidad</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4 form-group">
                            <label for="idPais">Pais</label>
                            <select class="form-control" name="idPais" id="idPais" style="width: 100% !important"></select>
                            <p id="errPais" class="text-danger" style="display: none;"><em>Debe seleccionar un pais</em></p>
                        </div>                    
                        <div class="col-lg-4 col-md-4 col-sm-4 form-group">
                            <label for="titulo" class="">Titulo</label>
                            <input name="titulo" id="titulo" type="text" class="form-control">
                            <p id="errTitulo" class="text-danger" style="display: none;"><em>El campo titulo debe estar lleno</em></p>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 form-group">
                            <label for="link" class="">Link</label>
                            <input name="link" id="link" type="text" class="form-control">
                            <p id="errLink" class="text-danger" style="display: none;"><em>El campo link debe estar lleno</em></p>
                        </div>
                    </div>                        
                
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4">
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
                            <p id="errDescripcion" class="text-danger" style="display: none;"><em>El campo descripcion debe estar lleno</em></p>
                        </div>                        
                    </div>

                    <input name="idNoti" id="idNoti" type="text" class="form-control" hidden>
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
                    <h3 class="card-title">Listado noticias de entidades</h3>

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
                        <table class="table table-bordered mb-0" style="width: 100% !important;" id="tablaNoticias">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Fecha alta</th>
                                    <th>Fecha modificacion</th>                                    
                                    <th>Titulo</th>
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
            $("#pnlNoticia").hide();
            var table = $('#tablaNoticias').DataTable({
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
                ajax: "{{ url('/noticiasEntidad/show') }}",
                columns: [                        
                    { data: 'id_noticia', "visible": false },
                    { data: 'fecha_alta' },
                    { data: 'fecha_modificacion' },                    
                    { data: 'titulo' },
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

            $('#tablaNoticias tbody').on( 'click', 'tr', function () {
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
            $("#pnlNoticia").fadeIn(900);
            $("#accion").val('1');
            $("#titulo").focus();
            document.getElementById("pnlTit").innerHTML = "Nuevo ";
        };

        function cancelar(){
            limpiarCampos();
            $("#pnlNoticia").fadeOut(300);
        };

        function limpiarCampos(){
            $("#titulo").val('');
            $("#descripcion").val('');
            $("#link").val('');
            $("#idPais").val('').trigger('change');
            $("#idNoti").val('');
            $("#accion").val('');                                                
        };        

        function guardar(){
            var titulo = document.getElementById("titulo").value;
            var descripcion = document.getElementById("descripcion").value;
            var link = document.getElementById("link").value;
            var selEstado = document.getElementById("selEstado").value;
            var idPais = document.getElementById("idPais").value;
            var idNoti = document.getElementById("idNoti").value;
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
            if(link == ''){
                $('#link').addClass("is-invalid");
                $('#errLink').css("display","block");
                cantErr ++ ;
            }else{
                $('#link').removeClass("is-invalid");
                $('#errLink').css("display","none");
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
                        url: "/noticiasEntidad",
                        type: 'POST',
                        data: {'titulo':titulo,'descripcion':descripcion,'link':link,'id_pais':idPais, 'selEstado':selEstado},
                        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                        error: function(err) {
                            mensajes('Error',err.statusText+" : "+err.responseJSON['message'],'error');
                        },
                        success: function(res) {
                            mensajes('Exito!',res,'success');
                            $("#pnlNoticia").fadeOut(300);
                            $('#tablaNoticias').DataTable().ajax.reload(null, false);
                            limpiarCampos();
                            return false;
                        }
                    });
                }
                
                if(tipoAcc == '2'){ // 2 significa que esta actualizando
                    $.ajax({
                        url: "/noticiasEntidad/"+idNoti,
                        type: 'PUT',
                        data: {'titulo':titulo,'descripcion':descripcion,'link':link,'id_pais':idPais, 'selEstado':selEstado},
                        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},                  
                        error: function(err) {
                            mensajes('Error',err.statusText+" : "+err.responseJSON['message'],'error');
                        },
                        success: function(res) {
                            mensajes('Exito!',res,'success');
                            $("#pnlNoticia").fadeOut(300);
                            $('#tablaNoticias').DataTable().ajax.reload(null, false);
                            limpiarCampos();
                            return false;
                        }
                    });
                }            
            }
        };

        function eliminar(){
            var table = $('#tablaNoticias').DataTable();
            $('#tablaNoticias tbody').on( 'click', 'tr', function () {
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
                            url: "/noticiasEntidad/"+arrData['id_noticia'],
                            type: 'DELETE',
                            data: {},
                            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                            error: function(err) {
                                mensajes('Error',err.statusText+" : "+err.responseJSON['message'],'error');
                            },
                            success: function(res) {
                                mensajes('Exito!',res,'success');
                                $('#tablaNoticias').DataTable().ajax.reload(null, false);
                                cancelar();
                                return false;
                            }
                        });
                    }
                });
            });
        };

        function editar(){
            var table = $('#tablaNoticias').DataTable();
            $('#tablaNoticias tbody').on( 'click', 'tr', function () {
                var idx = table.row(this).index();
                var arrData = table.row(idx).data();

                document.getElementById("pnlTit").innerHTML = "Modificar ";                    
                $("#titulo").val(arrData['titulo']);
                $("#descripcion").val(arrData['descripcion']);
                $("#link").val(arrData['link']);
                $("#selEstado").val(arrData['estado']);
                $('#idPais').empty().append($("<option/>").val(arrData['id_pais']).text(arrData['nombre'])).val(arrData['id_pais']).trigger("change");
                $("#idNoti").val(arrData['id_noticia']);                                                             
                $("#accion").val('2');
            });

            $("#pnlNoticia").fadeIn(900);
            $("#titulo").focus();
        };        
    </script>
@endsection