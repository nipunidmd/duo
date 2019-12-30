@extends('includes.master')

@section('title', ' Proposal | Design Duo')
@section('meta-description', 'duo design')
@section('meta-keyword', 'duo design')

@push('moreCss')

@endpush

@section('content')

@include('includes.header')

<div role="main" class="main no-height" id="main">
	<div class="container">

		<div class="row pt-2">
			<div class="col">

				<ul class="nav nav-pills sort-source mb-3 pb-2" data-sort-id="portfolio" data-option-key="filter" data-plugin-options="{'layoutMode': 'fitRows', 'filter': '*'}">
					<li class="nav-item active" data-option-value="*"><a class="nav-link active" href="#">Show All</a></li>
					<li class="nav-item" data-option-value=".residential"><a class="nav-link" href="#">Residential</a></li>
					<li class="nav-item" data-option-value=".commercial"><a class="nav-link" href="#">Commercial</a></li>
					<li class="nav-item" data-option-value=".industrial"><a class="nav-link" href="#">Industrial</a></li>
				</ul>

				<div class="sort-destination-loader sort-destination-loader-showing">
					<div class="row mb-4 pt-1 portfolio-list sort-destination" data-sort-id="portfolio">

						<div class="col-md-6 col-lg-4 isotope-item mb-4 residential">
							<a href="{{route('under-construction-detail')}}">
								<span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
									<span class="thumb-info-wrapper">
										<img src="{{ asset('assets/img/duo_images/proposal/residential/r1.png')}}" class="img-fluid" alt="">
										<span class="thumb-info-title">
											<span class="thumb-info-inner">View Project...</span>
										</span>
									</span>
								</span>
							</a>
							<h4 class="mt-3 mb-0">Dulith House</h4>
						</div>
						<div class="col-md-6 col-lg-4 isotope-item mb-4 residential">
							<a href="{{route('under-construction-detail')}}">
								<span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
									<span class="thumb-info-wrapper">
										<img src="{{ asset('assets/img/duo_images/proposal/residential/r2.jpg')}}" class="img-fluid" alt="">
										<span class="thumb-info-title">
											<span class="thumb-info-inner">View Project...</span>
										</span>
									</span>
								</span>
							</a>
							<h4 class="mt-3 mb-0">Daham House</h4>
						</div>
						<div class="col-md-6 col-lg-4 isotope-item mb-4 commercial">
							<a href="{{route('under-construction-detail')}}">
								<span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
									<span class="thumb-info-wrapper">
										<img src="{{ asset('assets/img/duo_images/proposal/commercial/c1.jpg')}}" class="img-fluid" alt="">
										<span class="thumb-info-title">
											<span class="thumb-info-inner">View Project...</span>
										</span>
									</span>
								</span>
							</a>
							<h4 class="mt-3 mb-0">Beli Resort</h4>
						</div>
						<div class="col-md-6 col-lg-4 isotope-item mb-4 residential">
							<a href="{{route('under-construction-detail')}}">
								<span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
									<span class="thumb-info-wrapper">
										<img src="{{ asset('assets/img/duo_images/proposal/residential/r3.jpg')}}" class="img-fluid" alt="">
										<span class="thumb-info-title">
											<span class="thumb-info-inner">View Project...</span>
										</span>
									</span>
								</span>
							</a>
							<h4 class="mt-3 mb-0">Kottachchi House</h4>
						</div>
						<div class="col-md-6 col-lg-4 isotope-item mb-4 industrial">
							<a href="{{route('under-construction-detail')}}">
								<span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
									<span class="thumb-info-wrapper">
										<img src="{{ asset('assets/img/duo_images/proposal/industrial/i1.jpg')}}" class="img-fluid" alt="">
										<span class="thumb-info-title">
											<span class="thumb-info-inner">View Project...</span>
										</span>
									</span>
								</span>
							</a>
							<h4 class="mt-3 mb-0">Gahanath Waterhouse</h4>
						</div>
						<div class="col-md-6 col-lg-4 isotope-item mb-4 industrial">
							<a href="{{route('under-construction-detail')}}">
								<span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
									<span class="thumb-info-wrapper">
										<img src="{{ asset('assets/img/duo_images/proposal/industrial/i2.jpg')}}" class="img-fluid" alt="">
										<span class="thumb-info-title">
											<span class="thumb-info-inner">View Project...</span>
										</span>
									</span>
								</span>
							</a>
							<h4 class="mt-3 mb-0">SS Labels</h4>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
</div>

@endsection
@push('moreJs') 
@endpush
