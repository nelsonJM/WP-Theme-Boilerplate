<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
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

									<?php get_template_part( 'content', 'page' ); ?>

									<?php
										// If comments are open or we have at least one comment, load up the comment template
										if ( comments_open() || '0' != get_comments_number() )
											comments_template();
									?>

								<?php endwhile; // end of the loop. ?>
							</div>
						
							<div class="row">
					          <div class="large-6 columns">
					            <div class="random-mod">
					              <h3>Latest Article</h3>
					              <div class="preview-mod late-art">
					                <!-- <img src="img/hs-home.jpg"> -->
					                <img src="img/hs-home-v2.jpg">
					                <h4>This is the Article Title</h4>
					                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio porro distinctio et sunt aperiam magni dolorem beatae aut deleniti nostrum repudiandae doloremque aspernatur? Ut nihil placeat ea magni...</p>
					                <p><a href="#" class="more-link">Read More &rarr;</a></p>
					              </div>
					            </div>
					          </div>
					          <div class="large-6 columns">
					            <div class="random-mod">
					              <h3>Latest Blog Post</h3>
					              <div class="preview-mod late-post">
					                <!-- <img src="img/g-home.jpg"> -->
					                <img src="img/g-home-v2.jpg">
					                <h4>Blog Post Title</h4>
					                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio porro distinctio et sunt aperiam magni dolorem beatae aut deleniti nostrum repudiandae doloremque aspernatur? Ut nihil placeat ea magni...</p>
					                <p><a href="#" class="more-link">Read More &rarr;</a></p>
					              </div>
					            </div>
					          </div>
					        </div>
					    </div>
					</div>
					<div class="large-4 columns">
						<?php get_sidebar(); ?>
					</div>
				
			</div>
		</div><!-- #content -->
	</div><!-- #primary -->


<?php get_footer(); ?>
