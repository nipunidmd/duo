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

			<!-- <div class="sticky-wrapper sticky-wrapper-transparent sticky-wrapper-effect-1 sticky-wrapper-border-bottom d-none d-lg-block d-xl-none" data-plugin-sticky data-plugin-options="{'minWidth': 0, 'stickyStartEffectAt': 100, 'padding': {'top': 0}}">
				<div class="sticky-body">
					<div class="container-fluid">
						<div class="row align-items-center">
							<div class="col-9">
								<div class="py-4">
									<a href="index.php">
										<img alt="Porto" width="125" src="img/duo_images/Logo.jpg">
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
			</div>
 -->
			@include('includes.header')

			<div role="main" class="main no-height" id="main">

				<section>
					<div class="container">
						<div class="row text-center pt-4 mt-4 pb-4">
							<div class="col">
								<h2 class="font-weight-normal custom-font-size-1 mb-4 mt-4">Feel Free to Contact us</h2>
							</div>
						</div>
					</div>
				</section>

				<div class="container">

					<div class="row mt-4 pt-4 mb-4 pb-4">
						<div class="col-lg-6">

							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.921024571063!2d79.95002891426769!3d6.900048520586776!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae250cd51ec111b%3A0x7d010f72f3ff68d4!2sDesign%20DUO%20(PVT)%20LTD!5e0!3m2!1sen!2slk!4v1574326873044!5m2!1sen!2slk" width="350" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>

							

							<div class="row mb-4">
								<div class="col-lg-6">
									<ul class="list list-icons list-icons-style-2 text-color-primary">
										<li><i class="fas fa-map-marker-alt"></i>New York - NY</a></li>
										<li><i class="fas fa-phone"></i>(123) 456-789</a></li>
										<li><a href="{{route('contact-us')}}"><i class="far fa-envelope"></i>test@duo.com</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-lg-6">

							<p>Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>. Curabitur hendrerit, leo vitae interdum pretium, tortor risus dapibus tortor, eu suscipit orci leo sed nisl. Integer et ipsum eu nulla auctor mattis sit amet in diam. Vestibulum non ornare arcu. Class aptent taciti sociosqu ad.</p>

							<form id="contactForm" class="contact-form form" action="{{route('send')}}" method="POST">
								{!! csrf_field() !!}

								<div class="contact-form-success alert alert-success d-none mt-4" id="contactSuccess">
									<strong>Success!</strong> Your message has been sent to us.
								</div>

								<div class="contact-form-error alert alert-danger d-none mt-4" id="contactError">
									<strong>Error!</strong> There was an error sending your message.
									<span class="mail-error-message text-1 d-block" id="mailErrorMessage"></span>
								</div>
								<div class="form-row">
									<div class="form-group col">
										<input type="text" placeholder="Your Name" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" id="name" required>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col">
										<input type="email" placeholder="Your E-mail" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="email" required>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col">
										<input type="text" placeholder="Subject" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control" name="subject" id="subject" required>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col">
										<textarea maxlength="5000" placeholder="Message" data-msg-required="Please enter your message." rows="16" class="form-control" name="message" id="message" required></textarea>
									</div>
								</div>
								<div class="success" id="success">
					            </div>

					            <div class="errors-availabe" id="errors-availabe">
					            </div>
								<div class="form-row">
									<div class="form-group col">
										<input type="submit" value="Send Message" class="btn btn-quaternary  btn-lg text-uppercase font-weight-semibold" data-loading-text="Loading...">
									</div>
								</div>
							</form>

						</div>
					</div>

			</div>

			@include('includes.footer')
		</div>

		<script type="text/javascript">
function successHandler(form,data) {
        var y = document.getElementById("success");
        var element, name, arr;
        element = document.getElementById("success");
        name = "alert alert-success";
        arr = element.className.split(" ");
        if (arr.indexOf(name) == -1) {
          element.className += " " + name;
        }
        if (y.style.display === "none") {
          y.style.display = "block";
        }
        $('.success').html('Successfully Recieved the Message. We will Contact You Quickly <span class="glyphicon glyphicon-search" aria-hidden="true"></span>');
        setTimeout(function() {
           document.getElementById("submitForm").reset();
          $('#success').fadeOut('fast');
        }, 6000); // <-- time in milliseconds
      }

      function appendErrorHandler(data){
        var x = document.getElementById("errors-availabe");

        if(data.status == 422){

          var element, name, arr;
          element = document.getElementById("errors-availabe");
          name = "alert alert-danger";
          arr = element.className.split(" ");
          if (arr.indexOf(name) == -1) {
            element.className += " " + name;
          }
          if (x.style.display === "none") {
            x.style.display = "block";
          }
          $('.errors-availabe').html('* There are errors on the form. Please fix them before continuing.');
          setTimeout(function() {
            $('#errors-availabe').fadeOut('fast');
          }, 6000); // <-- time in milliseconds
        }

        if (data.status == 500) {

          var element, name, arr;
          element = document.getElementById("errors-availabe");
          name = "alert alert-danger";
          arr = element.className.split(" ");
          if (arr.indexOf(name) == -1) {
            element.className += " " + name;
          }
          if (x.style.display === "none") {
            x.style.display = "block";
          }
          $('.errors-availabe').html('**Something went wrong. Please try again later**');
          setTimeout(function() {
            $('#errors-availabe').fadeOut('fast');
          }, 6000); // <-- time in milliseconds


        }
      }

</script>

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
