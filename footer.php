<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package uwp_boilerplate
 * @since uwp_boilerplate 1.0
 */
?>

	</div><!-- #main -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="search-section">
		  <div class="row">
		    <div class="large-12 columns">
		      <div class="search-bar show-for-small">
		          <?php get_search_form(); ?>
		      </div>  
		    </div>
		  </div>
		</div>
		<div class="footer-section">
			<div class="row">
			    <div class="large-12 columns">
			      	<div class="footer-nav">
						<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
		  <div class="large-4 columns">
		    <p>&copy; Copyright no one at all.</p>
		  </div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<script>
  document.write('<script src=' +
  ('__proto__' in {} ? '<?php echo get_template_directory_uri(); ?>/js/vendor/zepto' : '<?php echo get_template_directory_uri(); ?>/js/vendor/jquery') +
  '.js><\/script>')
  </script>
  
  <script src="<?php echo get_template_directory_uri(); ?>/js/foundation/foundation.js"></script>
	
	<script src="<?php echo get_template_directory_uri(); ?>/js/foundation/foundation.topbar.js"></script>
	
	<script src="<?php echo get_template_directory_uri(); ?>/js/foundation/foundation.joyride.js"></script>
	
	<script src="<?php echo get_template_directory_uri(); ?>/js/foundation/foundation.alerts.js"></script>
	
	<script src="<?php echo get_template_directory_uri(); ?>/js/foundation/foundation.reveal.js"></script>
	
	<script src="<?php echo get_template_directory_uri(); ?>/js/foundation/foundation.placeholder.js"></script>
	
	<script src="<?php echo get_template_directory_uri(); ?>/js/foundation/foundation.orbit.js"></script>
	
	<script src="<?php echo get_template_directory_uri(); ?>/js/foundation/foundation.clearing.js"></script>
	
	<script src="<?php echo get_template_directory_uri(); ?>/js/foundation/foundation.magellan.js"></script>
	
	<script src="<?php echo get_template_directory_uri(); ?>/js/foundation/foundation.section.js"></script>
	
	<script src="<?php echo get_template_directory_uri(); ?>/js/foundation/foundation.forms.js"></script>
	
	<script src="<?php echo get_template_directory_uri(); ?>/js/foundation/foundation.tooltips.js"></script>
	
	<script src="<?php echo get_template_directory_uri(); ?>/js/foundation/foundation.cookie.js"></script>
	
	<script src="<?php echo get_template_directory_uri(); ?>/js/foundation/foundation.dropdown.js"></script>
	
  
  <script>
    $(document).foundation();
  </script>
</body>
</html>