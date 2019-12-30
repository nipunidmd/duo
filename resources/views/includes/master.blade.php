<!DOCTYPE html>
<html class="side-header photography-demo-3">
<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 

    <title>@yield('title')</title>  

    <meta name="keywords" content="@yield( 'meta-keyword')" />
    <meta name="description" content="@yield( 'meta-keyword')">
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

    @stack('moreCss')

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

    @include('includes.header')

    @yield('content')
    @include('includes.footer')
    
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

</body>
</html>