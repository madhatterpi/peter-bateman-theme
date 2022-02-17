<footer class="footer">
  <div class="footer__inner">


    <div class="footer-block footer__legal">
      <div class="logo">
        <div class="site-header__logo__graphic "><a href="{{ home_url('/') }}"><img class="site-logo" src="<?php the_field('logo', 'options') ?>" alt=""></a></div>
      </div>
    </div>

    <div class="footer-block footer__contact">
      <?php
      $footer_about = get_field('footer_about', 'option'); ?>
      <div class="footer__navigation">
        <?php
        if( $footer_about ): ?>
        <h3 class="footer__header"><?php echo esc_attr( $footer_about['header'] ); ?></h3>
      </div>
      <p><?php echo esc_attr( $footer_about['text'] ); ?></p>
      <?php endif; ?>
    </div>


    <div class="footer-block footer__legal">
      <h3 class="footer__header">Contact me</h3>
      <div class="footer__telephone footer__contact__item">
        <a href="tel:07464699230">07464 699230</a>
      </div>
      <div class="footer__email footer__contact__item">
        <a href="mailto:peter@peterbateman.co.uk">peter@peterbateman.co.uk</a>
      </div>
      <div class="footer__address footer__contact__item">
        <a href="#">111 Hampton Road,<br>Bristol,<br>BS6 6JG</a>
      </div>
    </div>

      <div class="footer-block footer__social-icons">
        <a rel="noopener noreferrer" target="_blank" href="https://twitter.com/PeterBateman4" class="footer-icon"><i class="fab fa-twitter" aria-hidden="true"></i></a>
        <a rel="noopener noreferrer" target="_blank" href="https://www.instagram.com/peter.codes/" class="footer-icon"><i class="fab fa-instagram" aria-hidden="true"></i></a>
      </div>

  </div>

</footer>
<div class="bottom-footer">
  <p>&copy; <?php echo date("Y"); ?> Peter Bateman. All rights reserved.</p>
  <a href="<?php echo get_site_url()?>/privacy-policy">privacy policy</a>
</div>
