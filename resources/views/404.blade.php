@extends('layouts.app')

@section('content')
  @include('partials.page-header')

<section class="section lost">
  <div class="container">
    <div class="row">
    
    <div class="lost__inner">
        <h2>How did you get here?</h2>
        <p>The page you were looking for doesn't currently exist. Hopefully one of the links below will help you find what you were looking for.</p>
        <div class="lost-links">
             <ul>
               <li><a href="<?php echo get_site_url(); ?>/about">About</a></li>
               <li><a href="<?php echo get_site_url(); ?>/services">Services</a></li>
               <li><a href="<?php echo get_site_url(); ?>/blog">Blog</a></li>
             </ul>
        </div>
    </div>
    
    </div>
  </div>
</section>
@endsection
