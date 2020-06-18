<!-- The overlay -->
<header class="nav-home" class="overlay">
  <div class="header-container">
  <div class="site-header__logo">
        {{-- <div class="site-header__logo__graphic "><a href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a></div> --}}
        <div class="site-header__logo__graphic "><a href="{{ home_url('/') }}"><img class="site-logo" src="http://localhost/peterbateman/wp-content/uploads/2020/06/Artboard-4-copy-4-1.png" alt="Peter Bateman logo"></a></div>
      </div>

    <div class="hamburger hamburger--slider">
      <div class="hamburger-box">
        <div class="hamburger-inner"></div>
      </div>
    </div>

  <!-- Overlay content -->
  <div class="main-menu">
    <div class="main-menu-container">
    @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
    </div>

  </div>

  </div>



</header>
