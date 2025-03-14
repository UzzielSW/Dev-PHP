<!-- 
  autor: @Brayan Puyol
  Hotel Imperial
-->
<!DOCTYPE html>
<html lang="en">

<?php require 'modulos/head.php' ?>

<body>

<div id="preloader"></div>

<div class="tm-main-content" id="top">
  <div class="tm-top-bar-bg"></div> 
  <!-- tm-top bar -->
  <div class="tm-top-bar barra-top" id="tm-top-bar">
    <!-- container -->
    <div class="container ">
      <!-- row -->
      <div class="row">
        <nav class="navbar navbar-expand-lg">
          <!-- logo -->
          <a class="navbar-brand mr-auto" href="#">
              <img src="img/logo.png" alt="Site logo">
          </a>
          <!-- logo -->

          <!-- boton mod movil -->
          <button type="button" id="nav-toggle" class="navbar-toggler collapsed" data-toggle="collapse" data-target="#mainNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <!-- boton mod movil -->

          <!-- menu nav -->
          <div id="mainNav" class="collapse navbar-collapse tm-bg-white">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link active" href="#top">Inicio <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#tm-section-2">Galeria</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#tm-section-3">Destinos</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link reservar-link" href="javascript:void(0)">Reservar</a>
              </li>
            </ul>
          </div>                            
          <!-- menu nav -->
        </nav>
      </div> <!-- row -->
    </div> 
    <!-- container -->
  </div> 
  <!-- .tm-top-bar -->

  <!-- tm-page-wrap -->
  <div class="tm-page-wrap mx-auto">
    <!-- banner -->
    <section class="tm-banner">
      <!-- tm-container-outer -->
      <div class="tm-container-outer tm-banner-bg">
        <!-- container -->
        <div class="container">
          <!-- row 1-->
          <div class="row tm-banner-row tm-banner-row-header">
            <!-- col-xs-12 -->
            <div class="col-xs-12">
              <div class="tm-banner-header">
                <h1 class="text-uppercase tm-banner-title">Let's begin</h1>
                <img src="img/dots-3.png" alt="Dots">
                <p class="tm-banner-subtitle">Te ayudamos a elegir lo mejor.</p>
                <a href="javascript:void(0)" class="tm-down-arrow-link"><i class="fa fa-2x fa-angle-down tm-down-arrow"></i></a>       
              </div>    
            </div>  
            <!-- col-xs-12 -->                      
          </div> 
          <!-- row 1-->

          <!-- row 2-->
          <div class="row tm-banner-row" id="tm-section-search">
            <!-- formulario de reserva -->
            <?php require 'modulos/formReservacion.php'; ?>
            <!-- formulario de reserva -->
          </div> 
          <!-- row 2 -->
          <!-- overlay/ -->
          <div class="tm-banner-overlay"></div>
        </div>  
        <!-- container -->               
      </div>     
      <!-- .tm-container-outer -->                 
    </section>
    <!-- banner -->

    <!-- informacion -->
    <section class="p-5 tm-container-outer tm-bg-gray">            
      <div class="container">
        <div class="row">
          <div class="col-xs-12 mx-auto tm-about-text-wrap text-center">                    
              <h2 class="text-uppercase mb-4">En <strong>Imperial</strong> usted es la prioridad</h2>
              <p class="mb-4 info-text">Imperial te ofrece una gran variedad de hoteles en los mejores destinos del mundo para que disfrutes de unas vacaciones inolvidables. En nuestros hoteles encontrarás unas completas instalaciones en las que disfrutar de la amplia oferta gastronómica, del mejor entretenimiento y de un sin fín de servicios característicos de la compañía. Contamos con todas las medidas de seguridad para cuidar tu salud.</p>
          </div>
        </div>
      </div>            
    </section>
    <!-- informacion -->
    
    <!-- Instalaciones -->
    <div class="tm-container-outer" id="tm-section-2">
        <!-- Slide show 1-->
        <section class="tm-slideshow-section">
          <div class="tm-slideshow">
            <img src="img/turis1.jpg" alt="Image">
            <img src="img/turis2.jpg" alt="Image">
            <img src="img/turis3.jpg" alt="Image">
          </div>
          <div class="tm-slideshow-description tm-bg-primary">
            <h2 class="">Areas Turisticas</h2>
            <p>Estaras rodeado de muchos lugares turisticos los cuales podras visitar a unos cuantos metros.</p>
          </div>
        </section>
        <!-- Slide show 1-->

        <!-- Slide show 2 -->
        <section class="clearfix tm-slideshow-section tm-slideshow-section-reverse">
            <div class="tm-right tm-slideshow tm-slideshow-highlight">
              <img src="img/1.jpg" alt="Image">
              <img src="img/2.jpg" alt="Image">
              <img src="img/3.jpg" alt="Image">
            </div> 
            <div class="tm-slideshow-description tm-slideshow-description-left tm-bg-highlight">
              <h2 class="">Aplia variedad de comidas gastronómicas y entretenimiento</h2>
              <p>Contamos con una gran cantidad de restaurantes y locales de entretenimiento todos a tu disposicion en cualquier momento.</p>
            </div>                        
        </section>
        <!-- Slide show 2 -->

        <!-- Slide show 3 -->
        <section class="tm-slideshow-section">
            <div class="tm-slideshow">
              <img src="img/cuarto1.jpg" alt="Image">
              <img src="img/cuarto2.jpg" alt="Image">
              <img src="img/cuarto3.jpg" alt="Image">
              <img src="img/cuarto4.jpg" alt="Image">
            </div>
            <div class="tm-slideshow-description tm-bg-primary">
              <h2 class="">Cuartos</h2>
              <p>Contamos con una gran variedad de cuartos para los diferentes gustos y clases.</p>
            </div>
        </section>
        <!-- Slide show 3 -->

        <!-- Slide show 4 -->
        <section class="clearfix tm-slideshow-section tm-slideshow-section-reverse">
            <div class="tm-right tm-slideshow tm-slideshow-highlight">
              <img src="img/vistas1.jpg" alt="Image">
              <img src="img/vistas2.jpg" alt="Image">
              <img src="img/vistas3.jpg" alt="Image">
              <img src="img/vistas4.jpg" alt="Image">
            </div> 
            <div class="tm-slideshow-description tm-slideshow-description-left tm-bg-highlight">
              <h2 class="">Increibles vistas panoramicas</h2>
              <p>En algunas de nuestras instalaciones podra visitar lugares increibles con sus familias</p>
            </div>                        
        </section>
        <!-- Slide show 4 -->
    </div>
    <!-- Instalaciones -->

    <!-- Destinos -->
    <div class="tm-container-outer" id="tm-section-3">
      <!-- tab-content -->
      <div class="tab-content clearfix">
        <!-- Tab 1 -->
        <div class="tab-pane fade show active" id="1a">
          <!-- tm-place -->
          <div class="tm-recommended-place-wrap">
            <!-- place 1 -->
            <div class="tm-recommended-place">
              <img src="img/lugar1.jpg" alt="Image" class="img-fluid tm-recommended-img">
              <div class="tm-recommended-description-box">
                <h3 class="tm-recommended-title">Seccion Principal</h3>
                <p class="tm-text-highlight">Region Central</p>
                <p class="tm-text-gray">Contamos con todos los servicios sin limitaciones, facil accesibilidad y los mejores cuartos de nuestras secciones.</p>   
              </div>
              <a href="#" class="tm-recommended-price-box">
                <p class="tm-recommended-price">$150</p>
              </a>                        
            </div>
            <!-- place 1 -->

            <!-- place 2 -->
            <div class="tm-recommended-place">
              <img src="img/lugar2.jpg" alt="Image" class="img-fluid tm-recommended-img">
              <div class="tm-recommended-description-box">
                <h3 class="tm-recommended-title">Seccion de Clase</h3>
                <p class="tm-text-highlight">Region Norte</p>
                <p class="tm-text-gray">Con ciertas limitaciones en los servicios, facil acceso a lugares turisticos y la mas grande variedad de comidas de nuestras instalaciones.</p>   
              </div>
              <div id="preload-hover-img"></div>
              <a href="#" class="tm-recommended-price-box">
                <p class="tm-recommended-price">$140</p>
              </a>
            </div>
            <!-- place 2 -->

            <!-- place 3 -->
            <div class="tm-recommended-place">
              <img src="img/lugar3.jpg" alt="Image" class="img-fluid tm-recommended-img">
              <div class="tm-recommended-description-box">
                <h3 class="tm-recommended-title">Seccion Resort</h3>
                <p class="tm-text-highlight">Region Costera</p>
                <p class="tm-text-gray">Diseñado para que pase unas increibles vacaciones de verano con sus familias. Gran variedad de instalaciones de entretenimiento.</p>   
              </div>
              <a href="#" class="tm-recommended-price-box">
                <p class="tm-recommended-price">$130</p>
              </a>
            </div>
            <!-- place 3 -->
          </div>                        
          <!-- tm-place -->
        </div> 
        <!-- Tab 1 -->
      </div>
      <!-- tab-content -->
    </div>
    <!-- Destinos -->
  </div>
  <!-- tm-page-wrap -->
