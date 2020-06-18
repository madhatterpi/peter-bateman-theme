@extends('layouts.app')
@section('content')
<section class="banner"
  style="
  background-image: url(<?php the_field('portoflio_page_banner_backgroud_image', 'option'); ?>);
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
<section class="section">
  @include('partials.content-portfolio')
</section>

@include('partials.get-started')

@endsection