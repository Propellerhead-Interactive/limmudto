<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all"/>
  <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/flexslider.min.css" rel="stylesheet" type="text/css" media="all"/>
  <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/elegant-icons.min.css" rel="stylesheet" type="text/css" media="all"/>
  <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/pe-icon-7-stroke.min.css" rel="stylesheet" type="text/css" media="all"/>
  <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/lightbox.min.css" rel="stylesheet" type="text/css" media="all"/>
  <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/theme-deepblue.css" rel="stylesheet" type="text/css" media="all"/>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,300' rel='stylesheet' type='text/css'>
	<!--[if lt IE 9]>
	<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/ie9.css" />
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
		<div class="nav-container">
						
				<nav class="overlay-nav">
					<div class="container">
						<div class="row">
							<div class="col-md-2">
								<a href="/">
									<img alt="Logo" class="logo logo-light" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/logo.png">
									<img alt="Logo" class="logo logo-dark" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/logo-dark.png">
								</a>
							</div>
					
							<div class="col-md-10 text-right">
								 <?php
				            wp_nav_menu( array(
				                'menu'              => 'primary',
				                'theme_location'    => 'primary',
				                'depth'             => 2,
				                'container'         => false,
				                'menu_class'        => 'menu',
				                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
				                'walker'            => new wp_bootstrap_navwalker())
				            );
        					?>
								
								<div class="mobile-menu-toggle"><i class="icon icon_menu"></i></div>
							</div>
						</div><!--end of row-->
					</div><!--end of container-->
			
					<div class="bottom-border"></div>
			
					<div class="sidebar-menu">
						<img alt="Logo" class="logo" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/logo.png">
						<div class="bottom-border"></div>
						<div class="sidebar-content">
					
							<div class="widget">
								<ul class="menu" style="margin-right: 32px;">
									<li><a class="inner-link" href="#home" target="default">home</a></li>
									
									<li><a class="inner-link" href="#about" target="default">about</a></li><li><a class="inner-link" href="#speakers" target="default">speakers</a></li><li><a class="inner-link" href="#schedule" target="default">schedule</a></li><li><a class="inner-link" href="#contact" target="default">directions</a></li><li><a class="inner-link" href="#subscribe" target="default">subscribe</a></li>
									<li class="social-link"><a href="#"><i class="icon social_twitter"></i></a></li>
									<li class="social-link"><a href="#"><i class="icon social_facebook"></i></a></li>
									<li class="social-link"><a href="#"><i class="icon social_instagram"></i></a></li>
								</ul>
							</div>
					
							<div class="widget">
								<ul class="social-profiles">
									<li><a href="#"><i class="icon social_twitter"></i></a></li>
									<li><a href="#"><i class="icon social_facebook"></i></a></li>
									<li><a href="#"><i class="icon social_dribbble"></i></a></li>
									<li><a href="#"><i class="icon social_instagram"></i></a></li>
									<li><a href="#"><i class="icon social_googleplus"></i></a></li>
								</ul>
							</div>
					
							<div class="copy-text">
								<span>© Copyright 2014 Meetup Inc.</span>
							</div>
						</div><!--end of sidebar content-->
					</div><!--end of sidebar-->
			
				</nav>
		</div>
