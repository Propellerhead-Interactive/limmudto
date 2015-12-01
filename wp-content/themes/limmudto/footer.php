<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

		<div class="footer-container">			
			<footer class="classic">
				<div class="container">
					<div class="row">
						<div class="col-sm-3">
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
						</div>
					
						<div class="col-sm-5">
							<span class="lead color-heading">About Meetup</span>
							<p>
								Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
							</p>
						</div>
					
						<div class="col-sm-4">
							<ul class="contact-methods">
								<li><i class="icon pe-7s-mail"></i><span>hello@site.net</span></li>
								<li><i class="icon pe-7s-phone"></i><span>1800 382 3722</span></li>
								<li><i class="icon pe-7s-map-marker"></i><span>Toronto, ON</span></li>
							</ul>
						</div>
					</div><!--end of row-->
				
					<div class="row">
						<div class="col-sm-12 text-center">
							<ul class="social-profiles">
								<li><a href="#"><i class="icon social_twitter"></i></a></li>
								<li><a href="#"><i class="icon social_facebook"></i></a></li>
								<li><a href="#"><i class="icon social_instagram"></i></a></li>
							</ul>	
						</div>
					</div><!--end of row-->
				</div><!--end of container-->
			</footer>
		</div>

<?php wp_footer(); ?>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js" ></script>
  <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/bootstrap.min.js"></script>
  <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/skrollr.min.js"></script>
  <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/spectragram.min.js"></script>
  <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/flexslider.min.js"></script>
  <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.plugin.min.js"></script>
  <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.countdown.min.js"></script>
  <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/lightbox.min.js"></script>
  <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/smooth-scroll.min.js"></script>
  <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/twitterfetcher.min.js"></script>
  <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/placeholders.min.js"></script>
  <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/scripts.js"></script>
</body>
</html>
