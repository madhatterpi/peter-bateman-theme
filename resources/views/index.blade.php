@extends('layouts.app')

@section('content')
  <section class="banner"
  style="
  background-image: url(<?php the_field('blog_page_banner_backgroud_image', 'option'); ?>);
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
  ">
  <div class="banner__overlay"></div>
  <div class="banner__text">
  	<h1 class="banner__header">Blog</h1>
  	<div class="banner__subheader">News, views and Wordpress tips</div>
  </div>
</section>

<section class="section blog section-padded">
	<div class="blog-section">
    
     @while (have_posts()) @php the_post() @endphp
     @include('partials.content-blog') 
  @endwhile

	</div>
</section>


  @if (!have_posts())
    <div class="alert alert-warning">
      {{ __('Sorry, no results were found.', 'sage') }}
    </div>
    {!! get_search_form(false) !!}
  @endif



  {!! get_the_posts_navigation() !!}
@endsection
