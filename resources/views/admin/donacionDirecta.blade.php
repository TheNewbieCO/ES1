@extends('layouts.mainAdmin')

@section('contentAdmin')
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h3 class="card-title">Listado Donaciones Directas</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive cell-border compact stripe" >                    
                        <table class="table table-bordered mb-0" style="width: 100% !important;" id="tablaDonaDirect">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Fecha</th>                                    
                                    <th>Tipo Usuario</th>
                                    <th>Nombre</th>
                                    <th>Referencia</th>
                                    <th>Cantidad Donada</th>                                    
                                    <th>Tipo Pago</th>
                                    <th>Activa</th>
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
            var table = $('#tablaDonaDirect').DataTable({
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
                ajax: "{{ url('/donacionDirecta/show') }}",
                columns: [
                    { data: 'id_donacion', "visible": false },
                    { data: 'fecha_alta' },                    
                    { data: 'id_tipoUsu' },
                    { data: 'nombre' },
                    { data: 'referencia' },
                    { data: 'cantidad_donada' },                    
                    { data: 'id_tipopago' },
                    { data: 'activa' },
                    { data: 'id_pais' },
                    { defaultContent: "<button class='btn btn-secondary' data-placement='bottom' data-html='true' title='Modificar' onclick='editar()' type='button'>"+
                        "<i class='fas fa-pencil-alt'></i></button>"}                    
                ],
                order: [[1,"asc"]]
            });
        });
    </script>
@endsection