<?php


/////////////////
// Add CSS
/////////////////
function dw_theme_styles() {
  // Bootstrap CSS
  wp_enqueue_style( 'bootstrap_css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css');  
  // Bootstrap JS
  wp_enqueue_script( 'bootstrap_js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js');
  // Main CSS
  wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css');
}

add_action( 'wp_enqueue_scripts', 'dw_theme_styles' );


/////////////////
// Add Menus
/////////////////
add_theme_support( 'menus' );

function register_theme_menus() {
  register_nav_menus( 
  array(
    'main-menu' => __( 'Main Menu' )
    )
  );
}

add_action( 'init', 'register_theme_menus' );

?>