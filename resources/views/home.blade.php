@extends('includes.master')

@section('title', 'Home | Design Duo')
@section('meta-description', 'duo design')
@section('meta-keyword', 'duo design')

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
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce consectetur diam id urna lobortis, at consectetur odio euismod. Maecenas eleifend semper vulputate. Integer pellentesque massa et felis aliquam, a pharetra mauris bibendum. Nullam ullamcorper enim id aliquet convallis. Cras pellentesque, ipsum sollicitudin suscipit mollis, nibh nisi facilisis lorem.</p>
      </div>
    </div>
  </div>
</section>
<br>
<br>
@endsection
@push('moreJs') 
@endpush
