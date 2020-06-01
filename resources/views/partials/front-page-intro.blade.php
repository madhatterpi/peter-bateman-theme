<section id="welcome" class="section">
  <div class="intro-block__outer">
    <div class="intro-block intro-block--large">
      <div class="intro-block__inner">
        <div class="intro-about">

        <?php

        $homepageintro = get_field('homepage_intro');

        if( $homepageintro ) { ?>

          <h2 class="header intro-about__header"><?php echo $homepageintro['header']; ?></h2>
          <p class="intro-about__text"><?php echo  $homepageintro['text']; ?></p>
          <a href="<?php echo get_site_url()?>/about" class="button button--border">about me</a>
          
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</section>
