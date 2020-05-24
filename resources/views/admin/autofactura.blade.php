@extends('layouts.mainAdmin')

@section('contentAdmin')
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h3 class="card-title">Listado AutoFacturas</h3>
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
                                    <th>Base</th>
                                    <th>Impuesto Indirecto</th>
                                    <th>Impuesto Directo</th>
                                    <th>Total con Impuestos</th>
                                    <th>Estado</th>                                    
                                    <th>Activo</th>
                                    <th>Pais</th>
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
                ajax: "{{ url('/autoFacturas/show') }}",
                columns: [
                    { data: 'id_autofactura', "visible": false },
                    { data: 'fecha' },                    
                    { data: 'id_usugestor' },
                    { data: 'id_usugestor' },
                    { data: 'base' },
                    { data: 'impuesto_indirecto' },
                    { data: 'impuesto_directo' },                    
                    { data: 'total_conImpuestos' },
                    { data: 'estado' },
                    { data: 'activo' },
                    { data: 'id_pais' },
                ],
                order: [[1,"asc"]]
            });
        });
    </script>
@endsection