{{--
  Template Name: WordPress Page
--}}

@extends('layouts.app')

@section('content')
@include('partials.page-header')

<div class="page-content services-template">

    <?php
		
// vars
$intro = get_field('intro');	

if( $intro ): ?>
    <section class="section section--extra-top">
        <div class="container container--new">
            <div class="rowsith">
                <div class="column column--small center order-2">
                    <div class="about-images__cell text-center">
                    <h2 class="header header--center header--services"><?php echo $intro['header']; ?></h2>
                        <p><?php echo $intro['text']; ?></p>
                       
                    </div>
                </div>
            </div>
        </div>
            </section>
            <?php endif; ?>

            <?php
		
            // vars
            $about_section_one = get_field('about_section_one');	
            
            if( $about_section_one ): ?>
    <section class="section section--light-grey-background services-temp">
    <div class="container container--new">
        <div class="rowsith rowsith--align-center">
            <div class="column column--50 order-1 column--padded">

                <h2 class="header header--lined header--left header--services"><?php echo $about_section_one['header']; ?></h2>
                <?php echo $about_section_one['text']; ?>
            </div>
            <div class="column column--50">
                <img src="<?php echo $about_section_one['image']['url']; ?>" alt="<?php echo $about_section_one['image']['alt']; ?>" />
                            </div>
        </div>
    </div>
        </section>
        <?php endif; ?>

        <?php
		
        // vars
        $about_section_two = get_field('about_section_two');	
        
        if( $about_section_two ): ?>
        <section class="section section--slim services-temp">
            <div class="container container--new">
                <div class="rowsith rowsith--align-center">
                    <div class="column column--50">
                        <img src="<?php echo $about_section_two['image']['url']; ?>" alt="<?php echo $about_section_two['image']['alt']; ?>" />
                                    </div>
                    <div class="column column--50 column--padded">
                        <h2 class="header header--lined header--left header--services"><?php echo $about_section_two['header']; ?></h2>
                        <?php echo $about_section_two['text']; ?>
                    </div>
                </div>
            </div>
                </section>
                <?php endif; ?>

                <section class="section section--light-grey-background tempest">
                    <div class="container container--new">
                        <h2 class="header header--services text-center">WordPress Services</h2>
                        <p class="text-center tempest__subheader">Here are some of the main services I provide but there are a lot more so do ask if you don’t see what you are looking to be worked on.</p>
                        <div class="rowsith">
                            <div class="column column-sm--50 column--33">
                                <div class="skills__icon skills__icon--small show">
                                    <i class="far fa-map-marker-alt"></i>
                                  </div>
                                  <h2 class="header skills__header skills__header--small">Custom Themes</h2>
                                <p class="skills__text">I can build you a stunning website that is designed and built for your exact needs. WordPress custom websites show your business at its best, are tailored to drive conversions for your business and are super fast to load.</p>
                            </div>
                            <div class="column column-sm--50 column--33">
                                <div class="skills__icon skills__icon--small show">
                                    <i class="far fa-file-alt"></i>
                                  </div>
                                  <h2 class="header skills__header skills__header--small">Affordable websites</h2>
                                <p class="skills__text">Not all websites needto be the highest level. For startups and small businesses who don’t want to spend the world to showcase their business online. I can build a great looking brochure website that will help you reach your customers and grow. </p>
                            </div>
                            <div class="column column-sm--50 column--33">
                                <div class="skills__icon skills__icon--small show">
                                    <i class="far fa-search"></i>
                                  </div>
                                  <h2 class="header skills__header skills__header--small">WordPress SEO</h2>
                              
                        
                                <p class="skills__text">Give your website a boost to its online presence by hiring a WordPress SEO expert to look through your website. </p>
                            </div>

        
        
                        </div>
                        <div class="rowsith">
                            <div class="column column-sm--50 column--33">
                                <div class="skills__icon skills__icon--small show">
                                    <i class="far fa-laptop"></i>
                                  </div>
                                  <h2 class="header skills__header skills__header--small">Hosting</h2>
                              
                        
                                <p class="skills__text">I can host your website for ease and security. I also preform lots of behind the scenes tasks like setting up email, migrating websites and improving WordPress website security. </p>
                            </div>
                            <div class="column column-sm--50 column--33">
                                <div class="skills__icon skills__icon--small show">
                                    <i class="far fa-tachometer-alt-fastest"></i>
                                  </div>
                                  <h2 class="header skills__header skills__header--small">E-commerce</h2>
                              
                        
                                <p class="skills__text">A fast website is a must and if you haven’t had your website made by a quality web developer it will often not be and this negatively affects SEO.</p>
                            </div>
                            <div class="column column-sm--50 column--33">
                                <div class="skills__icon skills__icon--small show">
                                    <i class="far fa-user-chart"></i>
                                  </div>
                                  <h2 class="header skills__header skills__header--small">Branding</h2>
                              
                        
                                <p class="skills__text">Gaining back links (other websites that link to your website) is one of the most important tasks for growing traffic and almost always involves creating good quality content.</p>
                            </div>

        
        
                        </div>
                
                
                    </div>
                
                        </section>

                        <?php
		
                        // vars
                        $end_section = get_field('end_section');	
                        
                        if( $end_section ): ?>
    <section class="section services-bottom">
        <div class="container--fluid">
            <div class="rowsith">
                <div class="column--50 center services-temp-half-image">

                </div>
                <div class="column--50 center">
                    <div class="about-images__cell">
                    <h2 class="header header--center header--services"><?php echo $end_section['header']; ?></h2>
                    <?php echo $end_section['text']; ?>
                    </div>
                </div>
            </div>

        </div>
    
            </section>
            <?php endif; ?>

            <section class="section">
                <div class="container container--new">
                    <div class="rowsith">
                        <div class="column center">
                            <h2 class="header header--center header--services text-center">WordPress Blog Posts</h2>
                            <div class="blog-section">
                                <div class="blog-section__inner blog-section__inner--two">
                                
                                    <?php
                                    // the query
                                    $the_query = new WP_Query( array(
                                         'posts_per_page' => 2,
                                         "orderby" => "date",
                                         'category_name' => 'WordPress'

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
                        </div>
                    </div>
                </div>
            
                    </section>



                   


</div> {{-- page content --}}

@include('partials.get-started')

@endsection