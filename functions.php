<?php


/////////////////
// Add CSS
/////////////////
function dw_theme_styles() {
  // Bootstrap CSS
  wp_enqueue_style( 'bootstrap_css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css');  
  // jQuery JS
  wp_enqueue_script( 'jquery_js', 'https://code.jquery.com/jquery-3.3.1.min.js');
  // Bootstrap JS
  wp_enqueue_script( 'bootstrap_js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js');
  // Main CSS
  wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css');
  // Font Awesome CSS
  wp_enqueue_style( 'fontawesome_css', 'https://use.fontawesome.com/releases/v5.4.2/css/all.css');
  

  // Google Font - Anton
  wp_enqueue_style( 'anton_font', 'https://fonts.googleapis.com/css?family=Anton');  

  // Google Font - Space Mono
  wp_enqueue_style( 'space_font', 'https://fonts.googleapis.com/css?family=Space+Mono');  
}

add_action( 'wp_enqueue_scripts', 'dw_theme_styles' );


/////////////////
// Add Menus
/////////////////
add_theme_support( 'menus' );

function register_theme_menus() {
  register_nav_menus( 
  array(
    'main-menu' => __( 'Main Menu' ),
    'footer-menu' => __( 'Footer Menu' )
    )
  );
}

add_action( 'init', 'register_theme_menus' );


/////////////////
// Add Support for Featured Images
/////////////////
add_theme_support( 'post-thumbnails' );


/**
 * Filter the except length to 20 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length( $length ) {
  return 30;
}

add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

// Register Custom Navigation Walker
require_once('class-wp-bootstrap-navwalker.php');

// Bootstrap navigation
function bootstrap_nav()
{
	wp_nav_menu( array(
            'theme_location'    => 'main-menu',
            'depth'             => 2,
            'container'         => 'false',
            'menu_class'        => 'nav navbar-nav',
            'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
            'walker'            => new wp_bootstrap_navwalker())
    );
}

// Bootstrap navigation
function bootstrap_nav2()
{
	wp_nav_menu( array(
            'theme_location'    => 'footer-menu',
            'depth'             => 2,
            'container'         => 'false',
            'menu_class'        => 'nav navbar-nav navbar-center',
            'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
            'walker'            => new wp_bootstrap_navwalker())
    );
}

?>