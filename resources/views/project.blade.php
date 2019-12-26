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

			@include('includes.header')

			<div role="main" class="main no-height" id="main">
				<div class="container">

					<div class="row pt-2">
						<div class="col">

							<ul class="nav nav-pills sort-source mb-3 pb-2" data-sort-id="portfolio" data-option-key="filter" data-plugin-options="{'layoutMode': 'fitRows', 'filter': '*'}">
								<li class="nav-item active" data-option-value="*"><a class="nav-link active" href="#">Show All</a></li>
								<li class="nav-item" data-option-value=".residential"><a class="nav-link" href="#">Residential</a></li>
								<li class="nav-item" data-option-value=".commercial"><a class="nav-link" href="#">Commercial</a></li>
								<li class="nav-item" data-option-value=".leisure"><a class="nav-link" href="#">Leisure</a></li>
								<li class="nav-item" data-option-value=".industrial"><a class="nav-link" href="#">Industrial</a></li>
								<li class="nav-item" data-option-value=".public"><a class="nav-link" href="#">Public</a></li>
							</ul>

							<div class="sort-destination-loader sort-destination-loader-showing">
								<div class="row mb-4 pt-1 portfolio-list sort-destination" data-sort-id="portfolio">

									@foreach($projects as $project)

									@if($project->type == 0)
									
									<div class="col-md-6 col-lg-4 isotope-item mb-4 residential">
										<a href="{{route('search.project',$project->slug)}}">
											<span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
												<span class="thumb-info-wrapper">
													<img src="{{asset($project->image)}}" class="img-fluid" alt="">
													<span class="thumb-info-title">
														<span class="thumb-info-inner">View Project...</span>
													</span>
												</span>
											</span>
										</a>
										<h4 class="mt-3 mb-0">{{$project->name}}</h4>
										<p class="mb-0">{{$project->location}}</p>
									</div>

									@elseif($project->type == 1)
									
									<div class="col-md-6 col-lg-4 isotope-item mb-4 commercial">
										<a href="{{route('search.project',$project->slug)}}">
											<span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
												<span class="thumb-info-wrapper">
													<img src="{{asset($project->image)}}" class="img-fluid" alt="">
													<span class="thumb-info-title">
														<span class="thumb-info-inner">View Project...</span>
													</span>
												</span>
											</span>
										</a>
										<h4 class="mt-3 mb-0">{{$project->name}}</h4>
										<p class="mb-0">{{$project->location}}</p>
									</div>

									@elseif($project->type == 2)
									
									<div class="col-md-6 col-lg-4 isotope-item mb-4 leisure">
										<a href="{{route('search.project',$project->slug)}}">
											<span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
												<span class="thumb-info-wrapper">
													<img src="{{asset($project->image)}}" class="img-fluid" alt="">
													<span class="thumb-info-title">
														<span class="thumb-info-inner">View Project...</span>
													</span>
												</span>
											</span>
										</a>
										<h4 class="mt-3 mb-0">{{$project->name}}</h4>
										<p class="mb-0">{{$project->location}}</p>
									</div>

									@elseif($project->type == 3)
									
									<div class="col-md-6 col-lg-4 isotope-item mb-4 industrial">
										<a href="{{route('search.project',$project->slug)}}">
											<span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
												<span class="thumb-info-wrapper">
													<img src="{{asset($project->image)}}" class="img-fluid" alt="">
													<span class="thumb-info-title">
														<span class="thumb-info-inner">View Project...</span>
													</span>
												</span>
											</span>
										</a>
										<h4 class="mt-3 mb-0">{{$project->name}}</h4>
										<p class="mb-0">{{$project->location}}</p>
									</div>

									@elseif($project->type == 4)
									
									<div class="col-md-6 col-lg-4 isotope-item mb-4 public">
										<a href="{{route('search.project',$project->slug)}}">
											<span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
												<span class="thumb-info-wrapper">
													<img src="{{asset($project->image)}}" class="img-fluid" alt="">
													<span class="thumb-info-title">
														<span class="thumb-info-inner">View Project...</span>
													</span>
												</span>
											</span>
										</a>
										<h4 class="mt-3 mb-0">{{$project->name}}</h4>
										<p class="mb-0">{{$project->location}}</p>
									</div>

									@endif
									@endforeach
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>

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
