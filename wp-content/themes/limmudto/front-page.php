<?php /* Template Name: Front Page */ ?>

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
			
	<section class="hero-slider">
		<ul class="slides">
			<li class="countdown-header primary-overlay">
			
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 text-center">
							<img alt="logo" class="logo" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/logo.png">
							<span class="uppercase text-white"><?php the_field('hero-small-under-logo'); ?></span>
							<h2 class="text-white large-h2"><?php the_field('hero-large-under-logo'); ?></h2>
						</div>
					</div><!--end of row-->
				
					<div class="row">
						<div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
							<div class="countdown" data-date="2016/03/06"></div>
						</div>
					</div>
				</div><!--end of container-->
			</li>
		</ul>
	</section>
	
	<a id="about" class="in-page-link"></a>
	
	<section class="inline-video">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<h1><?php echo the_title(); ?></h1>
				</div>
			</div><!--end of row-->
		
			<div class="row">
				<?php 
					if (have_posts()) : while (have_posts()) : the_post();

					the_content();

					endwhile; endif;
				?>
			</div><!--end of row-->
		</div><!--end of container-->
	</section>
	
	
	<section class="news">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 no-padding shoutout-image">
					<?php echo get_field("news");?>
					
				</div>
			</div><!--end of row-->
		</div><!--end of container-->
	</section>
	
	
	
	
	<section class="shoutout">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 no-padding shoutout-image">
					<img src='<?php echo get_field("quotable_image")["url"];?>'/>
					
				</div>
				<div class="col-sm-6 text-center shoutout-copy">
				<?php 
					echo "<h1>".get_field("quotable_title")."</h1>";
					echo get_field("quotable_body");
					$url  = get_field("ticket_button_url");
					if($url!=""){
						echo "<br><a target=\"_blank\" href='".$url."' class='btn btn-hollow'>Get Tickets</a>";
					}
					
					
					
				?>
				</div>
			</div><!--end of row-->
		</div><!--end of container-->
	</section>
	
	
	

</div>

<?php get_footer(); ?>
