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
			</div> -->

			<?php echo $__env->make('includes.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

			<div role="main" class="main no-height" id="main">
				
				<section class="page-header page-header-modern bg-color-light-scale-1 page-header-md ">
					<div class="container-fluid">
						<div class="row align-items-center">
			                    
			                <?php 
			                	$previous = 0;
			                	if($project->id > 1)
			                	$previous = $project->id - 1;
			                    $pre_project = App\Project::whereId($previous)->first();
			                 ?>

			                
							<div class="col">
								<?php if($project->id > 1): ?>
								<a href="<?php echo e(route('search.project',$pre_project->slug)); ?>" class="portfolio-prev text-decoration-none d-block appear-animation" data-appear-animation="fadeInRightShorter">
									<div class="d-flex align-items-center line-height-1">
										<i class="fas fa-arrow-left text-dark text-4 mr-3"></i>
										<div class="d-none d-sm-block line-height-1">
											<span class="text-dark opacity-4 text-1">PREVIOUS PROJECT</span>
											<h4 class="font-weight-bold text-3 mb-0"></h4>
										</div>
									</div>
								</a>
								<?php endif; ?>
							</div>
							
							<div class="col">
								<div class="row">
									<div class="col-md-12 align-self-center p-static order-2 text-center">
										<div class="overflow-hidden pb-2">
											<h1 class="text-dark font-weight-bold text-9 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="100"><?php echo e($project->name); ?> - <?php echo e($project->location); ?></h2>
										</div>
									</div>
									<div class="col-md-12 align-self-center order-1">
										<ul class="breadcrumb d-block text-center appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="300">
											<li><a href="#">Home</a></li>
											<li><a href="#">Portfolio</a></li>
											<li class="active">Small Slider</li>
										</ul>
									</div>
								</div>
							</div>

							<?php 
								$next = 0;
								$count = App\Project::count();
								if($project->id < $count)
			                	$next = $project->id + 1;
			                    $next_project = App\Project::whereId($next)->first();

			                 ?>

							<div class="col">
								<?php if($project->id < $count): ?>
								<a href="<?php echo e(route('search.project',$next_project->slug)); ?>" class="portfolio-next text-decoration-none d-block float-right appear-animation" data-appear-animation="fadeInLeftShorter">
									<div class="d-flex align-items-center text-right line-height-1">
										<div class="d-none d-sm-block line-height-1">
											<span class="text-dark opacity-4 text-1">NEXT PROJECT</span>
											<h4 class="font-weight-bold text-3 mb-0"></h4>
										</div>
										<i class="fas fa-arrow-right text-dark text-4 ml-3"></i>
									</div>
								</a>
								<?php endif; ?>
							</div>
						</div>
					</div>
				</section>

				<div class="container pt-2 pb-4">

					<div class="row pb-4 mb-2">
						<div class="col-md-12 mb-4 mb-md-0 appear-animation" style="padding: 0px 200px 0px 200px;" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="300">

							<div class="owl-carousel owl-theme nav-inside nav-inside-edge nav-squared nav-with-transparency nav-dark mt-3" data-plugin-options="{'items': 1,'autoplay': true, 'autoplayTimeout': 4000, 'margin': 10, 'loop': true, 'nav': true, 'dots': false}">

								<?php $__currentLoopData = $project->projectImages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<div>
									<div class="img-thumbnail border-0 border-radius-0 p-0 d-block" data-transform_in="y:[-300%];opacity:0;s:500;">
										<img src="<?php echo e($pro->img_src); ?>" class="img-fluid border-radius-0" alt="">
									</div>
								</div>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								
							</div>
						</div>
						<!-- <div class="col-md-6">
							<div class="overflow-hidden">
								<h2 class="text-color-dark font-weight-normal text-4 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="600">Project <strong class="font-weight-extra-bold">Description</strong></h2>
							</div>
							<p class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800">Donec volutpat nibh sit amet libero ornare non laoreet arcu luctus. Donec id arcu quis mauris euismod placerat sit amet ut metus. Sed imperdiet fringilla sem eget euismod. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
						</div> -->
					</div>

				</div>

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
