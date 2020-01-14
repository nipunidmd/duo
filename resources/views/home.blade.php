@extends('includes.master')

@section('title', 'Home | Design Duo')
@section('meta-description', 'Design Duo - Design duo predominately specialise in residential architecture, but is increasingly taking on community and commercial projects, with a special interest in eco-friendly boutique hotels. Our current projects are in different range in scale and proximity. We work locally and our architecture have an impact on improving the social life of local community.')
@section('meta-keyword', 'designduo4u.com, designduo4u, design duo, design duo (pvt) ltd, architecture firm, Madhawa Premaratne, specialise in residential architecture, commercial, leisure, industrial, public architecture projects, architecture firm in Colombo')

@push('moreCss')

@endpush

@section('content')

@include('includes.header')

<div class="col-lg-12">
  <div class="owl-carousel owl-theme nav-inside nav-style-1 nav-light" data-plugin-options="{'items': 1,'autoplay': true, 'autoplayTimeout': 4000, 'margin': 10, 'loop': true, 'nav': true, 'dots': true,'animateOut': 'fadeOut'}">
    <div>
      <div class="img-thumbnail border-0 p-0 d-block">
        <img class="img-fluid border-radius-0" src="{{ asset('assets/img/duo_images/sliders/3.jpg')}}" alt="">
      </div>
    </div>
    <div>
      <div class="img-thumbnail border-0 p-0 d-block">
        <img class="img-fluid border-radius-0" src="{{ asset('assets/img/duo_images/sliders/2.png')}}" alt="">
      </div>
    </div>
    <div>
      <div class="img-thumbnail border-0 p-0 d-block">
        <img class="img-fluid border-radius-0" src="{{ asset('assets/img/duo_images/sliders/1.jpg')}}" alt="">
      </div>
    </div>
    <div>
      <div class="img-thumbnail border-0 p-0 d-block">
        <img class="img-fluid border-radius-0" src="{{ asset('assets/img/duo_images/sliders/4.JPG')}}" alt="">
      </div>
    </div>
    <div>
      <div class="img-thumbnail border-0 p-0 d-block">
        <img class="img-fluid border-radius-0" src="{{ asset('assets/img/duo_images/sliders/5.JPG')}}" alt="">
      </div>
    </div>
    <div>
      <div class="img-thumbnail border-0 p-0 d-block">
        <img class="img-fluid border-radius-0" src="{{ asset('assets/img/duo_images/sliders/6.JPG')}}" alt="">
      </div>
    </div>
    <div>
      <div class="img-thumbnail border-0 p-0 d-block">
        <img class="img-fluid border-radius-0" src="{{ asset('assets/img/duo_images/sliders/7.JPG')}}" alt="">
      </div>
    </div>
    <div>
      <div class="img-thumbnail border-0 p-0 d-block">
        <img class="img-fluid border-radius-0" src="{{ asset('assets/img/duo_images/sliders/8.JPG')}}" alt="">
      </div>
    </div>
  </div>
</div>

<hr class="solid my-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="900">

<section>
  <div class="container">
    <div class="row text-center pb-4">
      <div class="col">
        <h2 class="font-weight-normal custom-font-size-1 mb-4 mt-4">Home</h2>
        <p>Design duo predominately specialise in residential architecture, but is increasingly taking on community and commercial projects, with a special interest in eco-friendly boutique hotels. Our current projects are in different range in scale and proximity. We work locally and our architecture have an impact on improving the social life of local community.</p>
      </div>
    </div>
  </div>
</section>
<br>
@endsection
@push('moreJs') 
@endpush
