@extends('includes.master')

@section('title', ' Project Detail | Design Duo')
@section('meta-description', 'duo design')
@section('meta-keyword', 'duo design')

@push('moreCss')

@endpush

@section('content')

@include('includes.header')

<div role="main" class="main no-height" id="main">

	<section class="page-header page-header-modern bg-color-light-scale-1 page-header-md ">
		<div class="container-fluid">
			<div class="row align-items-center">

				@php
				$previous = 0;
				if($project->id > 1)
					$previous = $project->id - 1;
				$pre_project = App\Project::whereId($previous)->first();
				@endphp


				<div class="col">
					@if($project->id > 1)
					<a href="{{route('search.project',$pre_project->slug)}}" class="portfolio-prev text-decoration-none d-block appear-animation" data-appear-animation="fadeInRightShorter">
						<div class="d-flex align-items-center line-height-1">
							<i class="fas fa-arrow-left text-dark text-4 mr-3"></i>
							<div class="d-none d-sm-block line-height-1">
								<span class="text-dark opacity-4 text-1">PREVIOUS PROJECT</span>
								<h4 class="font-weight-bold text-3 mb-0"></h4>
							</div>
						</div>
					</a>
					@endif
				</div>

				<div class="col">
					<div class="row">
						<div class="col-md-12 align-self-center p-static order-2 text-center">
							<div class="overflow-hidden pb-2">
								<h1 class="text-dark font-weight-bold text-9 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="100">{{$project->name}} - {{$project->location}}</h1>
							</div>
						</div>
									{{-- <div class="col-md-12 align-self-center order-1">
										<ul class="breadcrumb d-block text-center appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="300">
											<li><a href="#">Home</a></li>
											<li><a href="#">Portfolio</a></li>
											<li class="active">Small Slider</li>
										</ul>
									</div> --}}
					</div>
				</div>

				@php
				$next = 0;
				$count = App\Project::count();
				if($project->id < $count)
					$next = $project->id + 1;
				$next_project = App\Project::whereId($next)->first();

				@endphp

				<div class="col">
					@if($project->id < $count)
					<a href="{{route('search.project',$next_project->slug)}}" class="portfolio-next text-decoration-none d-block float-right appear-animation" data-appear-animation="fadeInLeftShorter">
						<div class="d-flex align-items-center text-right line-height-1">
							<div class="d-none d-sm-block line-height-1">
								<span class="text-dark opacity-4 text-1">NEXT PROJECT</span>
								<h4 class="font-weight-bold text-3 mb-0"></h4>
							</div>
							<i class="fas fa-arrow-right text-dark text-4 ml-3"></i>
						</div>
					</a>
					@endif
				</div>
			</div>
		</div>
	</section>

	<div class="container pt-2 pb-4">

		<div class="row pb-4 mb-2">
			<div class="col-md-8 col-sm-12 mb-4 mb-md-0 appear-animation project-padding mx-auto"  data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="300">

				<div class="owl-carousel owl-theme nav-inside nav-inside-edge nav-squared nav-with-transparency nav-dark mt-3" data-plugin-options="{'items': 1,'autoplay': true, 'autoplayTimeout': 4000, 'margin': 10, 'loop': true, 'nav': true, 'dots': false}">

					@foreach($project->projectImages as $pro)
					<div>
						<div class="img-thumbnail border-0 border-radius-0 p-0 d-block" data-transform_in="y:[-300%];opacity:0;s:500;">
							<img src="{{$pro->img_src}}" class="img-fluid border-radius-0" alt="">
						</div>
					</div>
					@endforeach

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

@endsection
@push('moreJs') 
@endpush
