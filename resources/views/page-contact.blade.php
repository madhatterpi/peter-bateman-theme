@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
  @endwhile

  <section class="contact-page">

  <section>
    <div class="contact-details__outer">
      <div class="contact-details">
        <div class="container ">
          <div class="row contact-details__inner">
            <div class="contact-options">
              <i class="contact-options__icon far fa-mobile fa-lg"></i>
              <a class="contact-options__link" href="tel:07464699230">07464 699230</a>
            </div>
            <div class="contact-options">
              <i class="contact-options__icon far fa-envelope fa-lg"></i>
              <a  class="contact-options__link" href="mailto:peter@peterbateman.co.uk">peter@peterbateman.co.uk</a>
            </div>
            <div class="contact-options">
              <i class="contact-options__icon far fa-map-marker fa-lg"></i>
              <a class="contact-options__link" href="https://maps.google.com/maps?q=111+Hampton+Road,+Bristol,+BS6+6JG" target="_blank">111 Hampton Road, Bristol, BS6 6JG</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="container contact-s">
      <div class="row contact-s__inner">
        <h2 class="header contac-s__header">Get in touch</h2>
        <p class="contact-s__text">I'd love to hear from you! Whatever you want, whether it be a quote or you want to find out more about my work, just drop me a message and I'll get back to you soon.</p>
        <div class="contact-form">
          <?php the_field( 'contact_form_shortcode' ); ?>
        </div>
      </div>
    </div>
  </section>

</section>


@endsection
