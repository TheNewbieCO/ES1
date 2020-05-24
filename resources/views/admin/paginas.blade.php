@extends('layouts.mainAdmin')

@section('contentAdmin')
  <div id="pnlTexto" class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
      <div class="card card-primary card-outline">
        <div class="card-header">
            <h4 class="card-title"><span id="pnlTit"></span>Pagina</h4>
        </div>      
        <div class="card-body">
          <div class="row">       
            <div class="col-lg-3 col-md-3 col-sm-3">
                <label for="titulo" class="">Titulo</label>
                <input name="titulo" id="titulo" type="text" class="form-control">
                <p id="errTitulo" class="text-danger" style="display: none;"><em>El campo titulo debe estar lleno</em></p>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 mt-auto form-group">
                <label for="idPais">Pais</label>
                <select class="form-control" name="idPais" id="idPais" style="width: 100% !important"></select>
                <p id="errPais" class="text-danger" style="display: none;"><em>Debe seleccionar un pais</em></p>
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
            <input name="idPagina" id="idPagina" type="text" class="form-control" hidden>
            <input name="accion" id="accion" type="text" class="form-control" hidden>
          </div>

          <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3 float-right">
              <button class='btn btn-primary right' data-placement='bottom' data-html='true' title='Guardar' onclick='guardar()' type='button'> Guardar</button>
              <button class='btn btn-danger right' data-placement='bottom' data-html='true' title='Cancelar' onclick='cancelar()' type='button'> Cancelar</button>
              <button class='btn btn-success right' data-placement='bottom' data-html='true' title='Visualizar' onclick='ver()' type='button'> Visualizar</button>
            </div>  
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="pnlCrea" class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card card-primary card-outline">
          <div class="card-body">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-6">
                <p id="errContenido" class="text-danger" style="display: none;"><em>Debe crear cualquier contenido</em></p>
                <div id="summernote"></div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6">
                  <div id="ver" style="border: 1px dotted #000; height: 478px; overflow-x: scroll;"></div>
              </div>
            </div>
          </div>
        </div>
    </div>
  </div>

  <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="card card-primary card-outline">
              <div class="card-header">
                  <h3 class="card-title">Listado paginas</h3>

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
                      <table class="table table-bordered mb-0" style="width: 100% !important;" id="tablaPaginas">
                          <thead>
                              <tr>
                                  <th>Id</th>
                                  <th>Titulo</th>
                                  <th>ID Pais</th>
                                  <th>Pais</th>
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
        $("#pnlCrea").hide();
        $("#pnlTexto").hide();
        $('#summernote').summernote({
          height: 380,
        });

        var table = $('#tablaPaginas').DataTable({
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
            ajax: "{{ url('/paginas/show') }}",
            columns: [
                { data: 'pag_id', 'visible': false},
                { data: 'pag_titulo' },
                { data: 'pag_pais', "visible": false },
                { data: 'nombre' },
                { render: function (data, type, JsonResultRow, meta) {
                  var dato = "Activo";
                  if(JsonResultRow['pag_estado'] == 0){
                      dato = "Inactivo";
                  };
                  return "<span>"+dato+"</span>";}
                },                
                { defaultContent: "<button class='btn btn-secondary' data-placement='bottom' data-html='true' title='Modificar' onclick='editar()' type='button'>"+
                    "<i class='fas fa-pencil-alt'></i></button> &nbsp; "+
                    "<button class='btn btn-danger' data-placement='bottom' data-html='true' title='Eliminar' onclick='eliminar()' type='button'>"+
                    "<i class='fas fa-trash'></i></button>"}
            ],
            order: [[1,"asc"]]
                        
        });        

        $('#tablaPaginas tbody').on( 'click', 'tr', function () {
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
          $("#pnlTexto").fadeIn(900);
          $("#pnlCrea").fadeIn(900);
          $("#accion").val('1');
          $("#titulo").focus();
          document.getElementById("pnlTit").innerHTML = "Nueva ";
      };

      function cancelar(){
          limpiarCampos();
          $("#pnlTexto").fadeOut(300);
          $("#pnlCrea").fadeOut(300);
      };

      function limpiarCampos(){
          $("#titulo").val('');
          $("#idPais").val('').trigger('change');
          $("#selEstado").val('1');
          $("#idPagina").val('');
          $("#accion").val('');
          $("#summernote").summernote("code", '');
          document.getElementById("ver").innerHTML = '';
      };       

      function ver(){
        var aja = $('#summernote').summernote('code');
        document.getElementById("ver").innerHTML = aja;
      };

      function guardar(){
        var idPagina = document.getElementById("idPagina").value;
        var titulo = document.getElementById("titulo").value;
        var idPais = document.getElementById("idPais").value;
        var contenido = $('#summernote').summernote('code');
        var selEstado = document.getElementById("selEstado").value;
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
        if(idPais == ''){
            $('#errPais').css("display","block");
            cantErr ++ ;
        }else{
            $('#errPais').css("display","none");
        }
        if(contenido == "<p><br></p>"){
            $('#errContenido').css("display","block");
            cantErr ++ ;
        }else{
            $('#errContenido').css("display","none");
        }        

        if(cantErr == 0){
          if(tipoAcc == '1'){ // 1 - significa que esta insertando
            $.ajax({
                url: "/paginas",
                type: 'POST',
                data: {'titulo':titulo,'idPais':idPais,'contenido':contenido,'selEstado':selEstado},
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                error: function(err) {
                    mensajes('Error',err.statusText+" : "+err.responseJSON['message'],'error');
                },
                success: function(res) {
                    mensajes('Exito!',res,'success');
                    $("#pnlTexto").fadeOut(300);
                    $("#pnlCrea").fadeOut(300);
                    $('#tablaPaginas').DataTable().ajax.reload(null, false);
                    limpiarCampos();
                    return false;
                }
            });
          }
                
          if(tipoAcc == '2'){ // 2 significa que esta actualizando
              $.ajax({
                  url: "/paginas/"+idPagina,
                  type: 'PUT',
                  data: {'titulo':titulo,'idPais':idPais,'contenido':contenido,'selEstado':selEstado},
                  headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},                  
                  error: function(err) {
                      mensajes('Error',err.statusText+" : "+err.responseJSON['message'],'error');
                  },
                  success: function(res) {
                      mensajes('Exito!',res,'success');
                      $("#pnlTexto").fadeOut(300);
                      $("#pnlCrea").fadeOut(300);
                      $('#tablaPaginas').DataTable().ajax.reload(null, false);
                      limpiarCampos();
                      return false;
                  }
              });
            }            
          }
        };

        function eliminar(){
          var table = $('#tablaPaginas').DataTable();
          $('#tablaPaginas tbody').on( 'click', 'tr', function () {
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
                          url: "/paginas/"+arrData['pag_id'],
                          type: 'DELETE',
                          data: {},
                          headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                          error: function(err) {
                              mensajes('Error',err.statusText+" : "+err.responseJSON['message'],'error');
                          },
                          success: function(res) {
                              mensajes('Exito!',res,'success');
                              $('#tablaPaginas').DataTable().ajax.reload(null, false);
                              cancelar();
                              return false;
                          }
                      });
                  }
              });
          });
        };

      function editar(){
        var table = $('#tablaPaginas').DataTable();
        $('#tablaPaginas tbody').on( 'click', 'tr', function () {
            var idx = table.row(this).index();
            var arrData = table.row(idx).data();

            document.getElementById("pnlTit").innerHTML = "Modificar ";                    
            $("#titulo").val(arrData['pag_titulo']);
            $("#pag_estado").val(arrData['pag_estado']);
            $('#idPais').empty().append($("<option/>").val(arrData['pag_pais']).text(arrData['nombre'])).val(arrData['pag_pais']).trigger("change");
            $("#idPagina").val(arrData['pag_id']);
            $("#summernote").summernote("code", arrData['pag_contenido'].replace(/&lt;/g,"<").replace(/&gt;/g,">").replace(/&quot;/g,'"'));
            $("#accion").val('2');
        });

        $("#pnlTexto").fadeIn(900);
        $("#pnlCrea").fadeIn(900);
        $("#titulo").focus();
      };
    </script>      
  </script>  
@endsection