@extends('layouts.mainInicio')

@section('contentInicio')
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          
          <div class="section-titleC aos-init aos-animate" data-aos="fade-up" style="padding-bottom: 0px;">
            <h3 style="color:#FFFFFF;">{{ $textos[7]->texto }}</h3>
          </div>
          <div class="row">
            <div class="col-lg-4 col-md-4 col-4 padInicio">
              <img src="{{ asset('images/empresas/1.png') }}" data-toggle="tooltip" data-placement="top" data-html="true" title="<em>Nombre</em><br><em>Tematica</em>" class="img-fluid img-thumbnail" style="height: 128px; width: 250px;" data-aos="zoom-in">
            </div>

            <div class="col-lg-4 col-md-4 col-4 padInicio">
              <img src="{{ asset('images/empresas/2.png') }}" data-toggle="tooltip" data-placement="top" data-html="true" title="<em>Nombre</em><br><em>Tematica</em>" class="img-fluid img-thumbnail" alt="" style="height: 128px; width: 250px;" data-aos="zoom-in" data-aos-delay="100">
            </div>

            <div class="col-lg-4 col-md-4 col-4 padInicio">
              <img src="{{ asset('images/empresas/3.png') }}" data-toggle="tooltip" data-placement="top" data-html="true" title="<em>Nombre</em><br><em>Tematica</em>" class="img-fluid img-thumbnail" alt="" style="height: 128px; width: 250px;" data-aos="zoom-in" data-aos-delay="200">
            </div>    
          </div>

          <div class="row">
            <div class="col-lg-4 col-md-4 col-4 padInicio">
              <img src="{{ asset('images/empresas/4.png') }}" data-toggle="tooltip" data-placement="top" data-html="true" title="<em>Nombre</em><br><em>Tematica</em>" class="img-fluid img-thumbnail" alt="" style="height: 128px; width: 250px;" data-aos="zoom-in">
            </div>

            <div class="col-lg-4 col-md-4 col-4 padInicio">
              <img src="{{ asset('images/empresas/5.png') }}" data-toggle="tooltip" data-placement="top" data-html="true" title="<em>Nombre</em><br><em>Tematica</em>" class="img-fluid img-thumbnail" alt="" style="height: 128px; width: 250px;" data-aos="zoom-in" data-aos-delay="100">
            </div>

            <div class="col-lg-4 col-md-4 col-4 padInicio">
              <img src="{{ asset('images/empresas/6.png') }}" data-toggle="tooltip" data-placement="top" data-html="true" title="<em>Nombre</em><br><em>Tematica</em>" class="img-fluid img-thumbnail" alt="" style="height: 128px; width: 250px;" data-aos="zoom-in" data-aos-delay="200">
            </div>    
          </div>

          <br>
          <div class="section-titleC aos-init aos-animate" data-aos="fade-up" style="padding-bottom: 0px;">
            <h3 style="color:#FFFFFF;">{{ $textos[13]->texto }}</h3>
            <h4 style="color:#FFFFFF;">{{ $textos[14]->texto }}</h4>
          </div>
		  
          <div class="row">
            <div class="col-lg-4 col-md-4 col-4 padInicio">
              <img src="{{ asset('images/empresas/7.png') }}" data-toggle="tooltip" data-placement="top" data-html="true" title="<em>Nombre</em><br><em>Tematica</em>" class="img-fluid img-thumbnail" alt="" style="height: 128px; width: 250px;" data-aos="zoom-in">
            </div>

            <div class="col-lg-4 col-md-4 col-4 padInicio">
              <img src="{{ asset('images/empresas/8.png') }}" data-toggle="tooltip" data-placement="top" data-html="true" title="<em>Nombre</em><br><em>Tematica</em>" class="img-fluid img-thumbnail" alt="" style="height: 128px; width: 250px;" data-aos="zoom-in" data-aos-delay="100">
            </div>

            <div class="col-lg-4 col-md-4 col-4 padInicio">
              <img src="{{ asset('images/empresas/9.png') }}" data-toggle="tooltip" data-placement="top" data-html="true" title="<em>Nombre</em><br><em>Tematica</em>" class="img-fluid img-thumbnail" alt="" style="height: 128px; width: 250px;" data-aos="zoom-in" data-aos-delay="200">
            </div>    
          </div>                          
        </div>
		
        <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="400">      
          <div class="row h-100 w-100">
			<div class="mx-auto my-auto">		  
				<img src="{{ asset('images/foto_Inicio.gif') }}" style="width: 340px;" class="img-fluid rounded-circle mx-auto my-auto" alt="">
			</div>
          </div>
        </div>
      </div>
    </div>

  </section>
  <!-- End Hero -->

  <main id="main">
    <!-- ======= Areas ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="row">
          <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="icofont-shopping-cart"></i></div>
              <h6 class="title"><a href="">{{ $textos[7]->texto }}</a></h6>
              <p class="description">{{ $textos[35]->texto }}</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="icofont-spinner-alt-2"></i></div>
              <h6 class="title"><a href="">{{ $textos[10]->texto }}</a></h6>
              <p class="description">{{ $textos[36]->texto }}</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="icofont-list"></i></div>
              <h6 class="title"><a href="">{{ $textos[8]->texto }}</a></h6>
              <p class="description">{{ $textos[37]->texto }}</p>
            </div>
          </div>
        </div>

      </div>
    </section>
	  <!-- End Areas Section -->

    <!-- ======= Empresas solidarias Section ======= -->
    <section id="empresas" class="team section-bg">
      <div class="container">

        <div class="section-titleC" data-aos="fade-up">
          <h2>{{ $textos[7]->texto }}</h2>
        </div>

        <div class="row">
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="member-img">
                <img src="{{ asset('images/fundaciones/5.png') }}" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h6>Solidarity Network – Soy Mamut <a href="javascript:void(0);"><img src="{{ asset('images/solidaria.png') }}" class="img-fluid rounded-circle" width="20" alt=""></a></h6>
                <h6>Tematica</h6>
                <!-- <div class="mt-auto">
                  <a href="javascript:void(0);"><img src="{{ asset('images/solidaria.png') }}" class="img-fluid rounded-circle" width="20" alt=""></a>
                </div> -->
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="200">
              <div class="member-img">
                <img src="{{ asset('images/fundaciones/2.png') }}" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h6>Sarah Jhonson <a href="javascript:void(0);"><img src="{{ asset('images/solidaria.png') }}" class="img-fluid rounded-circle" width="20" alt=""></a></h6>
                <h6>Tematica</h6>
                <!-- <div class="mt-auto">
                  <a href="javascript:void(0);"><img src="{{ asset('images/solidaria.png') }}" class="img-fluid rounded-circle" width="20" alt=""></a>
                </div>                 -->
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="300">
              <div class="member-img">
                <img src="{{ asset('images/fundaciones/3.png') }}" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h6>Naturalife</h6>
                <h6>Tematica</h6>
                <!-- <div class="mt-auto">
                  <a href="javascript:void(0);"><img src="{{ asset('images/solidaria.png') }}" class="img-fluid rounded-circle" width="20" alt=""></a>
                </div>                 -->
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="400">
              <div class="member-img">
                <img src="{{ asset('images/fundaciones/4.png') }}" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h6>Gospa – Arts</h6>
                <h6>Tematica</h6>
                <!-- <div class="mt-auto">
                  <a href="javascript:void(0);"><img src="{{ asset('images/solidaria.png') }}" class="img-fluid rounded-circle" width="20" alt=""></a>
                </div>                 -->
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="member-img">
                <img src="{{ asset('images/fundaciones/5.png') }}" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h6>Solidarity Network – Soy Mamut</h6>
                <!-- <div class="mt-auto">
                  <a href="javascript:void(0);"><img src="{{ asset('images/solidaria.png') }}" class="img-fluid rounded-circle" width="20" alt=""></a>
                </div>                 -->
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="200">
              <div class="member-img">
                <img src="{{ asset('images/fundaciones/2.png') }}" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h6>Sarah Jhonsons <a href="javascript:void(0);"><img src="{{ asset('images/solidaria.png') }}" class="img-fluid rounded-circle" width="20" alt=""></a></h6>
                <h6>Tematica</h6>
                <!-- <div class="mt-auto">
                  <a href="javascript:void(0);"><img src="{{ asset('images/solidaria.png') }}" class="img-fluid rounded-circle" width="20" alt=""></a>
                </div>                 -->
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="300">
              <div class="member-img">
                <img src="{{ asset('images/fundaciones/3.png') }}" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h6>Naturalife</h6>
                <!-- <div class="mt-auto">
                  <a href="javascript:void(0);"><img src="{{ asset('images/solidaria.png') }}" class="img-fluid rounded-circle" width="20" alt=""></a>
                </div>                 -->
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="400">
              <div class="member-img">
                <img src="{{ asset('images/fundaciones/4.png') }}" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h6>Gospa – Arts</h6>
                <!-- <div class="mt-auto">
                  <a href="javascript:void(0);"><img src="{{ asset('images/solidaria.png') }}" class="img-fluid rounded-circle" width="20" alt=""></a>
                </div>                 -->
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>
    <!-- End Empresas solidarias Section -->

    <!-- ======= Promociones solidarias Section ======= -->
    <section id="promoSolida" class="team section-bg backGen">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>{{ $textos[8]->texto }}</h2>
        </div>

        <div class="row">
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="member-img">
                <img src="{{ asset('images/fundaciones/5.png') }}" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h6>Solidarity Network – Soy Mamut</h6>
                <h6>Empresa</h6>
                <h6>Tematica</h6>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="200">
              <div class="member-img">
                <img src="{{ asset('images/fundaciones/2.png') }}" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h6>Sarah Jhonson</h6>     
                <h6>Empresa</h6>
                <h6>Tematica</h6>                         
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="300">
              <div class="member-img">
                <img src="{{ asset('images/fundaciones/3.png') }}" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h6>Naturalife</h6>      
                <h6>Empresa</h6>
                <h6>Tematica</h6>                        
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="400">
              <div class="member-img">
                <img src="{{ asset('images/fundaciones/4.png') }}" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h6>Gospa – Arts</h6>     
                <h6>Empresa</h6>
                <h6>Tematica</h6>                         
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="member-img">
                <img src="{{ asset('images/fundaciones/5.png') }}" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h6>Solidarity Network – Soy Mamut</h6>     
                <h6>Empresa</h6>
                <h6>Tematica</h6>                          
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="200">
              <div class="member-img">
                <img src="{{ asset('images/fundaciones/2.png') }}" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h6>Sarah Jhonson</h6>    
                <h6>Empresa</h6>
                <h6>Tematica</h6>                       
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="300">
              <div class="member-img">
                <img src="{{ asset('images/fundaciones/3.png') }}" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h6>Naturalife</h6>   
                <h6>Empresa</h6>
                <h6>Tematica</h6>                          
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="400">
              <div class="member-img">
                <img src="{{ asset('images/fundaciones/4.png') }}" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h6>Gospa – Arts</h6>    
                <h6>Empresa</h6>
                <h6>Tematica</h6>                          
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>
    <!-- End Empresas solidarias Section -->    
	
    <!-- ======= Entidades sin animo de lucro Section ======= -->
    <section id="fundaciones" class="team section-bg">
      <div class="container">

        <div class="section-titleC" data-aos="fade-up">
          <h2>{{ $textos[13]->texto }}</h2>
        </div>

        <div class="row">
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="member-img">
                <img src="{{ asset('images/fundaciones/5.png') }}" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h6>Solidarity Network – Soy Mamut</h6>
                <h6>Tematica</h6>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="200">
              <div class="member-img">
                <img src="{{ asset('images/fundaciones/2.png') }}" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h6>Sarah Jhonson</h6>
                <h6>Tematica</h6>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="300">
              <div class="member-img">
                <img src="{{ asset('images/fundaciones/3.png') }}" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h6>Naturalife</h6>
                <h6>Tematica</h6>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="400">
              <div class="member-img">
                <img src="{{ asset('images/fundaciones/4.png') }}" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h6>Gospa – Arts</h6>
                <h6>Tematica</h6>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="member-img">
                <img src="{{ asset('images/fundaciones/5.png') }}" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h6>Solidarity Network – Soy Mamut</h6>
                <h6>Tematica</h6>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="200">
              <div class="member-img">
                <img src="{{ asset('images/fundaciones/2.png') }}" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h6>Sarah Jhonson</h6>
                <h6>Tematica</h6>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="300">
              <div class="member-img">
                <img src="{{ asset('images/fundaciones/3.png') }}" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h6>Naturalife</h6>
                <h6>Tematica</h6>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="400">
              <div class="member-img">
                <img src="{{ asset('images/fundaciones/4.png') }}" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h6>Gospa – Arts</h6>
                <h6>Tematica</h6>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>
    <!-- End Entidades sin animo de lucro Section -->
 
    <!-- ======= Noticias Section ======= -->
    <section id="noticias" class="team section-bg backGen">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>{{ $textos[3]->texto }}</h2>
        </div>

        <div class="row">
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="member-img">
                <img src="{{ asset('images/team/team-1.jpg') }}" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h6>Walter White</h6>
                <span>Fecha</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="200">
              <div class="member-img">
                <img src="{{ asset('images/team/team-2.jpg') }}" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h6>Sarah Jhonson</h6>
                <span>Fecha</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="300">
              <div class="member-img">
                <img src="{{ asset('images/team/team-3.jpg') }}" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h6>William Anderson</h6>
                <span>Fecha</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="400">
              <div class="member-img">
                <img src="{{ asset('images/team/team-4.jpg') }}" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h6>Amanda Jepson</h6>
                <span>Fecha</span>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="member-img">
                <img src="{{ asset('images/team/team-1.jpg') }}" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h6>Walter White</h6>
                <span>Fecha</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="200">
              <div class="member-img">
                <img src="{{ asset('images/team/team-2.jpg') }}" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h6>Sarah Jhonson</h6>
                <span>Fecha</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="300">
              <div class="member-img">
                <img src="{{ asset('images/team/team-3.jpg') }}" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h6>William Anderson</h6>
                <span>Fecha</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="400">
              <div class="member-img">
                <img src="{{ asset('images/team/team-4.jpg') }}" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h6>Amanda Jepson</h6>
                <span>Fecha</span>
              </div>
            </div>
          </div>
        </div>        

      </div>
    </section>
    <!-- End Noticias Section -->

    <!-- End Noticias Section -->
  </main>
  <!-- End #main -->
@endsection  