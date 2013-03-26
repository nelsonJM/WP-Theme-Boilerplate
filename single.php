<?php
/**
 * The Template for displaying all single posts.
 *
 * @package uwp_boilerplate
 * @since uwp_boilerplate 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
			<div class="row">
				
				<div class="large-8 columns">
					<div class="main-pillar">
	    				<div class="banner-section">
					
					        <img src="<?php echo get_template_directory_uri(); ?>/images/ritz-hdr.jpg" />
					           
						</div>
	    				<div class="meat">
		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>

			<?php uwp_boilerplate_content_nav( 'nav-below' ); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || '0' != get_comments_number() )
					comments_template();
			?>

		<?php endwhile; // end of the loop. ?>
						</div>
					</div>
				</div>
				<div class="large-4 columns">
					<?php get_sidebar('blog'); ?>
				</div>
			</div>
		</div><!-- #content -->
	</div><!-- #primary -->


<?php get_footer(); ?>