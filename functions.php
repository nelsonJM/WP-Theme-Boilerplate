<?php
/**
 * uwp_boilerplate functions and definitions
 *
 * @package uwp_boilerplate
 * @since uwp_boilerplate 1.0
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 *
 * @since uwp_boilerplate 1.0
 */
if ( ! isset( $content_width ) )
	$content_width = 640; /* pixels */

/*
 * Load Jetpack compatibility file.
 */
require( get_template_directory() . '/inc/jetpack.php' );

if ( ! function_exists( 'uwp_boilerplate_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 *
 * @since uwp_boilerplate 1.0
 */
function uwp_boilerplate_setup() {

	/**
	 * Custom template tags for this theme.
	 */
	require( get_template_directory() . '/inc/template-tags.php' );

	/**
	 * Custom functions that act independently of the theme templates
	 */
	require( get_template_directory() . '/inc/extras.php' );

	/**
	 * Customizer additions
	 */
	require( get_template_directory() . '/inc/customizer.php' );

	/**
	 * Make theme available for translation
	 * Translations can be filed in the /languages/ directory
	 * If you're building a theme based on uwp_boilerplate, use a find and replace
	 * to change 'uwp_boilerplate' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'uwp_boilerplate', get_template_directory() . '/languages' );

	/**
	 * Add default posts and comments RSS feed links to head
	 */
	add_theme_support( 'automatic-feed-links' );

	/**
	 * Enable support for Post Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	/**
	 * This theme uses wp_nav_menu() in one location.
	 */
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'uwp_boilerplate' ),
	) );

	/**
	 * Enable support for Post Formats
	 */
	add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );
}
endif; // uwp_boilerplate_setup
add_action( 'after_setup_theme', 'uwp_boilerplate_setup' );

/**
 * Setup the WordPress core custom background feature.
 *
 * Use add_theme_support to register support for WordPress 3.4+
 * as well as provide backward compatibility for WordPress 3.3
 * using feature detection of wp_get_theme() which was introduced
 * in WordPress 3.4.
 *
 * @todo Remove the 3.3 support when WordPress 3.6 is released.
 *
 * Hooks into the after_setup_theme action.
 */
function uwp_boilerplate_register_custom_background() {
	$args = array(
		'default-color' => 'ffffff',
		'default-image' => '',
	);

	$args = apply_filters( 'uwp_boilerplate_custom_background_args', $args );

	if ( function_exists( 'wp_get_theme' ) ) {
		add_theme_support( 'custom-background', $args );
	} else {
		define( 'BACKGROUND_COLOR', $args['default-color'] );
		if ( ! empty( $args['default-image'] ) )
			define( 'BACKGROUND_IMAGE', $args['default-image'] );
		add_custom_background();
	}
}
add_action( 'after_setup_theme', 'uwp_boilerplate_register_custom_background' );

/**
 * Register widgetized area and update sidebar with default widgets
 *
 * @since uwp_boilerplate 1.0
 */
function uwp_boilerplate_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Primary Widget Area', 'uwp_boilerplate' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );

	register_sidebar( array(
		'name'          => __( 'Secondary Widget Area', 'uwp_boilerplate' ),
		'id'            => 'sidebar-2',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
}
add_action( 'widgets_init', 'uwp_boilerplate_widgets_init' );

/**
* Custom widget http://wp.tutsplus.com/tutorials/creative-coding/building-custom-wordpress-widgets/
*/
/* Add our function to the widgets_init hook. */
add_action( 'widgets_init', 'example_load_widgets' );

/* Function that registers our widget */
function example_load_widgets() {
	register_widget( 'Example_Widget' );
}
class Example_Widget extends WP_Widget {
	
	function Example_Widget() {
		/* Widget Settings */
		$widget_ops = array( 'classname' => 'example', 'description' => __('An example widget that displays a person\'s name and sex.', 'example') );
		/* Widget control settings */
		$control_ops = array( 'width' => 300, 'height' => 350, 'id_base' => 'example-widget' );
		/* Create the widget */
		$this->WP_Widget( 'example-widget', __('Example Widget', 'example'), $widget_ops, $control_ops );

	}

function widget( $args, $instance ) {
	extract( $args );

	/* User-selected settings */
	$title = apply_filters('widget_title', $instance['title']);
	$name = $instance['name'];
	$sex = $instance['sex'];
	$show_sex = isset( $instance['show_sex']) ? $instance['show_sex'] : false;

	/* Before widget (defined by themes) */
	echo $before_widget;

	/* Title of widget (before and after defined by themes) */
	if ($title)
		echo $before_title . $title . $after_title;

	/* Display name from widget settings */
	if ($name)
		echo '<p>Hello. My name is' . $name . '.</p>';

	/* Show sex */
	if ($show_sex)
		echo '<p>I am a ' . $sex . '.</p>';

	/* After widget (defined by themes) */
	echo $after_widget;
}

function update( $new_instance, $old_instance ) {
	$instance = $old_instance;

	/* Strip tags (if needed) and update the widget settings */
	$instance['title'] = strip_tags( $new_instance['title']);
	$instance['name'] = strip_tags( $new_instance['name']);

	/* No need to strip tags for sex and show_sex */
	$instance['sex'] = $new_instance['sex'];
	$instance['show_sex'] = $new_instance['show_sex'];

	return $instance;
}

function form ( $instance ) {
	/* Set up some default widget settings */
	$defaults = array( 'title' => 'Example', 'name' => 'John Doe', 'sex' => 'male', 'show_sex' => true );
	$instance = wp_parse_args( (array) $instance, $defaults ); ?>
	<p>
		<label for="<?php echo $this->get_field_id('title'); ?>">Title:</label>
		<input id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo $instance['title']; ?>" style="width: 100%;" />
	</p>
	<p>
		<label for="<?php echo $this->get_field_id( 'name' ); ?>">Your Name:</label>
		<input id="<?php echo $this->get_field_id( 'name' ); ?>" name="<?php echo $this->get_field_name( 'name' ); ?>" value="<?php echo $instance['name']; ?>" style="width:100%;" />
	</p>
	<p>
		<label for="<?php echo $this->get_field_id( 'sex' ); ?>">Sex:</label> 
		<select id="<?php echo $this->get_field_id( 'sex' ); ?>" name="<?php echo $this->get_field_name( 'sex' ); ?>" class="widefat" style="width:100%;">
			<option <?php if ( 'male' == $instance['format'] ) echo 'selected="selected"'; ?>>male</option>
			<option <?php if ( 'female' == $instance['format'] ) echo 'selected="selected"'; ?>>female</option>
		</select>
	</p>
	<p>
		<input class="checkbox" type="checkbox" <?php checked( $instance['show_sex'], true ); ?> id="<?php echo $this->get_field_id( 'show_sex' ); ?>" name="<?php echo $this->get_field_name( 'show_sex' ); ?>" /> 
		<label for="<?php echo $this->get_field_id( 'show_sex' ); ?>">Display sex publicly?</label>
	</p>
	<?php
	}
	}




/**
 * Enqueue scripts and styles
 */
function uwp_boilerplate_scripts() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );

	wp_enqueue_style( 'app', get_template_directory_uri() . '/app.css' );

	wp_enqueue_script( 'navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script( 'keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20120202' );
	}
}
add_action( 'wp_enqueue_scripts', 'uwp_boilerplate_scripts' );

/**
 * Implement the Custom Header feature
 */
//require( get_template_directory() . '/inc/custom-header.php' );
