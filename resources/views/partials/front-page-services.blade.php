<section class="container-fluid services-section section">

  <div class="skills">
    <h2 class="header header--lined services-section__header">What I do</h2>
  </div>

  <!-- <?php if( have_rows('home_page_services') ):
$count = 0
?>
    
<div>
       
<?php while( have_rows('home_page_services') ): the_row();	

    // vars
		$icon = get_sub_field('home_page_services_icon');
		$header = get_sub_field('home_page_services_header');
		$content = get_sub_field('home_page_services_content');
    ?>


<div class="services-section__row skills">
    <div class="skills__column">
      <div class="skills__flex">
          <div class="skills__icon show">
            <i class='<?php echo $icon; ?>'></i>
            <i class="far fa-cogs"></i>
          </div>
          
        </div>
        <h2 class="header skills__header"><?php echo $header; ?></h2>
        <p class="skills__text"><?php echo $content; ?></p>
      </div>

  </div>


<?php endwhile; ?>
</div>
<?php endif; ?> -->


<!-- CURRENT SERVICES SECTION -->
  <div class="services-section__row skills">
    <div class="skills__column">
      <div class="skills__flex">
          <div class="skills__icon show">
            <i class="far fa-desktop"></i>
          </div>
          <h2 class="header skills__header">Web design</h2>
        </div>

        <p class="skills__text">I strive to create websites that balance impressive visuals with being informative and intuitive for the user. I use a combination of pen and paper, Illustrator and Photoshop for my design process. Being a freelance web designer means I can offer affordable websites to suit any budget.</p>
      </div>

      <div class="skills__column">
      <div class="skills__flex">
          <div class="skills__icon show">
            <i class="far fa-cogs"></i>
          </div>
          <h2 class="header skills__header">Development</h2>
        </div>

        <p class="skills__text">I build fast, mobile-friendly and modern websites. I primarily consider myself a WordPress developer but I'm also confident using Craft and Squarespace. Writing quality and clean code is important to me, as is keeping up to date with the latest coding standards and trends.</p>
      </div>

  </div>

  <div class="services-section__row skills">
    <div class="skills__column">
      <div class="skills__flex">
          <div class="skills__icon show">
            <i class="far fa-search"></i>
          </div>
          <h2 class="header skills__header">SEO</h2>
        </div>

        <p class="skills__text">The goalposts are constantly being moved for how a website gets ranked in search results, I stay up to date with these changes and implement a host of tactics to help your website rank where it needs to. SEO services include keyword analysis, website speed optimisation and Google Adwords.</p>
      </div>

      <div class="skills__column">
      <div class="skills__flex">
          <div class="skills__icon show">
             <i class="far fa-shopping-cart"></i>
          </div>
          <h2 class="header skills__header">E-commerce</h2>
        </div>

        <p class="skills__text">For e-commerce web design I use WooCommerce. Its an incredibly capable and feature-rich plugin for WordPress websites. Security always plays a big part in web development but in e-commerce sites, this is particularly important. I follow all security best practices.</p>
      </div>

  </div>

  <a class="button button--border button--no-margin skills-btn" href="<?php echo site_url('/services') ?>">Find out more</a>
  
</section>

