<?php
/**
 * The template for displaying search forms in uwp_boilerplate
 *
 * @package uwp_boilerplate
 * @since uwp_boilerplate 1.0
 */
?>
	<form method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
		<div class="row collapse">
			<div class="small-3 columns">	
				<input type="submit" class="submit button prefix" id="searchsubmit" value="<?php echo esc_attr_x( 'Search', 'submit button', 'uwp_boilerplate' ); ?>" />
			</div>
			<div class="small-9 columns">
				<label for="s" class="screen-reader-text"><?php _ex( 'Search', 'assistive text', 'uwp_boilerplate' ); ?></label>
				<input type="search" class="field" name="s" value="<?php echo esc_attr( get_search_query() ); ?>" id="s" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'uwp_boilerplate' ); ?>" />
			</div>
			
		</div>
	</form>
