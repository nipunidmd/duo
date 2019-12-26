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
	    <link rel="shortcut icon" href="<?php echo e(asset('assets/img/favicon.ico')); ?>" type="image/x-icon" />
	    <link rel="apple-touch-icon" href=<?php echo e(asset('assets/img/apple-touch-icon.png' )); ?>>

	    <!-- Mobile Metas -->
	    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

	    <!-- Web Fonts  -->
	    <link href="<?php echo e(asset('assets/https://fonts.googleapis.com/css?family=PT+Sans:400,700' )); ?>" rel="stylesheet" type="text/css">

	    <!-- Vendor CSS -->
	    <link rel="stylesheet" href=<?php echo e(asset('assets/vendor/bootstrap/css/bootstrap.min.css' )); ?>>
	    <link rel="stylesheet" href=<?php echo e(asset('assets/vendor/fontawesome-free/css/all.min.css' )); ?>>
	    <link rel="stylesheet" href=<?php echo e(asset('assets/vendor/animate/animate.min.css' )); ?>>
	    <link rel="stylesheet" href=<?php echo e(asset('assets/vendor/simple-line-icons/css/simple-line-icons.min.css' )); ?>>
	    <link rel="stylesheet" href=<?php echo e(asset('assets/vendor/owl.carousel/assets/owl.carousel.min.css' )); ?>>
	    <link rel="stylesheet" href=<?php echo e(asset('assets/vendor/owl.carousel/assets/owl.theme.default.min.css' )); ?>>
	    <link rel="stylesheet" href=<?php echo e(asset('assets/vendor/magnific-popup/magnific-popup.min.css' )); ?>>

	    <!-- Theme CSS -->
	    <link rel="stylesheet" href=<?php echo e(asset('assets/css/theme.css' )); ?>>
	    <link rel="stylesheet" href=<?php echo e(asset('assets/css/theme-elements.css' )); ?>>
	    <link rel="stylesheet" href=<?php echo e(asset('assets/css/theme-blog.css' )); ?>>
	    <link rel="stylesheet" href=<?php echo e(asset('assets/css/theme-shop.css' )); ?>>

	    <!-- Current Page CSS -->
	    <link rel="stylesheet" href=<?php echo e(asset('assets/vendor/rs-plugin/css/settings.css' )); ?>>
	    <link rel="stylesheet" href=<?php echo e(asset('assets/vendor/rs-plugin/css/layers.css' )); ?>>
	    <link rel="stylesheet" href=<?php echo e(asset('assets/vendor/rs-plugin/css/navigation.css' )); ?>>
	    
	    <!-- Demo CSS -->
	    <link rel="stylesheet" href=<?php echo e(asset('assets/css/demos/demo-photography-3.css' )); ?>>

	    <!-- Skin CSS -->
	    <link rel="stylesheet" href=<?php echo e(asset('assets/css/skins/skin-photography.css' )); ?>> 

	    <!-- Theme Custom CSS -->
	    <link rel="stylesheet" href=<?php echo e(asset('assets/css/custom.css' )); ?>>

	    <!-- Head Libs -->
	    <script src="<?php echo e(asset('assets/vendor/modernizr/modernizr.min.js')); ?>"></script>

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
										<img alt="Porto" width="120" src="img/duo_images/Logo.jpg">
									</a>
								</div>
							</div>
							<div class="col-12 text-right">
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
			</div> -->

			<?php echo $__env->make('includes.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

			<div role="main" class="main no-height" id="main">
				
				<section>
					<div class="container">
						<div class="row text-center pt-4 mt-4 pb-4">
							<div class="col">
								<h2 class="font-weight-normal custom-font-size-1 mb-4 mt-4">We Love What We Do</h2>
								<p align="justify";>Design duo is an architecture firm based on Colombo, Srilanka headed by Archt.Madhawa Premaratne. We thrive on design challenges and are known for producing climatic responsive, highly resolved architecture for different client categories.
								</p>
								<p align="justify";>
								Building up close relationships with clientele, understanding their aspirations, offering personal attention towards each individual client’s problems and give them environment friendly, cost effective, innovative design solutions which will create positive influences on their life styles. 
								</p>
								<p align="justify";>
								Design duo predominately specialise in residential architecture, but is increasingly taking on community and commercial projects, with a special interest in eco-friendly boutique hotels. Our current projects are in different range in scale and proximity. We work locally and our architecture have an impact on improving the social life of local community.
								</p>
								<p align="justify";>
								At the core of our ethos and aesthetic is simplicity; our buildings are functional, beautiful, sustainable and engaged. Award winning and widely published design duo, values our strong reputation for both architecture and professional integrity spanning over several decades.
								</p>
							</div>
						</div>
					</div>
				</section>
				<section class="section photographers">
					<div class="container-fluid p-0">
						<div class="owl-carousel owl-theme nav-center custom-carousel-arrows-style m-0" data-plugin-options="{'items': 6,'autoplay': true, 'autoplayTimeout': 4000, 'loop': true, 'dots': false, 'nav': true}">
							<div>
								<span class="thumb-info thumb-info-centered-icons custom-thumb-info-photographers rounded-0">
									<span class="thumb-info-wrapper rounded-0">
										<a href="index.php">
											<img src="<?php echo e(asset('assets/img/duo_images/about_us/1.JPG')); ?>" class="img-fluid rounded-0" alt="">
										</a>
									</span>
								</span>
							</div>
							<div>
								<span class="thumb-info thumb-info-centered-icons custom-thumb-info-photographers rounded-0">
									<span class="thumb-info-wrapper rounded-0">
										<a href="index.php">
											<img src="<?php echo e(asset('assets/img/duo_images/about_us/2.JPG')); ?>" class="img-fluid rounded-0" alt="">
										</a>
									</span>
								</span>
							</div>
							<div>
								<span class="thumb-info thumb-info-centered-icons custom-thumb-info-photographers rounded-0">
									<span class="thumb-info-wrapper rounded-0">
										<a href="index.php">
											<img src="<?php echo e(asset('assets/img/duo_images/about_us/3.JPG')); ?>" class="img-fluid rounded-0" alt="">
										</a>
									</span>
								</span>
							</div>
							<div>
								<span class="thumb-info thumb-info-centered-icons custom-thumb-info-photographers rounded-0">
									<span class="thumb-info-wrapper rounded-0">
										<a href="index.php">
											<img src="<?php echo e(asset('assets/img/duo_images/about_us/4.JPG')); ?>" class="img-fluid rounded-0" alt="">
										</a>
									</span>
								</span>
							</div>
							<div>
								<span class="thumb-info thumb-info-centered-icons custom-thumb-info-photographers rounded-0">
									<span class="thumb-info-wrapper rounded-0">
										<a href="index.php">
											<img src="<?php echo e(asset('assets/img/duo_images/about_us/5.jpg')); ?>" class="img-fluid rounded-0" alt="">
										</a>
									</span>
								</span>
							</div>
							<div>
								<span class="thumb-info thumb-info-centered-icons custom-thumb-info-photographers rounded-0">
									<span class="thumb-info-wrapper rounded-0">
										<a href="index.php">
											<img src="<?php echo e(asset('assets/img/duo_images/about_us/6.JPG')); ?>" class="img-fluid rounded-0" alt="">
										</a>
									</span>
								</span>
							</div>
							<div>
								<span class="thumb-info thumb-info-centered-icons custom-thumb-info-photographers rounded-0">
									<span class="thumb-info-wrapper rounded-0">
										<a href="index.php">
											<img src="<?php echo e(asset('assets/img/duo_images/about_us/7.JPG')); ?>" class="img-fluid rounded-0" alt="">
										</a>
									</span>
								</span>
							</div>
							<div>
								<span class="thumb-info thumb-info-centered-icons custom-thumb-info-photographers rounded-0">
									<span class="thumb-info-wrapper rounded-0">
										<a href="index.php">
											<img src="<?php echo e(asset('assets/img/duo_images/about_us/8.JPG')); ?>" class="img-fluid rounded-0" alt="">
										</a>
									</span>
								</span>
							</div>
							<div>
								<span class="thumb-info thumb-info-centered-icons custom-thumb-info-photographers rounded-0">
									<span class="thumb-info-wrapper rounded-0">
										<a href="index.php">
											<img src="<?php echo e(asset('assets/img/duo_images/about_us/9.jpg')); ?>" class="img-fluid rounded-0" alt="">
										</a>
									</span>
								</span>
							</div>
							<div>
								<span class="thumb-info thumb-info-centered-icons custom-thumb-info-photographers rounded-0">
									<span class="thumb-info-wrapper rounded-0">
										<a href="index.php">
											<img src="<?php echo e(asset('assets/img/duo_images/about_us/10.jpg')); ?>" class="img-fluid rounded-0" alt="">
										</a>
									</span>
								</span>
							</div>
							<div>
								<span class="thumb-info thumb-info-centered-icons custom-thumb-info-photographers rounded-0">
									<span class="thumb-info-wrapper rounded-0">
										<a href="index.php">
											<img src="<?php echo e(asset('assets/img/duo_images/about_us/11.JPG')); ?>" class="img-fluid rounded-0" alt="">
										</a>
									</span>
								</span>
							</div>
							<div>
								<span class="thumb-info thumb-info-centered-icons custom-thumb-info-photographers rounded-0">
									<span class="thumb-info-wrapper rounded-0">
										<a href="index.php">
											<img src="<?php echo e(asset('assets/img/duo_images/about_us/12.JPG')); ?>" class="img-fluid rounded-0" alt="">
										</a>
									</span>
								</span>
							</div>
						</div>
					</div>
				</section>

			</div>

			<?php echo $__env->make('includes.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		</div>

		<!-- Vendor -->
	    <script src="<?php echo e(asset('assets/vendor/jquery/jquery.min.js')); ?>"></script>
	    <script src="<?php echo e(asset('assets/vendor/jquery.appear/jquery.appear.min.js')); ?>"></script>
	    <script src="<?php echo e(asset('assets/vendor/jquery.easing/jquery.easing.min.js')); ?>"></script>
	    <script src="<?php echo e(asset('assets/vendor/jquery.cookie/jquery.cookie.min.js')); ?>"></script>
	    <script src="<?php echo e(asset('assets/vendor/popper/umd/popper.min.js')); ?>"></script>
	    <script src="<?php echo e(asset('assets/vendor/bootstrap/js/bootstrap.min.js')); ?>"></script>
	    <script src="<?php echo e(asset('assets/vendor/common/common.min.js')); ?>"></script>
	    <script src="<?php echo e(asset('assets/vendor/jquery.validation/jquery.validate.min.js')); ?>"></script>
	    <script src="<?php echo e(asset('assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js')); ?>"></script>
	    <script src="<?php echo e(asset('assets/vendor/jquery.gmap/jquery.gmap.min.js')); ?>"></script>
	    <script src="<?php echo e(asset('assets/vendor/jquery.lazyload/jquery.lazyload.min.js')); ?>"></script>
	    <script src="<?php echo e(asset('assets/vendor/isotope/jquery.isotope.min.js')); ?>"></script>
	    <script src="<?php echo e(asset('assets/vendor/owl.carousel/owl.carousel.min.js')); ?>"></script>
	    <script src="<?php echo e(asset('assets/vendor/magnific-popup/jquery.magnific-popup.min.js')); ?>"></script>
	    <script src="<?php echo e(asset('assets/vendor/vide/jquery.vide.min.js')); ?>"></script>
	    <script src="<?php echo e(asset('assets/vendor/vivus/vivus.min.js')); ?>"></script>
	    <script src="<?php echo e(asset('assets/vendor/jquery-mousewheel/jquery.mousewheel.min.js')); ?>"></script>
	    
	    <!-- Theme Base, Components and Settings -->
	    <script src="<?php echo e(asset('assets/js/theme.js')); ?>"></script>
	    
	    <!-- Current Page Vendor and Views -->
	    <script src="<?php echo e(asset('assets/vendor/rs-plugin/js/jquery.themepunch.tools.min.js')); ?>"></script>
	    <script src="<?php echo e(asset('assets/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js')); ?>"></script>

	    <!-- Current Page Vendor and Views -->
	    <script src="<?php echo e(asset('assets/js/views/view.contact.js')); ?>"></script>

	    <!-- Demo -->
	    <script src="<?php echo e(asset('assets/js/demos/demo-photography.js')); ?>"></script>
	    
	    <!-- Theme Custom -->
	    <script src="<?php echo e(asset('assets/js/custom.js')); ?>"></script>
	    
	    <!-- Theme Initialization Files -->
	    <script src="<?php echo e(asset('assets/js/theme.init.js')); ?>"></script>


	</body>
</html>
