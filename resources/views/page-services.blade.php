@extends('layouts.app')

@section('content')
    @include('partials.page-header')

    <div class="page-content">

    
  <div class="services__container">
    <div class="row services__row">
      <div class="services__icon">
      <img src="@asset('images/web-development.png')" alt="">
      </div>
      <div class="services__text services__text--padding-left">
      <h2 class="about-header">web development</h2>
      <div>
      <?php the_field("web-dev-s"); ?>
      </div>

      </div>
  </div>

  </div>

  <div class="services__container services__container--dark">
    <div class="row services__row services__row--switch">
      <div class="services__icon">
      <img src="@asset('images/web-design.png')" alt="">
      </div>
      <div class="services__text services__text--padding-right">
      <h2 class="about-header">web design</h2>
      <div>
      <?php the_field("web-design-s"); ?>
      </div>

      </div>
  </div>

  </div>

  <div class="services__container">
    <div class="row services__row">
      <div class="services__icon">
      <img src="@asset('images/seo.png')" alt="">
      </div>
      <div class="services__text services__text--padding-left">
      <h2 class="about-header">SEO</h2>
      <div>
      <?php the_field("seo-s"); ?>
      </div>

      </div>
  </div>

  </div>

  <div class="services__container">
  <h2 class="about-header text-align-center">tech i use</h2>
      <div class="tech">
      <div class="tech__logo"><img src="http://localhost/peterbateman/wp-content/uploads/2019/10/Webpack-logo.jpg" alt=""></div>
      <div class="tech__logo"><img src="http://localhost/peterbateman/wp-content/uploads/2019/10/WordPress-logo.jpg" alt=""></div>
      <div class="tech__logo"><img src="http://localhost/peterbateman/wp-content/uploads/2019/10/jQuery-logo.jpg" alt=""></div>
      <div class="tech__logo"><img src="http://localhost/peterbateman/wp-content/uploads/2019/10/npm_logo.png" alt=""></div>
      <div class="tech__logo"><img src="http://localhost/peterbateman/wp-content/uploads/2019/10/Sage.jpg" alt=""></div>
      <div class="tech__logo"><img src="http://localhost/peterbateman/wp-content/uploads/2019/10/sass-1-logo.png" alt=""></div>
      </div>


  </div>

  </div> {{-- page content --}}

  @include('partials.get-started')

@endsection
