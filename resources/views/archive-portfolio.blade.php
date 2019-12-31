@extends('layouts.app')
@section('content')
<section class="banner"
  style="
  background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/hero/services-banner-paper.jpg);
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
  ">
  <div class="banner__overlay"></div>
  <div class="banner__text">
  	<h1 class="banner__header">Portfolio</h1>
  	<div class="banner__subheader">Browse my past projects</div>
  </div>
</section>
@include('partials.content-portfolio')
@include('partials.get-started')

@endsection