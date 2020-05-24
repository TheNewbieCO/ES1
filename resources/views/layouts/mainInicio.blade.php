<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta http-equiv="Content-Language" content="en">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>  

  <title>{{ config('app.name', 'INDIBAlife') }} | Inicio</title>

  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
  <meta name="description" content="Inicio">
  <meta name="keywords" content="">

  <!-- Manifest -->
  <link rel="manifest" href="/manifest.json">
  <!-- Theme-color para Chrome -->
  <meta name="theme-color" content="#000000">

  <!-- Despliegue para Android -->
  <meta name="mobile-web-app-capable" content="yes">
  <meta name="application-name" content="PWA">
  <link rel="icon" sizes="512x512" href="/images/icons/icon-512x512.png">

  <!-- Despliegue para Safari + iOS -->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <meta name="apple-mobile-web-app-title" content="PWA">
  <link rel="apple-touch-icon" href="/images/icons/icon-512x512.png">

  <link href="/images/icons/splash-640x1136.png" media="(device-width: 320px) and (device-height: 568px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
  <link href="/images/icons/splash-750x1334.png" media="(device-width: 375px) and (device-height: 667px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
  <link href="/images/icons/splash-1242x2208.png" media="(device-width: 621px) and (device-height: 1104px) and (-webkit-device-pixel-ratio: 3)" rel="apple-touch-startup-image" />
  <link href="/images/icons/splash-1125x2436.png" media="(device-width: 375px) and (device-height: 812px) and (-webkit-device-pixel-ratio: 3)" rel="apple-touch-startup-image" />
  <link href="/images/icons/splash-828x1792.png" media="(device-width: 414px) and (device-height: 896px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
  <link href="/images/icons/splash-1242x2688.png" media="(device-width: 414px) and (device-height: 896px) and (-webkit-device-pixel-ratio: 3)" rel="apple-touch-startup-image" />
  <link href="/images/icons/splash-1536x2048.png" media="(device-width: 768px) and (device-height: 1024px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
  <link href="/images/icons/splash-1668x2224.png" media="(device-width: 834px) and (device-height: 1112px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
  <link href="/images/icons/splash-1668x2388.png" media="(device-width: 834px) and (device-height: 1194px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
  <link href="/images/icons/splash-2048x2732.png" media="(device-width: 1024px) and (device-height: 1366px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />

  <!-- Tile for Win8 -->
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="/images/icons/icon-512x512.png">

<script type="text/javascript">
    if ('serviceWorker' in navigator) {
        navigator.serviceWorker.register('/serviceworker.js', {
            scope: '.' 
        }).then(function (registration) {
            console.log('Registro Exitoso del SW', registration.scope);
        }, function (err) {
            console.log('Registro Fallido del SW', err);
        });
    }
