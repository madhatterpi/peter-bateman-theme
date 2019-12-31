<?php

// variables
$title_subheader = get_field('title-subheader');
$backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full');
$backgroundPageImg = wp_get_attachment_image_src( get_post_thumbnail_id($page->ID), 'full');

?>

<section class="banner"
<?php
  if ( $backgroundImg ) { ?>
    style="background: url('<?php echo $backgroundImg[0]; ?>') no-repeat; background-size: cover; background-position: center; ">
  <?php } elseif ( is_404() ) { ?>
    style="background: url(<?php echo get_template_directory_uri(); ?>/assets/images/hero/space-lost-ready.jpg) no-repeat; background-size: cover; background-position: center;">
    <?php } else { ?>
    style="background-color: #5471de">
  <?php }
?> 

  <div class="banner__overlay"></div>

  <div class="banner__text">
    <?php if ( is_post_type_archive('portfolio') ) { ?>
      <h1 class="banner__header">Portfolio</h1>
      <div class="banner__subheader">Browse my latest work</div>
    <?php } elseif ( is_home() ) { ?>
      <h1 class="banner__header">Blog</h1>
      <div class="banner__subheader">News, views and Wordpress tips</div>
    <?php }elseif ( is_404() ) { ?>
      <h1 class="banner__header">404</h1>
    <?php } elseif ( is_singular( 'portfolio' ) ) { ?>
      <h1 class="banner__header banner__header--small">{!! App::title() !!}</h1>
      <a class="banner__website-link" href="<?php the_field("website-link") ?>" target="_blank"><?php the_field("website-subheader-link") ?></a>
    <?php } else { ?>
      <h1 class="banner__header">{!! App::title() !!}</h1>
      <div class="banner__subheader"><?php echo $title_subheader ?></div>
    <?php } ?>

  </div>

</section>
