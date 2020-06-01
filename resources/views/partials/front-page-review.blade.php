<?php

if( have_rows('review') ): ?>

<div class="review-slider__outer">
  <div class="review-slider">
    <?php 
      while ( have_rows('review') ) : the_row(); ?>

          <div class="review-slide">
            <i class="fas fa-quote-left"></i>
            <p> <?php the_sub_field('quote'); ?> </p>
            <span class="person"><?php the_sub_field('person'); ?></span>
          </div>

      <?php endwhile; ?>
      </div>
    </div>

<?php endif;

?>