</div> 
<!-- .main-content -->

<?php require 'modulos/footer.php'; ?>

<?php require 'modulos/scripts.php'; ?>             

<script> 
    /* DOM is ready
    ------------------------------------------------*/
    $(function(){
      // Preloader
      $(window).on('load', function() {
        $('#preloader').delay(100).fadeOut('slow',function(){$(this).remove();});
      });

      // Change top navbar on scroll
      $(window).on("scroll", function() {
          if($(window).scrollTop() > 100) {
              $(".tm-top-bar").addClass("active");
          } else {                    
           $(".tm-top-bar").removeClass("active");
          }
      });

      // Smooth scroll to search form
      $('.tm-down-arrow-link').click(function(){
          $.scrollTo('#tm-section-search', 300, {easing:'linear'});
      });

      $('.reservar-link').click(function(){
          $.scrollTo('#tm-section-search', 300, {easing:'linear'});
      });

      // Date Picker in Search form
      var pickerCheckIn = datepicker('#inputCheckIn');
      var pickerCheckOut = datepicker('#inputCheckOut');

      // Update nav links on scroll
      $('#tm-top-bar').singlePageNav({
          currentClass:'active',
          offset: 60
      });

      // Close navbar after clicked
      $('.nav-link').click(function(){
          $('#mainNav').removeClass('show');
      });

      // Slick Carousel
      $('.tm-slideshow').slick({
          infinite: true,
          arrows: true,
          slidesToShow: 1,
          slidesToScroll: 1
      });

      $('.tm-current-year').text(new Date().getFullYear());  // actualizar fecha
    });
</script>

</body>
</html>