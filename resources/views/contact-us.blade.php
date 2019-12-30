@extends('includes.master')

@section('title', 'Contact Us | Design Duo')
@section('meta-description', 'duo design')
@section('meta-keyword', 'duo design')

@push('moreCss')

@endpush

@section('content')

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
							<li><i class="fas fa-map-marker-alt"></i>Gonawatte Rd, Malabe</a></li>

							<li><i class="fas fa-phone"></i>077 375 1444</a></li>

							<li><a href="{{route('contact-us')}}"><i class="far fa-envelope"></i>designduo4u@gmail.com</a></li>
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
</div>

@endsection
@push('moreJs') 
@endpush