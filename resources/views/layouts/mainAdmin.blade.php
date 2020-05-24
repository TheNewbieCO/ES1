<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ config('app.name', 'EmpresaSolidaria') }} | backoffice  </title>

    <link href="{{ asset('images/icono.ico') }}" rel="shortcut icon">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/select2/css/select2.min.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="{{ asset('js/jquery.js') }}"></script>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/jq-3.3.1/jszip-2.5.0/dt-1.10.20/af-2.3.4/b-1.6.1/b-colvis-1.6.1/b-flash-1.6.1/b-html5-1.6.1/b-print-1.6.1/cr-1.5.2/fc-3.3.0/fh-3.1.6/kt-2.5.1/r-2.2.3/rg-1.1.1/rr-1.2.6/sc-2.0.1/sp-1.0.1/sl-1.3.1/datatables.min.css"/>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
      <!-- Navbar -->
      <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
          </li>
          <!-- <li class="nav-item d-none d-sm-inline-block">
            <a href="index3.html" class="nav-link">Home</a>
          </li>
          <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link">Contact</a>
          </li> -->
        </ul>
      </nav>
      <!-- /.navbar -->
      <!-- Main Sidebar Container -->
      <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="/admin" class="brand-link">
          <img src="{{ asset('images/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
              style="opacity: .8">
          <span class="brand-text font-weight-bold">Empresa Solidaria</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
              <img src="{{ asset('images/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
              <a href="javascript:void(0)" class="d-block">Administrador</a>
            </div>
          </div>

          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column nav-compact" data-widget="treeview" role="menu" data-accordion="false">
              <li class="nav-item has-treeview" id="prin" onclick="retraer('prin')">
                  <a href="javascript:void(0);" class="nav-link"><i class="nav-icon fa fa-globe"></i><p>Principales<i class="right fas fa-angle-left"></i></p></a>
                  <ul class="nav nav-treeview">
                      <li class="nav-item"><a href="/usuarios" id="usuario" class="nav-link"><i class="far fa-circle nav-icon"></i><p>Usuarios</p></a></li>
                      <li class="nav-item"><a href="/promocionesSolidarias" id="promoSoli" class="nav-link"><i class="far fa-circle nav-icon"></i><p>Promociones Solidarias</p></a></li>
                      <li class="nav-item"><a href="/noticiasEntidad" id="notiEntidad" class="nav-link"><i class="far fa-circle nav-icon"></i><p>Noticias Entidad</p></a></li>
                      <li class="nav-item"><a href="/formularioContacto" id="formContact" class="nav-link"><i class="far fa-circle nav-icon"></i><p>Formulario Contacto</p></a></li>
                      <li class="nav-item"><a href="/temasEmpresa" id="temaEmpresa" class="nav-link"><i class="far fa-circle nav-icon"></i><p>Tematica de Empresa</p></a></li>
                      <li class="nav-item"><a href="/temasEntidad" id="temaEntidad" class="nav-link"><i class="far fa-circle nav-icon"></i><p>Tematica de Entidades</p></a></li>
                      <li class="nav-item"><a href="/tipoUsuarios" id="tipoUsuario" class="nav-link"><i class="far fa-circle nav-icon"></i><p>Tipos de Usuario</p></a></li>                                        
                      <li class="nav-item"><a href="/paises" id="pais" class="nav-link"><i class="far fa-circle nav-icon"></i><p>Paises</p></a></li>
                      <li class="nav-item"><a href="/provincias" id="provincias" class="nav-link"><i class="far fa-circle nav-icon"></i><p>Provincias</p></a></li>
                      <li class="nav-item"><a href="/empleados" id="emple" class="nav-link"><i class="far fa-circle nav-icon"></i><p>Franja Empleados</p></a></li>
                      <li class="nav-item"><a href="/tipoProfesional" id="tippro" class="nav-link"><i class="far fa-circle nav-icon"></i><p>Tipo Profesional</p></a></li>
                  </ul>
              </li>

              <li class="nav-item has-treeview" id="cont" onclick="retraer('cont')">
                  <a href="javascript:void(0);" class="nav-link"><i class="nav-icon fas fa-calculator"></i><p>Contables<i class="right fas fa-angle-left"></i></p></a>
                  <ul class="nav nav-treeview">
                      <li class="nav-item"><a href="/comprasSolidarias" id="compraSoli" class="nav-link"><i class="far fa-circle nav-icon"></i><p>Compras Solidarias</p></a></li>
                      <li class="nav-item"><a href="/totalizadorEntrada" id="totalizaEnt" class="nav-link"><i class="far fa-circle nav-icon"></i><p>Totalizador Entrada</p></a></li>
                      <li class="nav-item"><a href="/recibosEmpresa" id="recibosEmpresa" class="nav-link"><i class="far fa-circle nav-icon"></i><p>Recibos Empresa</p></a></li>
                      <li class="nav-item"><a href="/donacionDirecta" id="donacionD" class="nav-link"><i class="far fa-circle nav-icon"></i><p>Donaciones Directas</p></a></li>
                      <li class="nav-item"><a href="/tipoPagoDonacion" id="tipoDonacion" class="nav-link"><i class="far fa-circle nav-icon"></i><p>Tipos de Donacion</p></a></li>
                      <li class="nav-item"><a href="/totalizadorSalida" id="totalizaSal" class="nav-link"><i class="far fa-circle nav-icon"></i><p>Totalizador Salida</p></a></li>
                      <li class="nav-item"><a href="/tranferenciaEntidad" id="tansferEnt" class="nav-link"><i class="far fa-circle nav-icon"></i><p>Trasferencia Entidades</p></a></li>
                      <li class="nav-item"><a href="/autoFacturas" id="autoFac" class="nav-link"><i class="far fa-circle nav-icon"></i><p>Autofacturas</p></a></li>
                      <li class="nav-item"><a href="/transferenciasAutoFacturas" id="transAutoFac" class="nav-link"><i class="far fa-circle nav-icon"></i><p>Trasferencia Autofacturas</p></a></li>
                  </ul>
              </li>

              <li class="nav-item has-treeview" id="otro" onclick="retraer('otro')">
                  <a href="javascript:void(0);" class="nav-link"><i class="nav-icon fas fa-toolbox"></i><p>Otros<i class="right fas fa-angle-left"></i></p></a>
                  <ul class="nav nav-treeview">
                      <li class="nav-item"><a href="/textos" id="textos" class="nav-link"><i class="far fa-circle nav-icon"></i><p>Textos</p></a></li>
                      <li class="nav-item"><a href="/parametros" id="parametros" class="nav-link"><i class="far fa-circle nav-icon"></i><p>Parámetros</p></a></li>
                      <li class="nav-item"><a href="/paginas" id="paginas" class="nav-link"><i class="far fa-circle nav-icon"></i><p>Paginas</p></a></li>
                      <li class="nav-item"><a href="/newsLetter" id="news" class="nav-link"><i class="far fa-circle nav-icon"></i><p>Newsletter</p></a></li>                    
                  </ul>
              </li>

              <li class="nav-item"><a href="javascript:void(0);" id="cerrar" class="nav-link" onclick="CerrarSession();"><i class="nav-icon fa fa-sign-out-alt"></i><p>Cerrar sesión</p></a></li>
              <a class="button is-primary is-inverted is-outlined is-rounded" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();" id="logout" style="display: none;">
                {{ __('Logout') }}
              </a>
              
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
              </form>                         
            </ul>
          </nav>
          <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="m-0 text-dark">{{ $pagTitulo ?? '' }}</h1>
              </div><!-- /.col -->
            </div><!-- /.row -->
          </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <section class="content">
          <div class="container-fluid">
            @yield('contentAdmin')
          </div>
        </section>
      </div>

      <footer class="main-footer">
        &copy; Copyright 2020 <strong>Multired Comercia S.L.</strong>
        <div class="float-right d-none d-sm-inline-block">
          <b>Version</b> 1.0.0
        </div>
      </footer>
    </div>
    <!-- ./wrapper -->

  <script src="{{ asset('js/datatables.js') }}"></script>
  <!-- <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jq-3.3.1/jszip-2.5.0/dt-1.10.20/af-2.3.4/b-1.6.1/b-colvis-1.6.1/b-flash-1.6.1/b-html5-1.6.1/b-print-1.6.1/cr-1.5.2/fc-3.3.0/fh-3.1.6/kt-2.5.1/r-2.2.3/rg-1.1.1/rr-1.2.6/sc-2.0.1/sp-1.0.1/sl-1.3.1/datatables.min.js"></script>   -->
  <!-- Esta libreria debe ejecutarse primero que todas las demas JS -->

	<script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js') }}"></script>
	<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
	<script src="{{ asset('plugins/chart.js/Chart.min.js') }}"></script>
	<script src="{{ asset('plugins/sparklines/sparkline.js') }}"></script>
	<script src="{{ asset('plugins/jquery-knob/jquery.knob.min.js') }}"></script>
	<script src="{{ asset('plugins/moment/moment.min.js') }}"></script>
	<script src="{{ asset('plugins/daterangepicker/daterangepicker.js') }}"></script>
	<script src="{{ asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
	<script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
	<script src="{{ asset('js/adminlte.js') }}"></script>
  <script src="{{ asset('js/sweetAlert.js') }}"></script>

  <script src="{{ asset('plugins/select2/js/select2.full.min.js') }}"></script>  
  <script src="{{ asset('plugins/summernote/summernote-bs4.min.js') }}"></script>
  <!-- Esta libreria debe ejecutarse despues de ejecutar la libreria del datatable porque sino presenta conflicto -->

  <script>
      function mensajes($titulo,$texto,$tipo){
          swal({
              title: $titulo,
              text: $texto,
              icon: $tipo,
              buttons: false,
              timer: 1100,
          });
      };

      function CerrarSession(){
        swal({
          title: "¿Está seguro de cerrar la sesión?",
          text: "",
          icon: "warning",
          buttons: ["No", "Si"]
        })
        .then((willDelete) => {
          if (willDelete) {
            $("#logout").click();
          }
        });	
      };

      function retraer(id){
        let arrSupMenu = $(".has-treeview");
        for (let i=0; i < arrSupMenu.length; i++){
          if(arrSupMenu[i].id === id){
            arrSupMenu[i].firstElementChild.classList.add('active')
          }else{
            arrSupMenu[i].classList.remove('menu-open');
            arrSupMenu[i].firstElementChild.classList.remove('active')
            arrSupMenu[i].children[1].style.display = 'none';
          }
        }
      };

      $(function() {
        let arrMenu = $(".nav li .nav-link");
        for (let i=0; i < arrMenu.length; i++){
          if(arrMenu[i].pathname === window.location.pathname){
            arrMenu.removeClass("active");
            arrMenu[i].parentElement.parentElement.style.display = 'none';
            arrMenu[i].parentElement.parentElement.parentElement.classList.remove('menu-open');
            arrMenu[i].parentElement.parentElement.parentElement.firstElementChild.classList.remove('active');

            var codeId = arrMenu[i].id;
            if (codeId !== undefined){
                var item = document.getElementById(codeId);
                item.classList.add('active');
                arrMenu[i].parentElement.parentElement.style.display = 'block';
                arrMenu[i].parentElement.parentElement.parentElement.classList.add('menu-open');
                arrMenu[i].parentElement.parentElement.parentElement.firstElementChild.classList.add('active');
            }
          }
        } 
      });      
  </script>     
</body>
</html>