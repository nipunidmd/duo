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

			@include('includes.header')

			<div role="main" class="main no-height" id="main">
				
				<div class="container-fluid p-0">

					<div id="photographyLightbox" class="mfp-hide">
						<div class="thumb-gallery">
							<div class="owl-carousel owl-theme manual thumb-gallery-detail" id="thumbGalleryDetail">
								<div>
									<a href="project.php">
										<span class="img-thumbnail d-block">
											<img alt="" src="{{ asset('assets/img/duo_images/gallery/1.jpg')}}" class="img-fluid">
										</span>
									</a>
								</div>
								<div>
									<a href="project.php">
										<span class="img-thumbnail d-block">
											<img alt="" src="{{ asset('assets/img/duo_images/gallery/2.JPG')}}" class="img-fluid">
										</span>
									</a>
								</div>
								<div>
									<a href="project.php">
										<span class="img-thumbnail d-block">
											<img alt="" src="{{ asset('assets/img/duo_images/gallery/3.jpg')}}" class="img-fluid">
										</span>
									</a>
								</div>
								<div>
									<a href="project.php">
										<span class="img-thumbnail d-block">
											<img alt="" src="{{ asset('assets/img/duo_images/gallery/4.jpg')}}" class="img-fluid">
										</span>
									</a>
								</div>
								<div>
									<a href="project.php">
										<span class="img-thumbnail d-block">
											<img alt="" src="{{ asset('assets/img/duo_images/gallery/5.jpg')}}" class="img-fluid">
										</span>
									</a>
								</div>
								<div>
									<a href="project.php">
										<span class="img-thumbnail d-block">
											<img alt="" src="{{ asset('assets/img/duo_images/gallery/6.JPG')}}" class="img-fluid">
										</span>
									</a>
								</div>
								<div>
									<a href="project.php">
										<span class="img-thumbnail d-block">
											<img alt="" src="{{ asset('assets/img/duo_images/gallery/7.JPG')}}" class="img-fluid">
										</span>
									</a>
								</div>
								<div>
									<a href="project.php">
										<span class="img-thumbnail d-block">
											<img alt="" src="{{ asset('assets/img/duo_images/gallery/8.JPG')}}" class="img-fluid">
										</span>
									</a>
								</div>
								<div>
									<a href="project.php">
										<span class="img-thumbnail d-block">
											<img alt="" src="{{ asset('assets/img/duo_images/gallery/9.JPG')}}" class="img-fluid">
										</span>
									</a>
								</div>
								<div>
									<a href="project.php">
										<span class="img-thumbnail d-block">
											<img alt="" src="{{ asset('assets/img/duo_images/gallery/10.JPG')}}" class="img-fluid">
										</span>
									</a>
								</div>
								<div>
									<a href="project.php">
										<span class="img-thumbnail d-block">
											<img alt="" src="{{ asset('assets/img/duo_images/gallery/11.JPG')}}" class="img-fluid">
										</span>
									</a>
								</div>
								<div>
									<a href="project.php">
										<span class="img-thumbnail d-block">
											<img alt="" src="{{ asset('assets/img/duo_images/gallery/12.JPG')}}" class="img-fluid">
										</span>
									</a>
								</div>
								<div>
									<a href="project.php">
										<span class="img-thumbnail d-block">
											<img alt="" src="{{ asset('assets/img/duo_images/gallery/13.JPG')}}" class="img-fluid">
										</span>
									</a>
								</div>
								<div>
									<a href="project.php">
										<span class="img-thumbnail d-block">
											<img alt="" src="{{ asset('assets/img/duo_images/gallery/14.JPG')}}" class="img-fluid">
										</span>
									</a>
								</div>
								<div>
									<a href="project.php">
										<span class="img-thumbnail d-block">
											<img alt="" src="{{ asset('assets/img/duo_images/gallery/15.JPG')}}" class="img-fluid">
										</span>
									</a>
								</div>
								<div>
									<a href="project.php">
										<span class="img-thumbnail d-block">
											<img alt="" src="{{ asset('assets/img/duo_images/gallery/16.JPG')}}" class="img-fluid">
										</span>
									</a>
								</div>
								<div>
									<a href="project.php">
										<span class="img-thumbnail d-block">
											<img alt="" src="{{ asset('assets/img/duo_images/gallery/17.jpg')}}" class="img-fluid">
										</span>
									</a>
								</div>
								<div>
									<a href="project.php">
										<span class="img-thumbnail d-block">
											<img alt="" src="{{ asset('assets/img/duo_images/gallery/18.jpg')}}" class="img-fluid">
										</span>
									</a>
								</div>
								<div>
									<a href="project.php">
										<span class="img-thumbnail d-block">
											<img alt="" src="{{ asset('assets/img/duo_images/gallery/19.jpg')}}" class="img-fluid">
										</span>
									</a>
								</div>
								<div>
									<a href="project.php">
										<span class="img-thumbnail d-block">
											<img alt="" src="{{ asset('assets/img/duo_images/gallery/20.jpg')}}" class="img-fluid">
										</span>
									</a>
								</div>
								<div>
									<a href="project.php">
										<span class="img-thumbnail d-block">
											<img alt="" src="{{ asset('assets/img/duo_images/gallery/21.JPG')}}" class="img-fluid">
										</span>
									</a>
								</div>
								<div>
									<a href="project.php">
										<span class="img-thumbnail d-block">
											<img alt="" src="{{ asset('assets/img/duo_images/gallery/22.JPG')}}" class="img-fluid">
										</span>
									</a>
								</div>
								<div>
									<a href="project.php">
										<span class="img-thumbnail d-block">
											<img alt="" src="{{ asset('assets/img/duo_images/gallery/23.JPG')}}" class="img-fluid">
										</span>
									</a>
								</div>
								<div>
									<a href="project.php">
										<span class="img-thumbnail d-block">
											<img alt="" src="{{ asset('assets/img/duo_images/gallery/24.JPG')}}" class="img-fluid">
										</span>
									</a>
								</div>
								<div>
									<a href="project.php">
										<span class="img-thumbnail d-block">
											<img alt="" src="{{ asset('assets/img/duo_images/gallery/25.JPG')}}" class="img-fluid">
										</span>
									</a>
								</div>
							</div>
							<div class="owl-carousel owl-theme manual thumb-gallery-thumbs show-thumbs mt" id="thumbGalleryThumbs">
								<div>
									<span class="img-thumbnail d-block cur-pointer">
										<img alt="" src="{{ asset('assets/img/duo_images/gallery/1.jpg')}}">
									</span>
								</div>
								<div>
									<span class="img-thumbnail d-block cur-pointer">
										<img alt="" src="{{ asset('assets/img/duo_images/gallery/2.JPG')}}">
									</span>
								</div>
								<div>
									<span class="img-thumbnail d-block cur-pointer">
										<img alt="" src="{{ asset('assets/img/duo_images/gallery/3.jpg')}}">
									</span>
								</div>
								<div>
									<span class="img-thumbnail d-block cur-pointer">
										<img alt="" src="{{ asset('assets/img/duo_images/gallery/4.jpg')}}">
									</span>
								</div>
								<div>
									<span class="img-thumbnail d-block cur-pointer">
										<img alt="" src="{{ asset('assets/img/duo_images/gallery/5.jpg')}}">
									</span>
								</div>
								<div>
									<span class="img-thumbnail d-block cur-pointer">
										<img alt="" src="{{ asset('assets/img/duo_images/gallery/6.JPG')}}">
									</span>
								</div>
								<div>
									<span class="img-thumbnail d-block cur-pointer">
										<img alt="" src="{{ asset('assets/img/duo_images/gallery/7.JPG')}}">
									</span>
								</div>
								<div>
									<span class="img-thumbnail d-block cur-pointer">
										<img alt="" src="{{ asset('assets/img/duo_images/gallery/8.JPG')}}">
									</span>
								</div>
								<div>
									<span class="img-thumbnail d-block cur-pointer">
										<img alt="" src="{{ asset('assets/img/duo_images/gallery/9.JPG')}}">
									</span>
								</div>
								<div>
									<span class="img-thumbnail d-block cur-pointer">
										<img alt="" src="{{ asset('assets/img/duo_images/gallery/10.JPG')}}">
									</span>
								</div>
								<div>
									<span class="img-thumbnail d-block cur-pointer">
										<img alt="" src="{{ asset('assets/img/duo_images/gallery/11.JPG')}}">
									</span>
								</div>
								<div>
									<span class="img-thumbnail d-block cur-pointer">
										<img alt="" src="{{ asset('assets/img/duo_images/gallery/12.JPG')}}">
									</span>
								</div>
								<div>
									<span class="img-thumbnail d-block cur-pointer">
										<img alt="" src="{{ asset('assets/img/duo_images/gallery/13.JPG')}}">
									</span>
								</div>
								<div>
									<span class="img-thumbnail d-block cur-pointer">
										<img alt="" src="{{ asset('assets/img/duo_images/gallery/14.JPG')}}">
									</span>
								</div>
								<div>
									<span class="img-thumbnail d-block cur-pointer">
										<img alt="" src="{{ asset('assets/img/duo_images/gallery/15.JPG')}}">
									</span>
								</div>
								<div>
									<span class="img-thumbnail d-block cur-pointer">
										<img alt="" src="{{ asset('assets/img/duo_images/gallery/16.JPG')}}">
									</span>
								</div>
								<div>
									<span class="img-thumbnail d-block cur-pointer">
										<img alt="" src="{{ asset('assets/img/duo_images/gallery/17.jpg')}}">
									</span>
								</div>
								<div>
									<span class="img-thumbnail d-block cur-pointer">
										<img alt="" src="{{ asset('assets/img/duo_images/gallery/18.jpg')}}">
									</span>
								</div>
								<div>
									<span class="img-thumbnail d-block cur-pointer">
										<img alt="" src="{{ asset('assets/img/duo_images/gallery/19.jpg')}}">
									</span>
								</div>
								<div>
									<span class="img-thumbnail d-block cur-pointer">
										<img alt="" src="{{ asset('assets/img/duo_images/gallery/20.jpg')}}">
									</span>
								</div>
								<div>
									<span class="img-thumbnail d-block cur-pointer">
										<img alt="" src="{{ asset('assets/img/duo_images/gallery/21.JPG')}}">
									</span>
								</div>
								<div>
									<span class="img-thumbnail d-block cur-pointer">
										<img alt="" src="{{ asset('assets/img/duo_images/gallery/22.JPG')}}">
									</span>
								</div>
								<div>
									<span class="img-thumbnail d-block cur-pointer">
										<img alt="" src="{{ asset('assets/img/duo_images/gallery/23.JPG')}}">
									</span>
								</div>
								<div>
									<span class="img-thumbnail d-block cur-pointer">
										<img alt="" src="{{ asset('assets/img/duo_images/gallery/24.JPG')}}">
									</span>
								</div>
								<div>
									<span class="img-thumbnail d-block cur-pointer">
										<img alt="" src="{{ asset('assets/img/duo_images/gallery/25.JPG')}}">
									</span>
								</div>
							</div>
						</div>
					</div>
					<ul id="portfolioGrid" class="portfolioGridFullNoMargins p-0" data-grid-sizer=".col-lg-5ths">
						<li class="col-md-4 col-lg-5ths isotope-item p-0">
							<div class="portfolio-grid-item">
								<a href="#photographyLightbox" class="text-decoration-none popup-with-move-anim">
									<div class="thumb-info">
										<div class="thumb-info-wrapper size-3 m-0">
											<span class="thumb-info-background" style="background-image: url('assets/img/duo_images/gallery/1.jpg');"></span>
											<h2 class="thumb-info-title font-weight-bold text-center">
												Amazing View
												<span class="thumb-info-sub-title font-weight-light">
													Lorem ipsum dolor sit a met
												</span>
											</h2>
										</div>
									</div>
								</a>
							</div>
						</li>
						<li class="col-md-4 col-lg-5ths isotope-item p-0">
							<div class="portfolio-grid-item">
								<a href="#photographyLightbox" class="text-decoration-none popup-with-move-anim">
									<div class="thumb-info">
										<div class="thumb-info-wrapper size-3 m-0">
											<span class="thumb-info-background" style="background-image: url('assets/img/duo_images/gallery/2.JPG');"></span>
											<span class="thumb-info-plus"></span>
										</div>
									</div>
								</a>
							</div>
						</li>
						<li class="col-md-4 col-lg-5ths isotope-item p-0">
							<div class="portfolio-grid-item">
								<a href="#photographyLightbox" class="text-decoration-none popup-with-move-anim">
									<div class="thumb-info">
										<div class="thumb-info-wrapper size-3 m-0">
											<span class="thumb-info-background" style="background-image: url('assets/img/duo_images/gallery/3.jpg');"></span>
											<span class="thumb-info-plus"></span>
										</div>
									</div>
								</a>
							</div>
						</li>
						<li class="col-md-4 col-lg-5ths isotope-item p-0">
							<div class="portfolio-grid-item">
								<a href="#photographyLightbox" class="text-decoration-none popup-with-move-anim">
									<div class="thumb-info">
										<div class="thumb-info-wrapper size-3 m-0">
											<span class="thumb-info-background" style="background-image: url('assets/img/duo_images/gallery/4.jpg');"></span>
											<span class="thumb-info-plus"></span>
										</div>
									</div>
								</a>
							</div>
						</li>
						<li class="col-md-4 col-lg-5ths isotope-item p-0">
							<div class="portfolio-grid-item">
								<a href="#photographyLightbox" class="text-decoration-none popup-with-move-anim">
									<div class="thumb-info">
										<div class="thumb-info-wrapper size-3 m-0">
											<span class="thumb-info-background" style="background-image: url('assets/img/duo_images/gallery/5.jpg');"></span>
											<span class="thumb-info-plus"></span>
										</div>
									</div>
								</a>
							</div>
						</li>
						<li class="col-md-4 col-lg-5ths isotope-item p-0">
							<div class="portfolio-grid-item">
								<a href="#photographyLightbox" class="text-decoration-none popup-with-move-anim">
									<div class="thumb-info">
										<div class="thumb-info-wrapper size-3 m-0">
											<span class="thumb-info-background" style="background-image: url('assets/img/duo_images/gallery/6.JPG');"></span>
											<span class="thumb-info-plus"></span>
										</div>
									</div>
								</a>
							</div>
						</li>
						<li class="col-md-4 col-lg-5ths isotope-item p-0">
							<div class="portfolio-grid-item">
								<a href="#photographyLightbox" class="text-decoration-none popup-with-move-anim">
									<div class="thumb-info">
										<div class="thumb-info-wrapper size-3 m-0">
											<span class="thumb-info-background" style="background-image: url('assets/img/duo_images/gallery/7.JPG');"></span>
											<span class="thumb-info-plus"></span>
										</div>
									</div>
								</a>
							</div>
						</li>
						<li class="col-md-4 col-lg-5ths isotope-item p-0">
							<div class="portfolio-grid-item">
								<a href="#photographyLightbox" class="text-decoration-none popup-with-move-anim">
									<div class="thumb-info">
										<div class="thumb-info-wrapper size-3 m-0">
											<span class="thumb-info-background" style="background-image: url('assets/img/duo_images/gallery/8.JPG');"></span>
											<span class="thumb-info-plus"></span>
										</div>
									</div>
								</a>
							</div>
						</li>
						<li class="col-md-4 col-lg-5ths isotope-item p-0">
							<div class="portfolio-grid-item">
								<a href="#photographyLightbox" class="text-decoration-none popup-with-move-anim">
									<div class="thumb-info">
										<div class="thumb-info-wrapper size-3 m-0">
											<span class="thumb-info-background" style="background-image: url('assets/img/duo_images/gallery/9.JPG');"></span>
											<span class="thumb-info-plus"></span>
										</div>
									</div>
								</a>
							</div>
						</li>
						<li class="col-md-4 col-lg-5ths isotope-item p-0">
							<div class="portfolio-grid-item">
								<a href="#photographyLightbox" class="text-decoration-none popup-with-move-anim">
									<div class="thumb-info">
										<div class="thumb-info-wrapper size-3 m-0">
											<span class="thumb-info-background" style="background-image: url('assets/img/duo_images/gallery/10.JPG');"></span>
											<span class="thumb-info-plus"></span>
										</div>
									</div>
								</a>
							</div>
						</li>
						<li class="col-md-4 col-lg-5ths isotope-item p-0">
							<div class="portfolio-grid-item">
								<a href="#photographyLightbox" class="text-decoration-none popup-with-move-anim">
									<div class="thumb-info">
										<div class="thumb-info-wrapper size-3 m-0">
											<span class="thumb-info-background" style="background-image: url('assets/img/duo_images/gallery/11.JPG');"></span>
											<span class="thumb-info-plus"></span>
										</div>
									</div>
								</a>
							</div>
						</li>
						<li class="col-md-4 col-lg-5ths isotope-item p-0">
							<div class="portfolio-grid-item">
								<a href="#photographyLightbox" class="text-decoration-none popup-with-move-anim">
									<div class="thumb-info">
										<div class="thumb-info-wrapper size-3 m-0">
											<span class="thumb-info-background" style="background-image: url('assets/img/duo_images/gallery/12.JPG');"></span>
											<span class="thumb-info-plus"></span>
										</div>
									</div>
								</a>
							</div>
						</li>
						<li class="col-md-4 col-lg-5ths isotope-item p-0">
							<div class="portfolio-grid-item">
								<a href="#photographyLightbox" class="text-decoration-none popup-with-move-anim">
									<div class="thumb-info">
										<div class="thumb-info-wrapper size-3 m-0">
											<span class="thumb-info-background" style="background-image: url('assets/img/duo_images/gallery/13.JPG');"></span>
											<span class="thumb-info-plus"></span>
										</div>
									</div>
								</a>
							</div>
						</li>
						<li class="col-md-4 col-lg-5ths isotope-item p-0">
							<div class="portfolio-grid-item">
								<a href="#photographyLightbox" class="text-decoration-none popup-with-move-anim">
									<div class="thumb-info">
										<div class="thumb-info-wrapper size-3 m-0">
											<span class="thumb-info-background" style="background-image: url('assets/img/duo_images/gallery/14.JPG');"></span>
											<span class="thumb-info-plus"></span>
										</div>
									</div>
								</a>
							</div>
						</li>
						<li class="col-md-4 col-lg-5ths isotope-item p-0">
							<div class="portfolio-grid-item">
								<a href="#photographyLightbox" class="text-decoration-none popup-with-move-anim">
									<div class="thumb-info">
										<div class="thumb-info-wrapper size-3 m-0">
											<span class="thumb-info-background" style="background-image: url('assets/img/duo_images/gallery/15.JPG');"></span>
											<span class="thumb-info-plus"></span>
										</div>
									</div>
								</a>
							</div>
						</li>
						<li class="col-md-4 col-lg-5ths isotope-item p-0">
							<div class="portfolio-grid-item">
								<a href="#photographyLightbox" class="text-decoration-none popup-with-move-anim">
									<div class="thumb-info">
										<div class="thumb-info-wrapper size-3 m-0">
											<span class="thumb-info-background" style="background-image: url('assets/img/duo_images/gallery/16.JPG');"></span>
											<span class="thumb-info-plus"></span>
										</div>
									</div>
								</a>
							</div>
						</li>
						<li class="col-md-4 col-lg-5ths isotope-item p-0">
							<div class="portfolio-grid-item">
								<a href="#photographyLightbox" class="text-decoration-none popup-with-move-anim">
									<div class="thumb-info">
										<div class="thumb-info-wrapper size-3 m-0">
											<span class="thumb-info-background" style="background-image: url('assets/img/duo_images/gallery/17.jpg');"></span>
											<span class="thumb-info-plus"></span>
										</div>
									</div>
								</a>
							</div>
						</li>
						<li class="col-md-4 col-lg-5ths isotope-item p-0">
							<div class="portfolio-grid-item">
								<a href="#photographyLightbox" class="text-decoration-none popup-with-move-anim">
									<div class="thumb-info">
										<div class="thumb-info-wrapper size-3 m-0">
											<span class="thumb-info-background" style="background-image: url('assets/img/duo_images/gallery/18.jpg');"></span>
											<span class="thumb-info-plus"></span>
										</div>
									</div>
								</a>
							</div>
						</li>
						<li class="col-md-4 col-lg-5ths isotope-item p-0">
							<div class="portfolio-grid-item">
								<a href="#photographyLightbox" class="text-decoration-none popup-with-move-anim">
									<div class="thumb-info">
										<div class="thumb-info-wrapper size-3 m-0">
											<span class="thumb-info-background" style="background-image: url('assets/img/duo_images/gallery/19.jpg');"></span>
											<span class="thumb-info-plus"></span>
										</div>
									</div>
								</a>
							</div>
						</li>
						<li class="col-md-4 col-lg-5ths isotope-item p-0">
							<div class="portfolio-grid-item">
								<a href="#photographyLightbox" class="text-decoration-none popup-with-move-anim">
									<div class="thumb-info">
										<div class="thumb-info-wrapper size-3 m-0">
											<span class="thumb-info-background" style="background-image: url('assets/img/duo_images/gallery/20.jpg');"></span>
											<span class="thumb-info-plus"></span>
										</div>
									</div>
								</a>
							</div>
						</li>
						<li class="col-md-4 col-lg-5ths isotope-item p-0">
							<div class="portfolio-grid-item">
								<a href="#photographyLightbox" class="text-decoration-none popup-with-move-anim">
									<div class="thumb-info">
										<div class="thumb-info-wrapper size-3 m-0">
											<span class="thumb-info-background" style="background-image: url('assets/img/duo_images/gallery/21.JPG');"></span>
											<span class="thumb-info-plus"></span>
										</div>
									</div>
								</a>
							</div>
						</li>
						<li class="col-md-4 col-lg-5ths isotope-item p-0">
							<div class="portfolio-grid-item">
								<a href="#photographyLightbox" class="text-decoration-none popup-with-move-anim">
									<div class="thumb-info">
										<div class="thumb-info-wrapper size-3 m-0">
											<span class="thumb-info-background" style="background-image: url('assets/img/duo_images/gallery/22.JPG');"></span>
											<span class="thumb-info-plus"></span>
										</div>
									</div>
								</a>
							</div>
						</li>
						<li class="col-md-4 col-lg-5ths isotope-item p-0">
							<div class="portfolio-grid-item">
								<a href="#photographyLightbox" class="text-decoration-none popup-with-move-anim">
									<div class="thumb-info">
										<div class="thumb-info-wrapper size-3 m-0">
											<span class="thumb-info-background" style="background-image: url('assets/img/duo_images/gallery/23.JPG');"></span>
											<span class="thumb-info-plus"></span>
										</div>
									</div>
								</a>
							</div>
						</li>
						<li class="col-md-4 col-lg-5ths isotope-item p-0">
							<div class="portfolio-grid-item">
								<a href="#photographyLightbox" class="text-decoration-none popup-with-move-anim">
									<div class="thumb-info">
										<div class="thumb-info-wrapper size-3 m-0">
											<span class="thumb-info-background" style="background-image: url('assets/img/duo_images/gallery/24.JPG');"></span>
											<span class="thumb-info-plus"></span>
										</div>
									</div>
								</a>
							</div>
						</li>
						<li class="col-md-4 col-lg-5ths isotope-item p-0">
							<div class="portfolio-grid-item">
								<a href="#photographyLightbox" class="text-decoration-none popup-with-move-anim">
									<div class="thumb-info">
										<div class="thumb-info-wrapper size-3 m-0">
											<span class="thumb-info-background" style="background-image: url('assets/img/duo_images/gallery/25.JPG');"></span>
											<span class="thumb-info-plus"></span>
										</div>
									</div>
								</a>
							</div>
						</li>
					</ul>
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
