@extends('includes.master')

@section('title', ' Project | Design Duo')
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

@endsection
@push('moreJs') 
@endpush
