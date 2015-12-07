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
		<section class="strip-divider primary-overlay">
						<div class="video-wrapper">
							</div>
					
							<div class="container">
								<div class="row">
									<div class="col-sm-12 text-center">
										<h1 class="text-white">Interested in speaking at Limmud Toronto 2016? <a href="/presenter-application/">Get in touch</a></h1>
									</div>
								</div><!--end of row-->
							</div><!--end of container-->
					</section>
		<div class="footer-container">			
			<footer class="classic">
				<div class="container">
					<div class="row">
						<div class="col-sm-5 col-sm-offset-2">
							<span class="lead color-heading">About Limmud</span>
							<p>
								A volunteer-based global phenomenon to take you a step further on your Jewish journey, whatever that may be for you.  
							</p>
						</div>
					
						<div class="col-sm-4 col-sm-offset-1">
							<ul class="contact-methods">
								<li><i class="icon pe-7s-mail"></i><span>info@limmud.ca</span></li>
								<li><i class="icon pe-7s-phone"></i><span>1-647-922-8131</span></li>
								<li><i class="icon pe-7s-map-marker"></i><span>Toronto, ON</span></li>
							</ul>
						</div>
					</div><!--end of row-->
				
					<div class="row">
						<div class="col-sm-12 text-center">
							<ul class="social-profiles">
								<li><a target="_blank" href="https://twitter.com/limmudto"><i class="icon social_twitter"></i></a></li>
								<li><a  target="_blank"  href="https://www.facebook.com/LimmudToronto/?fref=nf"><i class="icon social_facebook"></i></a></li>
								<li><a target="_blank" href="https://www.instagram.com/limmudto/"><i class="icon social_instagram"></i></a></li>
							</ul>	
							
						</div>
						
					</div><!--end of row-->
					</div><!--end of container-->
					<div class="container">
						<div class="row">
							<div class="col-sm-12 text-center">
								<hr>
							<p>Build pro bono by <a target="_blank" href="http://propellerhead.ca">Propellerhead Interactive</a></p> 
						</div>
					</div>
					
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
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-71027361-1', 'auto');
	  ga('send', 'pageview');

	</script>
</body>
</html>
