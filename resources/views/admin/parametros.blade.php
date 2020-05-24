@extends('layouts.mainAdmin')

@section('contentAdmin')
<div id="pnlParams" class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card card-primary card-outline">
            <div class="card-header">
                <h4 class="card-title"><span id="titPnl"></span> Parametros</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 form-group">
                        <label for="usuSuperAdmin" class="">Usuario SuperAdmin</label>
                        <input name="usuSuperAdmin" id="usuSuperAdmin" type="text" class="form-control" value="{{ $params[0]->usuario_superadmin }}">
                        <p id="errUsuSuper" class="text-danger" style="display: none;"><em>El campo usuario superAdmin debe estar lleno</em></p>
                    </div>                
                    <div class="col-lg-3 col-md-3 col-sm-3 form-group">
                        <label for="passSuperAdmin" class="">Contraseña SuperAdmin</label>
                        <input name="passSuperAdmin" id="passSuperAdmin" type="text" class="form-control" value="{{ $params[0]->password_superadmin }}">
                        <p id="errPassSuper" class="text-danger" style="display: none;"><em>El campo contraseña superAdmin debe estar lleno</em></p>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 form-group">
                        <label for="comiCapta" class="">Comision Captador</label>
                        <input name="comiCapta" id="comiCapta" type="text" class="form-control" value="{{ $params[0]->comision_captador }}">
                        <p id="errComiEmpre" class="text-danger" style="display: none;"><em>El campo comision empresa debe estar lleno</em></p>
                    </div>                    
                    <div class="col-lg-3 col-md-3 col-sm-3 form-group">
                        <label for="comiContra" class="">Comision Contratante</label>
                        <input name="comiContra" id="comiContra" type="text" class="form-control" value="{{ $params[0]->comision_usucontrata }}">
                        <p id="errComiContra" class="text-danger" style="display: none;"><em>El campo comision contratante debe estar lleno</em></p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 form-group">
                        <label for="comiGest" class="">Comision Gestor</label>
                        <input name="comiGest" id="comiGest" type="text" class="form-control" value="{{ $params[0]->comision_usugestor }}">
                        <p id="errComiGest" class="text-danger" style="display: none;"><em>El campo comision gestor debe estar lleno</em></p>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 form-group">
                        <label for="comiEntSuper" class="">Comision Entidad Supervisora</label>
                        <input name="comiEntSuper" id="comiEntSuper" type="text" class="form-control" value="{{ $params[0]->comision_entidadsuper }}">
                        <p id="errComiEntSuper" class="text-danger" style="display: none;"><em>El campo comision entidad supervisora debe estar lleno</em></p>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 form-group">
                        <label for="comiAgenCent" class="">Comision Organizacion Central</label>
                        <input name="comiAgenCent" id="comiAgenCent" type="text" class="form-control" value="{{ $params[0]->comision_agencental }}">
                        <p id="errComiAgenCent" class="text-danger" style="display: none;"><em>El campo comision agencia central debe estar lleno</em></p>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 form-group">
                        <label for="diaReclama" class="">Numero de dia reclamacion</label>
                        <input name="diaReclama" id="diaReclama" type="text" class="form-control" value="{{ $params[0]->dia_reclamacion }}">
                        <p id="errDiaReclama" class="text-danger" style="display: none;"><em>El campo dia reclamacion debe estar lleno</em></p>
                    </div>                    
                    <input name="idParam" id="idParam" type="text" class="form-control" hidden value="{{ $params[0]->id_parametro }}">
                </div>

                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 form-group">
                        <label for="descripcionGesPai">Descripcion Gestor Pais</label>
                        <textarea class="form-control" id="descripcionGesPai" rows="3" value="{{ $params[0]->gestor_pais }}"></textarea>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 form-group">
                        <label for="descripcionOrgCentral">Descripcion Organizacion Central</label>
                        <textarea class="form-control" id="descripcionOrgCentral" rows="3" value="{{ $params[0]->organizacion_central }}"></textarea>
                    </div>                    
                </div>

                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 form-group">
                        <label for="usuRefCapta" class="">Usuario Referencia Captador</label>
                        <input name="usuRefCapta" id="usuRefCapta" type="text" class="form-control" value="{{ $params[0]->usuario_refCapta }}">
                    </div>
                </div>                
              
                <div class="row">
                    <button class="mb-2 mr-2 btn btn-success ml-auto" onclick='guardar()'>Guardar</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function guardar(){
        var usuSuperAdmin = document.getElementById("usuSuperAdmin").value;
        var passSuperAdmin = document.getElementById("passSuperAdmin").value;
        var comiContra = document.getElementById("comiContra").value;
        var comiGest = document.getElementById("comiGest").value;
        var comiCapta = document.getElementById("comiCapta").value;
        var comiEntSuper = document.getElementById("comiEntSuper").value;
        var comiAgenCent = document.getElementById("comiAgenCent").value;
        var diaReclama = document.getElementById("diaReclama").value;
        var descripcionGesPai = document.getElementById("descripcionGesPai").value;
        var descripcionOrgCentral = document.getElementById("descripcionOrgCentral").value;
        var usuario_refCapta = document.getElementById("usuRefCapta").value;

        var idParam = document.getElementById("idParam").value;
        var cantErr = 0;

        if(usuSuperAdmin == ''){
            $('#usuSuperAdmin').addClass("is-invalid");
            $('#errUsuSuper').css("display","block");
            cantErr ++ ;
        }else{
            $('#usuSuperAdmin').removeClass("is-invalid");
            $('#errUsuSuper').css("display","none");
        }
        if(passSuperAdmin == ''){
            $('#passSuperAdmin').addClass("is-invalid");
            $('#errPassSuper').css("display","block");
            cantErr ++ ;
        }else{
            $('#passSuperAdmin').removeClass("is-invalid");
            $('#errPassSuper').css("display","none");
        }
        if(comiContra == ''){
            $('#comiContra').addClass("is-invalid");            
            $('#errComiContra').css("display","block");
            cantErr ++ ;
        }else{
            $('#comiContra').removeClass("is-invalid");
            $('#errComiContra').css("display","none");
        }
        if(comiGest == ''){
            $('#comiGest').addClass("is-invalid");            
            $('#errComiGest').css("display","block");
            cantErr ++ ;
        }else{
            $('#comiGest').removeClass("is-invalid");
            $('#errComiGest').css("display","none");
        }
        if(comiCapta == ''){
            $('#comiEmpre').addClass("is-invalid");            
            $('#errComiEmpre').css("display","block");
            cantErr ++ ;
        }else{
            $('#comiEmpre').removeClass("is-invalid");
            $('#errComiEmpre').css("display","none");
        }
        if(comiEntSuper == ''){
            $('#comiEntSuper').addClass("is-invalid");            
            $('#errComiEntSuper').css("display","block");
            cantErr ++ ;
        }else{
            $('#comiEntSuper').removeClass("is-invalid");
            $('#errComiEntSuper').css("display","none");
        }                        

        if(cantErr == 0){
            $.ajax({
                url: "/parametros/"+idParam,
                type: 'PUT',
                data: {'usuSuperAdmin':usuSuperAdmin,'passSuperAdmin':passSuperAdmin,'comiContra':comiContra,'comiGest':comiGest,'comiCapta':comiCapta,'comiEntSuper':comiEntSuper,'comiAgenCent':comiAgenCent,'diaReclama':diaReclama,'descripcionGesPai':descripcionGesPai,'descripcionOrgCentral':descripcionOrgCentral,'usuario_refCapta':usuario_refCapta},
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},                  
                error: function(err) {
                    mensajes('Error',err.statusText+" : "+err.responseJSON['message'],'error');
                },
                success: function(res) {
                    mensajes('Exito!',res,'success');
                    return false;
                }
            });
        }
    };
</script>    
@endsection