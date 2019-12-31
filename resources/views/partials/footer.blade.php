<footer class="footer">
  <div class="footer__inner">


    <div class="footer-block footer__legal">
      <div class="logo">
        <a href="<?php echo get_site_url(); ?>/home">Peter Bateman</a>
      </div>
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

    <div class="footer-block footer__contact">
      <div class="footer__navigation">
        <h3 class="footer__header">Latest Tweet</h3>
      </div>
      <?php echo do_shortcode("[custom-twitter-feeds]") ?>
    </div>

      <div class="footer-block footer__social-icons">
        <a href="https://www.facebook.com/peterbateman.webdev" class="footer-icon"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
        <a href="https://twitter.com/PeterBateman4" class="footer-icon"><i class="fab fa-twitter" aria-hidden="true"></i></a>
        <a href="https://www.instagram.com/pwbateman/" class="footer-icon"><i class="fab fa-instagram" aria-hidden="true"></i></a>
      </div>

  </div>

</footer>
<div class="bottom-footer">
  <p>&copy <?php echo date("Y"); ?> Peter Bateman. All rights revserved.</p>
  <a href="<?php echo get_site_url()?>/privacy-policy">privacy policy</a>
</div>
