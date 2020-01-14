@extends('includes.master')

@section('title', ' About Us | Design Duo')
@section('meta-description', 'Design duo is an architecture firm based on Colombo, Srilanka headed by Archt.Madhawa Premaratne. We thrive on design challenges and are known for producing climatic responsive, highly resolved architecture for different client categories.')
@section('meta-keyword', 'duo design about us')

@push('moreCss')

@endpush

@section('content')

@include('includes.header')

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
								<img src="{{ asset('assets/img/duo_images/about_us/1.JPG')}}" class="img-fluid rounded-0" alt="">
							</a>
						</span>
					</span>
				</div>
				<div>
					<span class="thumb-info thumb-info-centered-icons custom-thumb-info-photographers rounded-0">
						<span class="thumb-info-wrapper rounded-0">
							<a href="index.php">
								<img src="{{ asset('assets/img/duo_images/about_us/2.JPG')}}" class="img-fluid rounded-0" alt="">
							</a>
						</span>
					</span>
				</div>
				<div>
					<span class="thumb-info thumb-info-centered-icons custom-thumb-info-photographers rounded-0">
						<span class="thumb-info-wrapper rounded-0">
							<a href="index.php">
								<img src="{{ asset('assets/img/duo_images/about_us/3.JPG')}}" class="img-fluid rounded-0" alt="">
							</a>
						</span>
					</span>
				</div>
				<div>
					<span class="thumb-info thumb-info-centered-icons custom-thumb-info-photographers rounded-0">
						<span class="thumb-info-wrapper rounded-0">
							<a href="index.php">
								<img src="{{ asset('assets/img/duo_images/about_us/4.JPG')}}" class="img-fluid rounded-0" alt="">
							</a>
						</span>
					</span>
				</div>
				<div>
					<span class="thumb-info thumb-info-centered-icons custom-thumb-info-photographers rounded-0">
						<span class="thumb-info-wrapper rounded-0">
							<a href="index.php">
								<img src="{{ asset('assets/img/duo_images/about_us/5.jpg')}}" class="img-fluid rounded-0" alt="">
							</a>
						</span>
					</span>
				</div>
				<div>
					<span class="thumb-info thumb-info-centered-icons custom-thumb-info-photographers rounded-0">
						<span class="thumb-info-wrapper rounded-0">
							<a href="index.php">
								<img src="{{ asset('assets/img/duo_images/about_us/6.JPG')}}" class="img-fluid rounded-0" alt="">
							</a>
						</span>
					</span>
				</div>
				<div>
					<span class="thumb-info thumb-info-centered-icons custom-thumb-info-photographers rounded-0">
						<span class="thumb-info-wrapper rounded-0">
							<a href="index.php">
								<img src="{{ asset('assets/img/duo_images/about_us/7.JPG')}}" class="img-fluid rounded-0" alt="">
							</a>
						</span>
					</span>
				</div>
				<div>
					<span class="thumb-info thumb-info-centered-icons custom-thumb-info-photographers rounded-0">
						<span class="thumb-info-wrapper rounded-0">
							<a href="index.php">
								<img src="{{ asset('assets/img/duo_images/about_us/8.JPG')}}" class="img-fluid rounded-0" alt="">
							</a>
						</span>
					</span>
				</div>
				<div>
					<span class="thumb-info thumb-info-centered-icons custom-thumb-info-photographers rounded-0">
						<span class="thumb-info-wrapper rounded-0">
							<a href="index.php">
								<img src="{{ asset('assets/img/duo_images/about_us/9.jpg')}}" class="img-fluid rounded-0" alt="">
							</a>
						</span>
					</span>
				</div>
				<div>
					<span class="thumb-info thumb-info-centered-icons custom-thumb-info-photographers rounded-0">
						<span class="thumb-info-wrapper rounded-0">
							<a href="index.php">
								<img src="{{ asset('assets/img/duo_images/about_us/10.jpg')}}" class="img-fluid rounded-0" alt="">
							</a>
						</span>
					</span>
				</div>
				<div>
					<span class="thumb-info thumb-info-centered-icons custom-thumb-info-photographers rounded-0">
						<span class="thumb-info-wrapper rounded-0">
							<a href="index.php">
								<img src="{{ asset('assets/img/duo_images/about_us/11.JPG')}}" class="img-fluid rounded-0" alt="">
							</a>
						</span>
					</span>
				</div>
				<div>
					<span class="thumb-info thumb-info-centered-icons custom-thumb-info-photographers rounded-0">
						<span class="thumb-info-wrapper rounded-0">
							<a href="index.php">
								<img src="{{ asset('assets/img/duo_images/about_us/12.JPG')}}" class="img-fluid rounded-0" alt="">
							</a>
						</span>
					</span>
				</div>
			</div>
		</div>
	</section>

</div>

@endsection
@push('moreJs')	
@endpush