</script>


  <!-- Favicons -->
  <link href="{{ asset('images/icono.ico') }}" type="image/png" rel="icon"/>

  <!-- Google Fonts -->
  <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet"> -->

  <!-- Vendor CSS Files -->
  <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/icofont/icofont.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/venobox/venobox.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/aos/aos.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('plugins/select2/css/select2.min.css') }}">




  <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
  <div class="socialBarra">
    <ul>
      <li><a href="https://www.facebook.com/indibalife" target="_blank" data-toggle="tooltip" data-placement="left" data-html="true" title="<em>Facebook</em>" class="icon-facebook"><i class="icofont-facebook"></i></a></li>
      <li><a href="https://www.instagram.com/indibalife/" target="_blank" data-toggle="tooltip" data-placement="left" data-html="true" title="<em>Instragram</em>" class="icon-instagram"><i class="icofont-instagram"></i></a></li>
      <li><a href="#" target="_blank" data-toggle="tooltip" data-placement="left" data-html="true" title="<em>Twitter</em>" class="icon-twitter"><i class="icofont-twitter"></i></a></li>
      <li><a href="https://www.youtube.com/watch?v=I2qmkA1DJ9Y" target="_blank" data-toggle="tooltip" data-placement="left" data-html="true" title="<em>Youtube</em>" class="icon-youtube"><i class="icofont-youtube-play"></i></a></li>
    </ul>
  </div>

	<div class="w-100 fixed-top d-flex" style="background-color: #2ea3f2 !important; height: 45px;">
		<div class="container d-flex align-items-center" style="max-width: 99% !important;">	
			<nav class="nav-menu d-none d-lg-block ml-auto">
				<ul>
          <li><select class="form-control" name="idPais" id="idPais" style="width: 100% !important"></select></li>        
          <li><a href="/Equipo" style="color: #ffffff" class="sombra">{{ $textos[34]->texto }}</a></li>
					<li><a href="/Entidad-Supervisora" style="color: #ffffff" class="sombra">{{ $textos[0]->texto }}</a></li>
					<li><a href="/PYMEF" style="color: #ffffff" class="sombra">{{ $textos[1]->texto }}</a></li>
					<li><a href="#contact" style="color: #ffffff" class="sombra">{{ $textos[2]->texto }}</a></li>
					<li><a href="" style="color: #ffffff" class="sombra">{{ $textos[3]->texto }}</a></li>
					@guest
						<li><a href="/registro" style="color: #ffffff" class="sombra">{{ $textos[4]->texto }}</a></li>					
					@else
						<li class="drop-down"><a href="javascript:void(0);" style="color: #ffffff" class="sombra">{{ $textos[5]->texto }}</a>
						  <ul>
							<li><a href="#">Opcion</a></li>
							<li><a href="#">Opcion</a></li>
							<li><a href="#">Opcion</a></li>
						  </ul>
						</li>
					@endguest
				</ul>
			</nav>
		</div>
	</div>
	<!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center" style="max-width: 99% !important;">
      <div class="logo mr-auto">
        <a href="/inicio">
          <img src="{{ asset('images/Logo.png') }}" alt="Empresa-Solidaria" id="logo" width="200" height="40" style="margin-top: -2px;">
        </a>
      </div>
      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="/inicio">{{ $textos[6]->texto }}</a></li>
          <li><a href="#empresas">{{ $textos[7]->texto }}</a></li>
          <li><a href="#header">{{ $textos[8]->texto }}</a></li>		  
          <li><a href="#fundaciones">{{ $textos[9]->texto }}</a></li>
          <li><a href="/Sello-Solidario">{{ $textos[10]->texto }}</a></li>
          <li><a href="#header">{{ $textos[11]->texto }}</a></li>
          <li><a href="#header">{{ $textos[12]->texto }}</a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header>
  <!-- End Header -->

  @yield('contentInicio')
   
  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container">

      <div class="section-title" data-aos="fade-up">
        <h2>{{ $textos[15]->texto }}</h2>
      </div>

      <div class="row">

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="contact-about">
            <h3>{{ $textos[7]->texto }}</h3>
            <p>{{ $textos[38]->texto }}</p>
            <div class="social-links">
              <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
              <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
              <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
              <a href="#" class="youtube"><i class="icofont-youtube"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
          <div class="info">
            <div>
              <i class="ri-map-pin-line"></i>
              <p>{{ $textos[39]->texto }}</p>
            </div>
          </div>
        </div>

        <div class="col-lg-5 col-md-12" data-aos="fade-up" data-aos-delay="300">
          <form action="forms/contact" method="post" role="form" class="php-email-form">
            <div class="form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Nombre" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
              <div class="validate"></div>
            </div>
            <div class="form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="E-mail" data-rule="email" data-msg="Please enter a valid email" />
              <div class="validate"></div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Asunto" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validate"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Mensaje" placeholder="Mensaje"></textarea>
              <div class="validate"></div>
            </div>
            <div class="g-recaptcha" data-sitekey="6LepRfkUAAAAAM6tanQtLzdxrr9XJAbeWQt_Rq-v"></div>
            <div class="mb-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">Enviar</button></div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- End Contact Section -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-3 text-lg-left text-center">
          <h6>{{ $textos[16]->texto }}</h6>
          <ul>
            <li><a href="#contact">{{ $textos[2]->texto }}</a></li>
            <li><a href="/Aviso-Legal">{{ $textos[17]->texto }}</a></li>
            <li><a href="/Politica-de-Privacidad">{{ $textos[18]->texto }}</a></li>
            <li><a href="/Equipo">{{ $textos[34]->texto }}</a></li>
          </ul>
        </div>

        <div class="col-3 text-lg-left text-center">
          <h6>{{ $textos[7]->texto }}</h6>
          <ul>
            <li><a href="">{{ $textos[19]->texto }}</a></li>
            <li><a href="">{{ $textos[20]->texto }}</a></li>
            <li><a href="">{{ $textos[21]->texto }}</a></li>
            <li><a href="">{{ $textos[22]->texto }}</a></li>
            <li><a href="">{{ $textos[23]->texto }}</a></li>
            <li><a href="">{{ $textos[24]->texto }}</a></li>            
          </ul>
        </div>

        <div class="col-3 text-lg-left text-center">
          <h6>{{ $textos[9]->texto }}</h6>
          <ul>
            <li><a href="">{{ $textos[26]->texto }}</a></li>
            <li><a href="">{{ $textos[27]->texto }}</a></li>
            <li><a href="">{{ $textos[28]->texto }}</a></li>
            <li><a href="">{{ $textos[29]->texto }}</a></li>
            <li><a href="">{{ $textos[30]->texto }}</a></li>
            <li><a href="">{{ $textos[31]->texto }}</a></li>            
            <li><a href="">{{ $textos[32]->texto }}</a></li>            
          </ul>
        </div>

        <div class="col-3 text-lg-left text-center">
          <h6>{{ $textos[33]->texto }}</h6>
          <ul>
            <li><a href="">{{ $textos[10]->texto }}</a></li>
            <li><a href="">{{ $textos[8]->texto }}</a></li>
            <li><a href="">{{ $textos[12]->texto }}</a></li>
            <li><a href="">{{ $textos[11]->texto }}</a></li>
            <li><a href="">{{ $textos[3]->texto }}</a></li>
            <li><a href="">{{ $textos[1]->texto }}</a></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="row w-100" style="height: 30px; background-color: #2d2d2d; position: absolute; padding-left: 25px; left: 15px; padding-top: 5px;">
      <div class="copyright">
        &copy; Copyright 2020 <strong>Multired Comercia S.L.</strong>
      </div>        
    </div>    
  </footer>
  <!-- End Footer --> 

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('vendor/jquery.easing/jquery.easing.min.js') }}"></script>
  <script src="{{ asset('vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('vendor/waypoints/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('vendor/counterup/counterup.min.js') }}"></script>
  <script src="{{ asset('vendor/owl.carousel/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('vendor/venobox/venobox.min.js') }}"></script>
  <script src="{{ asset('vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('js/sweetAlert.js') }}"></script>

  <script src="{{ asset('plugins/select2/js/select2.full.min.js') }}"></script>    

  <!-- Template Main JS File -->
  <script src="{{ asset('js/main_inicio.js') }}"></script>

  <script>
    $(function () {
      $('[data-toggle="tooltip"]').tooltip();

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
    })    
  </script>  
</body>
</html>

<!-- colombia
ecuador
brazil
bolivia
argentina
mexico
españa -->
<!-- capcha para validar 6LepRfkUAAAAAFqztTLpTP3iWeDyoYnsrVW_PFtY -->


<!--
tabla de imagenes
identificacion back
identificacion, registro web 
fijar pais back
fechas español, ordenar mas reciente a mas antigua back
formulario de contacto (enviar 2 correos al usuario y a empresasolidariaorg@gmail.com)
parametros empresasolidariaorg@gmail.com
conectar datos en el index
lista tematicas y empresas
1000 - publicidad
-->