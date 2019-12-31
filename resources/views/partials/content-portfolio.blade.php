<section class="section portfolio-s">

  <div class="portfolio-container">

    <?php
    // Portfolio array
    $args = array (
      'post_type'      => 'portfolio',
      'posts_per_page' => '9',
      'orderby'        => 'menu-order'
    );

// Portfolio query
$portfolio_query = new WP_Query( $args ); ?>

<?php if ( $portfolio_query->have_posts() ) : ?>

	<!-- pagination here -->
	<!-- the loop -->
  <?php $count = 0;
  ?>
 
	<?php while ( $portfolio_query->have_posts() ) : $portfolio_query->the_post(); ?>
    <?php
    $count++;
      // Variables
      $post_id = get_the_ID();
      $post = get_page( $post_id );
      $image_id = get_post_thumbnail_id();
      $img_src = wp_get_attachment_image_url( $image_id, 'portfolio-crop' );
      $image_alt = get_post_meta( $image_id, '_wp_attachment_image_alt', true);
      $url = get_permalink( $post->ID );
    ?>

<?php
  if ($count < 7) {
  ?> 
  <!-- If more than 6 stop looping -->

<a class="col-md col-one project" href=" <?php if ( get_field('meta-tags') ) {
  echo $url;
}  ?>">
<img src="<?php echo $img_src ?>" alt="<?php echo $image_alt ?>">
      <div class="project__inner">
        <div class="project__text">
          <h2 class="project__header"><?php the_title(); ?></h2>
          <?php if ( get_field('meta-tags') ) {
            ?>
            <span class="project__subheader"><?php echo get_post_meta(get_the_ID(), 'meta-tags', true); ?></span>
            <?php
          } else {
            ?>
            <span class="project__subheader">case study coming soon</span>
            <?php
          }

           ?>

        </div>
      </div>

  </a>
  <?php } ?>
  <?php
  endwhile ?>
	<!-- end of the loop -->
       

	<!-- pagination here -->

	<?php wp_reset_postdata(); ?>

<?php else : ?>
	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

  </div>
</section>
