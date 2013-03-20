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
		<div class="site-info">
			<?php do_action( 'uwp_boilerplate_credits' ); ?>
			<a href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', 'uwp_boilerplate' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'uwp_boilerplate' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'uwp_boilerplate' ), 'uwp_boilerplate', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?>
		</div><!-- .site-info -->
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