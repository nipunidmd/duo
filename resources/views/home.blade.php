<!DOCTYPE html>
<html class="side-header photography-demo-3">
  <head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 

    <title>Home | Design Duo</title>  

    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Duo - Design Duo">
    <meta name="author" content="okler.net">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.ico')}}" type="image/x-icon" />
    <link rel="apple-touch-icon" href={{ asset('assets/img/apple-touch-icon.png' )}}>

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

    <!-- Web Fonts  -->
    <link href="{{ asset('assets/https://fonts.googleapis.com/css?family=PT+Sans:400,700' )}}" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href={{ asset('assets/vendor/bootstrap/css/bootstrap.min.css' )}}>
    <link rel="stylesheet" href={{ asset('assets/vendor/fontawesome-free/css/all.min.css' )}}>
    <link rel="stylesheet" href={{ asset('assets/vendor/animate/animate.min.css' )}}>
    <link rel="stylesheet" href={{ asset('assets/vendor/simple-line-icons/css/simple-line-icons.min.css' )}}>
    <link rel="stylesheet" href={{ asset('assets/vendor/owl.carousel/assets/owl.carousel.min.css' )}}>
    <link rel="stylesheet" href={{ asset('assets/vendor/owl.carousel/assets/owl.theme.default.min.css' )}}>
    <link rel="stylesheet" href={{ asset('assets/vendor/magnific-popup/magnific-popup.min.css' )}}>

    <!-- Theme CSS -->
    <link rel="stylesheet" href={{ asset('assets/css/theme.css' )}}>
    <link rel="stylesheet" href={{ asset('assets/css/theme-elements.css' )}}>
    <link rel="stylesheet" href={{ asset('assets/css/theme-blog.css' )}}>
    <link rel="stylesheet" href={{ asset('assets/css/theme-shop.css' )}}>

    <!-- Current Page CSS -->
    <link rel="stylesheet" href={{ asset('assets/vendor/rs-plugin/css/settings.css' )}}>
    <link rel="stylesheet" href={{ asset('assets/vendor/rs-plugin/css/layers.css' )}}>
    <link rel="stylesheet" href={{ asset('assets/vendor/rs-plugin/css/navigation.css' )}}>
    
    <!-- Demo CSS -->
    <link rel="stylesheet" href={{ asset('assets/css/demos/demo-photography-3.css' )}}>

    <!-- Skin CSS -->
    <link rel="stylesheet" href={{ asset('assets/css/skins/skin-photography.css' )}}> 

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href={{ asset('assets/css/custom.css' )}}>

    <!-- Head Libs -->
    <script src="{{ asset('assets/vendor/modernizr/modernizr.min.js') }}"></script>

  </head>
  <body class="loading-overlay-showing" data-loading-overlay data-plugin-options="{'hideDelay': 500}">
    <div class="loading-overlay">
      <div class="bounce-loader">
        <div class="bounce1"></div>
        <div class="bounce2"></div>
        <div class="bounce3"></div>
      </div>
    </div>

    <div class="body">

      {{-- <div class="sticky-wrapper sticky-wrapper-transparent sticky-wrapper-effect-1 sticky-wrapper-border-bottom d-none d-lg-block d-xl-none" data-plugin-sticky data-plugin-options="{'minWidth': 0, 'stickyStartEffectAt': 100, 'padding': {'top': 0}}">
        <div class="sticky-body">
          <div class="container-fluid">
            <div class="row align-items-center">
              <div class="col-9">
                <div class="py-4">
                  <a href="{{ route('home') }}">
                    <img alt="Porto" width="120" src="{{ asset('assets/img/duo_images/Logo.jpg') }}">
                  </a>
                </div>
              </div>
              <div class="col-3 text-right">
                <button class="hamburguer-btn hamburguer-btn-light hamburguer-btn-sticky-dark" data-set-active="false">
                  <span class="hamburguer">
                    <span></span>
                    <span></span>
                    <span></span>
                  </span>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div> --}}

      @include('includes.header')

      <div class="col-lg-12">
        <div class="owl-carousel owl-theme nav-inside nav-style-1 nav-light" data-plugin-options="{'items': 1,'autoplay': true, 'autoplayTimeout': 4000, 'margin': 10, 'loop': true, 'nav': true, 'dots': true,'animateOut': 'fadeOut'}">
          <div>
            <div class="img-thumbnail border-0 p-0 d-block">
              <img class="img-fluid border-radius-0" src="{{ asset('assets/img/duo_images/sliders/3.jpg')}}" alt="">
            </div>
          </div>
          <div>
            <div class="img-thumbnail border-0 p-0 d-block">
              <img class="img-fluid border-radius-0" src="{{ asset('assets/img/duo_images/sliders/2.png')}}" alt="">
            </div>
          </div>
          <div>
            <div class="img-thumbnail border-0 p-0 d-block">
              <img class="img-fluid border-radius-0" src="{{ asset('assets/img/duo_images/sliders/1.jpg')}}" alt="">
            </div>
          </div>
          <div>
            <div class="img-thumbnail border-0 p-0 d-block">
              <img class="img-fluid border-radius-0" src="{{ asset('assets/img/duo_images/sliders/4.JPG')}}" alt="">
            </div>
          </div>
          <div>
            <div class="img-thumbnail border-0 p-0 d-block">
              <img class="img-fluid border-radius-0" src="{{ asset('assets/img/duo_images/sliders/5.JPG')}}" alt="">
            </div>
          </div>
          <div>
            <div class="img-thumbnail border-0 p-0 d-block">
              <img class="img-fluid border-radius-0" src="{{ asset('assets/img/duo_images/sliders/6.JPG')}}" alt="">
            </div>
          </div>
          <div>
            <div class="img-thumbnail border-0 p-0 d-block">
              <img class="img-fluid border-radius-0" src="{{ asset('assets/img/duo_images/sliders/7.JPG')}}" alt="">
            </div>
          </div>
          <div>
            <div class="img-thumbnail border-0 p-0 d-block">
              <img class="img-fluid border-radius-0" src="{{ asset('assets/img/duo_images/sliders/8.JPG')}}" alt="">
            </div>
          </div>
        </div>
      </div>

      <hr class="solid my-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="900">

      <section>
        <div class="container">
          <div class="row text-center pb-4">
            <div class="col">
              <h2 class="font-weight-normal custom-font-size-1 mb-4 mt-4">Home</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce consectetur diam id urna lobortis, at consectetur odio euismod. Maecenas eleifend semper vulputate. Integer pellentesque massa et felis aliquam, a pharetra mauris bibendum. Nullam ullamcorper enim id aliquet convallis. Cras pellentesque, ipsum sollicitudin suscipit mollis, nibh nisi facilisis lorem.</p>
            </div>
          </div>
        </div>
      </section>
      <br>
      <br>
    </div>

    

    <!-- Vendor -->
    <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery.appear/jquery.appear.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery.cookie/jquery.cookie.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/popper/umd/popper.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/common/common.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery.validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery.gmap/jquery.gmap.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery.lazyload/jquery.lazyload.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope/jquery.isotope.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/vide/jquery.vide.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/vivus/vivus.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery-mousewheel/jquery.mousewheel.min.js') }}"></script>
    
    <!-- Theme Base, Components and Settings -->
    <script src="{{ asset('assets/js/theme.js') }}"></script>
    
    <!-- Current Page Vendor and Views -->
    <script src="{{ asset('assets/vendor/rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>

    <!-- Current Page Vendor and Views -->
    <script src="{{ asset('assets/js/views/view.contact.js') }}"></script>

    <!-- Demo -->
    <script src="{{ asset('assets/js/demos/demo-photography.js') }}"></script>
    
    <!-- Theme Custom -->
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    
    <!-- Theme Initialization Files -->
    <script src="{{ asset('assets/js/theme.init.js') }}"></script>




    <!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information.
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    
      ga('create', 'UA-12345678-1', 'auto');
      ga('send', 'pageview');
    </script>
     -->


  </body>
</html>
