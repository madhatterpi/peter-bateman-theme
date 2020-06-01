<section class="section frontpage-blog">
<h2 class="blog-section__header header">Latest from the blog</h2>
<div class="blog-section">
<div class="blog-section__inner blog-section__inner--two">


	<?php
	// the query
	$the_query = new WP_Query( array(
		 'posts_per_page' => 2,
		 "orderby" => "date"
	 )); ?>

	<?php if ( $the_query->have_posts() ) : ?>

		<!-- pagination here -->

		<!-- the loop -->
		 <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
		 @include('partials.content-blog-two') 
			
		<?php endwhile; ?> 
		<!-- end of the loop -->

		<!-- pagination here -->

		<?php wp_reset_postdata(); ?>

	<?php else : ?>
		<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
	<?php endif; ?>
</div>
</div>
</section>
