@extends('layouts.mainInicio')

@section('contentInicio')
  <div class="w-100 d-flex" style="margin-top: 104px;">
      <div class="aos-init aos-animate w-100" data-aos="fade-up" style="background-color: #2ea3f2; padding: 10px 0px 3px 24px;">
        <h5 style="color:#FFFFFF;">{{ $pagina[0]->pag_titulo }}</h5>
      </div>
  </div>

  <section id="hero" class="d-flex align-items-center" style="background-color: #fff !important; height: auto; margin-top: 0px;">
      <div class="container">
          <div class="row">
              <div class="col-lg-12 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                  <div id="verContenido">
              <div>
          </div>
      </div>
  </section>


  <script>
      $(function () {
          var pagContenido = '<?php echo $pagina[0]->pag_contenido; ?>';
          document.getElementById("verContenido").innerHTML = pagContenido;
      })    
  </script>
@endsection    