@extends('layouts.app')

@section('content')
@include('partials.page-header')

<div class="page-content">

<section class="abouts">
    <article>

        <?php
        $i = 0;

        if( have_rows('about_section') ): ?>
        
        <?php while( have_rows('about_section') ): the_row();  ?>
       <?php  $i++; ?>
        <?php if( $i < 2 ): ?>

    <?php // vars
		$header = get_sub_field('header');
		$text = get_sub_field('text');
		?>

        <section class="about-me section--about">
            <div class="container container--about">
                <div>
                    <h2 class="header header--lined header--left header--about why-section__header why-section__header--right">
                        <?php echo $header; ?></h2>
                </div>
                <div>
                    <div class="about-me__text">
                        <?php echo $text; ?>
                    </div>
                </div>


            </div>
        </section>
		

		<?php endif; ?>

    <?php endwhile; ?>

        <?php endif; ?>

    <section class="section no-padding">
    <div class="container">
    <div class="about-images">
                <div class="about-images__cell">
                    <img src="<?php the_field('about-introduction-image'); ?>">
                </div>
            </div>
    </div>

        </section>

        <?php
        $i = 0;

        if( have_rows('about_section') ): ?>
        
        <?php while( have_rows('about_section') ): the_row();  ?>
       <?php  $i++; ?>
        <?php if( $i > 1 ): ?>

    <?php // vars
		$header = get_sub_field('header');
		$text = get_sub_field('text');
		?>

        <section class="about-me section--about">
            <div class="container container--about">
                <div>
                    <h2 class="header header--lined header--left header--about why-section__header why-section__header--right">
                        <?php echo $header; ?></h2>
                </div>
                <div>
                    <div class="about-me__text">
                        <?php echo $text; ?>
                    </div>
                </div>


            </div>
        </section>
		

		<?php endif; ?>

    <?php endwhile; ?>

        <?php endif; ?>


    </article>
</section>

</div> {{-- page content --}}

@include('partials.get-started')

@endsection