<?php /* Template Name: Profile page */ ?>

<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

<div class="main-container"><a id="home" class="in-page-link"></a>
	<section class="hero-slider hero-slider-mini">
		<ul class="slides">
			<li class="countdown-header primary-overlay">
			
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 text-center">
							<div class="countdown" data-date="2016/03/06"></div>
						</div>
					</div>
				</div><!--end of container-->
			</li>
		</ul>
	</section>
	
	<section class="inline-video">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<h1><?php echo the_title(); ?></h1>
				</div>
			</div><!--end of row-->
		
			<div class="row">
				<div class="col-sm-12">
				
				<?php 
					if (have_posts()) : while (have_posts()) : the_post();

					the_content();

					endwhile; endif;
				?>
				</div>
			</div><!--end of row-->
		</div><!--end of container-->
	</section>

</div>

<?php get_footer(); ?>
