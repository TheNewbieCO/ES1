@extends('layouts.mainAdmin')

@section('contentAdmin')
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h3 class="card-title">Listado Totalizador Salida</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive cell-border compact stripe" >                    
                        <table class="table table-bordered mb-0" style="width: 100% !important;" id="tablaTotSal">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Fecha</th>                                    
                                    <th>Tipo Usuario</th>
                                    <th>Nombre</th>
                                    <th>Entidad</th>
                                    <th>Donaciones</th>
                                    <th>Cuota</th>
                                    <th>Total Compras</th>
                                    <th>Incentivos</th>
                                    <th>Total Aportaciones</th>
                                    <th>Usuario Captador</th>
                                    <th>Usuario Contratante</th>
                                    <th>Entidad Supervisora</th>
                                    <th>Gestor Pais</th>
                                    <th>Organizacion Central</th>
                                    <th>Total Gestion</th>
                                    <th>Total Transferencia</th>                                    
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
            var table = $('#tablaTotSal').DataTable({
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
                ajax: "{{ url('/totalizadorSalida/show') }}",
                columns: [
                    { data: 'id_transsalida', "visible": false },
                    { data: 'fecha' },                    
                    { data: 'id_tipousu' },
                    { data: 'nombre_usu' },
                    { data: 'id_entidad' },
                    { data: 'donaciones' },                    
                    { data: 'cuotas' },
                    { data: 'total_qrs' },
                    { data: 'incentivos' },
                    { data: 'total_aportaciones' },
                    { data: 'id_usucapta' },
                    { data: 'id_usucontrata' },
                    { data: 'id_supervisora' },                    
                    { data: 'id_gestorpais' },
                    { data: 'id_orgcentral' },
                    { data: 'gestion' },
                    { data: 'id_pais' },
                    { data: 'total_transferencia' },                                       
                ],
                order: [[1,"asc"]]
            });
        });
    </script>
@endsection