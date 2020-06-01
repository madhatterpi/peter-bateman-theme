@extends('layouts.app')

@section('content')
    @include('partials.page-header')

    <div class="page-content">

    
  <div class="section">
    <div class="row services__row">
      <div class="services__icon">
      <img src="@asset('images/web-development.png')" alt="">
      </div>
      <div class="services__text services__text--padding-left">
      <h2 class="header header--lined">Web development</h2>
      <div>
      <?php the_field("web-dev-s"); ?>
      </div>

      </div>
  </div>

  </div>

  <div class="section services__container--dark">
    <div class="row services__row services__row--switch">
      <div class="services__icon">
      <img src="@asset('images/web-design.png')" alt="">
      </div>
      <div class="services__text services__text--padding-right">
      <h2 class="header header--lined">Web design</h2>
      <div>
      <?php the_field("web-design-s"); ?>
      </div>

      </div>
  </div>

  </div>

  <div class="section">
    <div class="row services__row">
      <div class="services__icon">
      <img src="@asset('images/seo.png')" alt="">
      </div>
      <div class="services__text services__text--padding-left">
      <h2 class="header header--lined">SEO</h2>
      <div>
      <?php the_field("seo-s"); ?>
      </div>

      </div>
  </div>

  </div>

  <div class="section services__container--dark">
  <h2 class="header text-align-center">Tech I use</h2>
      <div class="tech">
      <div class="tech__logo"><img src="https://www.peterbateman.co.uk/wp-content/uploads/2020/05/js_webpack-icon.svg" alt=""></div>
      <div class="tech__logo"><img src="https://www.peterbateman.co.uk/wp-content/uploads/2020/05/wordpress-icon.svg" alt=""></div>
      <div class="tech__logo"><img src="https://www.peterbateman.co.uk/wp-content/uploads/2020/05/jquery-vertical.svg" alt=""></div>
      <div class="tech__logo"><img src="https://www.peterbateman.co.uk/wp-content/uploads/2020/01/npm_logo.png" alt=""></div>
      <div class="tech__logo"><img src="https://www.peterbateman.co.uk/wp-content/uploads/2020/05/Roots-logo.png" alt=""></div>
      <div class="tech__logo"><img src="https://www.peterbateman.co.uk/wp-content/uploads/2020/05/sass-lang-icon.svg" alt=""></div>
      </div>
  </div>

  </div> 

  @include('partials.get-started')

@endsection
