<header id="header" class="side-header d-flex">
	<div class="header-body">
		<div class="header-container container d-flex h-100">
			<div class="header-column flex-row flex-lg-column justify-content-center h-100">
				<div class="header-row flex-row justify-content-start justify-content-lg-center" style="padding-bottom: 20px;">
					<div class="header-logo">
						<a href="{{ route('home') }}">
							<img alt="Duo" width="125" src="{{ ('assets/img/duo_images/logo1.jpg') }}">
						</a>
					</div>
				</div>
				<div class="header-row header-row-side-header flex-row h-100 overflow-hidden pb-lg-5">
					<div class="header-nav header-nav-links header-nav-links-side-header header-nav-links-vertical header-nav-links-vertical-slide align-self-center">
						<div class="header-nav-main header-nav-main-square header-nav-main-dropdown-no-borders header-nav-main-effect-4 header-nav-main-sub-effect-1">
							<nav class="collapse">
								<ul class="nav nav-pills" id="mainNav">	
									<li>
										<a class="nav-link active" href="{{ route('home') }}">
											Home
										</a>
									</li>
									<li>
										<a class="nav-link" href="{{ route('about-us') }}">
											About Us
										</a>
									</li>
									<li class="dropdown">
										<a href="#" class="nav-link dropdown-toggle">
											Portfolio
										</a>
										<ul class="dropdown-menu">
											<li class="back-button d-none d-lg-block">
												<a class="dropdown-item">
													Back
												</a>
											</li>
											<li>
												<a class="dropdown-item" href="{{ route('project') }}">
													Projects
												</a>
											</li>
											<li>
												<a class="dropdown-item" href="{{ route('gallery') }}">
													Gallery
												</a>
											</li>
										</ul>
									</li>
									<li class="dropdown">
										<a href="#" class="nav-link dropdown-toggle">
											In progress
										</a>
										<ul class="dropdown-menu">
											<li class="back-button d-none d-lg-block">
												<a class="dropdown-item">
													Back
												</a>
											</li>
											<li>
												<a class="dropdown-item" href="{{ route('under-construction') }}">
													Under Construction
												</a>
											</li>
											<li>
												<a class="dropdown-item" href="{{ route('proposal') }}">
													Proposals
												</a>
											</li>
										</ul>
									</li>
									<li>
										<a class="nav-link" href="{{ route('contact-us') }}">
											Contact Us
										</a>
									</li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
				<div class="header-row flex-row justify-content-start justify-content-lg-center" style="padding: 0px 1px 0px 10px">
					<div class="header-logo">
						<a href="{{ route('home') }}">
							<img alt="Porto" width="85" src="{{ ('assets/img/duo_images/main_logo.jpg') }}">
						</a>
					</div>
				</div>
				<div class="header-row justify-content-end pb-lg-3">
					<ul class="header-social-icons social-icons d-none d-sm-block social-icons-clean d-sm-0">
						<li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
						<li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
						<li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
					</ul>
					<p class="d-none d-lg-block text-1 pt-3">© 2019 Duo. All rights reserved</p>
					<button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
						<i class="fas fa-bars"></i>
					</button>
				</div>
			</div>
		</div>
	</div>
</header>