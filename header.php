<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package uwp_boilerplate
 * @since uwp_boilerplate 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />


<script src="js/foundation/modernizr.foundation.js"></script>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>
	<header id="masthead" class="site-header" role="banner">
		<div class="row">
  			<div class="large-3 columns">
				<hgroup>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home" class="hide-for-small"><?php bloginfo( 'name' ); ?></a></h1>
				</hgroup>
			</div>
			<div class="large-3 large-offset-6 columns">
    			<div class="search-bar hide-for-small">
    				<label>Search <input type="search" /></label>
    			</div>
    		</div>
    	</div>
    	<div class="row">
  			<div class="large-12 columns">
  				<div class="contain-to-grid">
  					<nav id="site-navigation" class="navigation-main top-bar" role="navigation">
	  					<ul class="title-area">
				            <li class="name"><a href="#" class="show-for-small"><h1>ATX Local</h1></a></li>
				            <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
	          			</ul>
	          			<section class="top-bar-section right">
							<div class="screen-reader-text skip-link"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'uwp_boilerplate' ); ?>"><?php _e( 'Skip to content', 'uwp_boilerplate' ); ?></a></div>

								<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
						</section>
					</nav><!-- #site-navigation -->
				</div>
			</div>
		</div>
	</header><!-- #masthead -->

	<div id="main" class="site-main">
