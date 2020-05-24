@extends('layouts.mainAdmin')

@section('contentAdmin')
    <div id="pnlPais" class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h4 class="card-title"><span id="pnlTit"></span>Pais</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3 form-group">
                            <label for="nombrePai" class="">Nombre</label>
                            <input name="nombrePai" id="nombrePai" type="text" class="form-control">
                            <p id="errNomPai" class="text-danger" style="display: none;"><em>El campo nombre debe estar lleno</em></p>
                        </div>                
                        <div class="col-lg-3 col-md-3 col-sm-3 form-group">
                            <label for="codIso" class="">Codigo ISO</label>
                            <input name="codIso" id="codIso" type="text"  class="form-control">
                            <p id="errCodIso" class="text-danger" style="display: none;"><em>El campo codigo iso debe estar lleno</em></p>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 form-group">
                            <label for="moneda" class="">Moneda</label>
                            <input name="moneda" id="moneda" type="text"  class="form-control">
                            <p id="errMoneda" class="text-danger" style="display: none;"><em>El campo moneda debe estar lleno</em></p>                    
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 form-group">
                            <label for="idioma" class="">Idioma</label>
                            <input name="idioma" id="idioma" type="text"  class="form-control">
                            <p id="errIdioma" class="text-danger" style="display: none;"><em>El campo idioma debe estar lleno</em></p>                    
                        </div>                        
                    </div>

                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3 form-group">
                            <label for="costeRecib" class="">Coste recibo</label>
                            <input name="costeRecib" id="costeRecib" type="text"  class="form-control">
                            <p id="errCosteRecib" class="text-danger" style="display: none;"><em>El campo coste recibo debe estar lleno</em></p>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 form-group">
                            <label for="costeTrans" class="">Coste tranferencia</label>
                            <input name="costeTrans" id="costeTrans" type="text"  class="form-control">
                            <p id="errCosteTrans" class="text-danger" style="display: none;"><em>El campo coste tranferencia debe estar lleno</em></p>                    
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 form-group">
                            <label for="miniPromo" class="">Minima promocion</label>
                            <input name="miniPromo" id="miniPromo" type="text"  class="form-control">
                            <p id="errMiniPromo" class="text-danger" style="display: none;"><em>El campo minima promocion debe estar lleno</em></p>                    
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 form-group">
                            <label for="cant_impDir" class="">Cantidad Impuesto Directo</label>
                            <input name="cant_impDir" id="cant_impDir" type="text"  class="form-control">
                            <p id="errCant_impDir" class="text-danger" style="display: none;"><em>El campo cantidad impuesto directo debe estar lleno</em></p>                    
                        </div>                        
                    </div>

                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3 form-group">
                            <label for="cant_impIndir" class="">Cantidad Impuesto Indirecto</label>
                            <input name="cant_impIndir" id="cant_impIndir" type="text"  class="form-control">
                            <p id="errCant_impIndir" class="text-danger" style="display: none;"><em>El campo cantidad impuesto indirecto debe estar lleno</em></p>                    
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 form-group">
                            <label for="datosGestora">Datos Entidad Supervisora</label>
                            <textarea class="form-control" id="datosGestora" rows="3"></textarea>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <div class="position-relative form-group">
                                <label for="selGesPais" class="">Gestor Pais</label>
                                <select name="selGesPais" id="selGesPais" class="form-control">
                                    <option value="SI">Si</option>
                                    <option value="NO">No</option>
                                </select>
                            </div>                        
                        </div>                        
                    </div>

                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3 form-group">
                            <label for="gastoSello" class="">Gasto Envio Sello</label>
                            <input name="gastoSello" id="gastoSello" type="text"  class="form-control">
                            <p id="errGastoSello" class="text-danger" style="display: none;"><em>El campo gasto envio sello debe estar lleno</em></p>
                        </div>                    
                    </div>

                    <input name="idPais" id="idPais" type="text" class="form-control" hidden>
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
                    <h3 class="card-title">Listado de paises</h3>

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
                        <table class="table table-bordered mb-0" style="width: 100% !important;" id="tablaPaises">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Fecha alta</th>
                                    <th>Fecha modificacion</th>                                    
                                    <th>Nombre</th>
                                    <th>Codigo ISO</th>
                                    <th>Moneda</th>
                                    <th>Idioma</th>
                                    <th>Coste recibo</th>
                                    <th>Coste tranferencia</th>
                                    <th>Minima promocion</th>
                                    <th>Cantidad Impuesto Directo</th>
                                    <th>Cantidad Impuesto Indirecto</th>
                                    <th>Gasto Envio Sello</th>
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
            $("#pnlPais").hide();
            var table = $('#tablaPaises').DataTable({
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
                ajax: "{{ url('/paises/show') }}",
                columns: [
                    { data: 'id_pais', "visible": false },
                    { data: 'fecha_alta', "format": 'd-m-Y h:m:s' },
                    { data: 'fecha_modificacion' },                    
                    { data: 'nombre' },
                    { data: 'codISO' },
                    { data: 'moneda' },
                    { data: 'idioma' },
                    { data: 'coste_recibo' },
                    { data: 'coste_tranferencia' },
                    { data: 'minima_promo' },
                    { data: 'cant_impdirecto' },
                    { data: 'cant_impindirecto' },
                    { data: 'gasto_enviosello' },
                    { defaultContent: "<button class='btn btn-secondary' data-placement='bottom' data-html='true' title='Modificar' onclick='editar()' type='button'>"+
                        "<i class='fas fa-pencil-alt'></i></button> &nbsp; "+
                        "<button class='btn btn-danger' data-placement='bottom' data-html='true' title='Eliminar' onclick='eliminar()' type='button'>"+
                        "<i class='fas fa-trash'></i></button>"}
                ]
                            
            });

            $('#tablaPaises tbody').on( 'click', 'tr', function () {
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
            $("#pnlPais").fadeIn(900);
            $("#accion").val('1');
            $("#nombrePai").focus();
            document.getElementById("pnlTit").innerHTML = "Nuevo ";
        };

        function cancelar(){
            limpiarCampos();
            $("#pnlPais").fadeOut(300);
        };

        function limpiarCampos(){
            $("#nombrePai").val('');
            $("#codIso").val('');
            $("#moneda").val('');
            $("#idioma").val('');
            $("#costeRecib").val('');
            $("#costeTrans").val('');
            $("#miniPromo").val('');
            $("#cant_impDir").val('');
            $("#cant_impIndir").val('');
            $("#datosGestora").val('');
            $("#gastoSello").val('');

            $("#idPais").val('');
            $("#accion").val('');                                                
        };        

        function guardar(){
            var nombrePai = document.getElementById("nombrePai").value;
            var codIso = document.getElementById("codIso").value;
            var moneda = document.getElementById("moneda").value;
            var idioma = document.getElementById("idioma").value;
            var costeRecib = document.getElementById("costeRecib").value;
            var costeTrans = document.getElementById("costeTrans").value;        
            var miniPromo = document.getElementById("miniPromo").value;
            var cant_impDir = document.getElementById("cant_impDir").value;
            var cant_impIndir = document.getElementById("cant_impIndir").value;
            var datosGestora = document.getElementById("datosGestora").value;
            var gastoSello = document.getElementById("gastoSello").value;

            var idPais = document.getElementById("idPais").value;
            var tipoAcc = document.getElementById("accion").value;
            var cantErr = 0;

            if(nombrePai == ''){
                $('#nombrePai').addClass("is-invalid");
                $('#errNomPai').css("display","block");
                cantErr ++ ;
            }else{
                $('#nombrePai').removeClass("is-invalid");
                $('#errNomPai').css("display","none");
            }
            if(codIso == ''){
                $('#codIso').addClass("is-invalid");
                $('#errCodIso').css("display","block");
                cantErr ++ ;
            }else{
                $('#codIso').removeClass("is-invalid");
                $('#errCodIso').css("display","none");
            }
            if(moneda == ''){
                $('#moneda').addClass("is-invalid");
                $('#errMoneda').css("display","block");
                cantErr ++ ;
            }else{
                $('#moneda').removeClass("is-invalid");
                $('#errMoneda').css("display","none");
            }       
            if(idioma == ''){
                $('#idioma').addClass("is-invalid");
                $('#errIdioma').css("display","block");
                cantErr ++ ;
            }else{
                $('#idioma').removeClass("is-invalid");
                $('#errIdioma').css("display","none");
            }           

            if(cantErr == 0){
                if(tipoAcc == '1'){ // 1 - significa que esta insertando
                    $.ajax({
                        url: "/paises",
                        type: 'POST',
                        data: {'nombrePai':nombrePai,'codIso':codIso,'moneda':moneda,'idioma':idioma,'costeRecib':costeRecib,'costeTrans':costeTrans,'miniPromo':miniPromo,'cant_impDir':cant_impDir,'cant_impIndir':cant_impIndir,'datosGestora':datosGestora,'gastoSello':gastoSello},
                        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                        error: function(err) {
                            mensajes('Error',err.statusText+" : "+err.responseJSON['message'],'error');
                        },
                        success: function(res) {
                            mensajes('Exito!',res,'success');
                            $("#pnlPais").fadeOut(300);
                            $('#tablaPaises').DataTable().ajax.reload(null, false);
                            limpiarCampos();
                            return false;
                        }
                    });
                }
                
                if(tipoAcc == '2'){ // 2 significa que esta actualizando
                    $.ajax({
                        url: "/paises/"+idPais,
                        type: 'PUT',
                        data: {'nombrePai':nombrePai,'codIso':codIso,'moneda':moneda,'idioma':idioma,'costeRecib':costeRecib,'costeTrans':costeTrans,'miniPromo':miniPromo,'cant_impDir':cant_impDir,'cant_impIndir':cant_impIndir,'datosGestora':datosGestora,'gastoSello':gastoSello},
                        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},                  
                        error: function(err) {
                            mensajes('Error',err.statusText+" : "+err.responseJSON['message'],'error');
                        },
                        success: function(res) {
                            mensajes('Exito!',res,'success');
                            $("#pnlPais").fadeOut(300);
                            $('#tablaPaises').DataTable().ajax.reload(null, false);
                            limpiarCampos();
                            return false;
                        }
                    });
                }            
            }
        };

        function eliminar(){
            var table = $('#tablaPaises').DataTable();
            $('#tablaPaises tbody').on( 'click', 'tr', function () {
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
                            url: "/paises/"+arrData['id_pais'],
                            type: 'DELETE',
                            data: {},
                            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                            error: function(err) {
                                mensajes('Error',err.statusText+" : "+err.responseJSON['message'],'error');
                            },
                            success: function(res) {
                                mensajes('Exito!',res,'success');
                                $('#tablaPaises').DataTable().ajax.reload(null, false);
                                cancelar();
                                return false;
                            }
                        });
                    }
                });
            });
        };

        function editar(){
            var table = $('#tablaPaises').DataTable();
            $('#tablaPaises tbody').on( 'click', 'tr', function () {
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
                $("#cant_impDir").val(arrData['cant_impdirecto']);
                $("#cant_impIndir").val(arrData['cant_impindirecto']);
                $("#datosGestora").val(arrData['dat_gestoraFactura']);
                $("#gastoSello").val(arrData['gasto_enviosello']);
                $("#idPais").val(arrData['id_pais']);                                                             
                $("#accion").val('2');
            });

            $("#pnlPais").fadeIn(900);
            $("#nombrePai").focus();
        };        
    </script>
@endsection