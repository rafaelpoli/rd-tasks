<?php 

//Class Nav Walker for Nav Menu
require_once(get_template_directory().'/inc/class-wp-bootstrap-navwalker.php');

//Capabilities for Wordpress Posts Type
add_action( 'after_setup_theme', 'rp_theme_setup');
function rp_theme_setup() {
    
    add_theme_support('post-thumbnails');

    add_theme_support('title-tag');

    register_nav_menus( 
        array(
            'primary' => 'Primary'
        )      
    );

}

//Styles and Scripts Includes
add_action( 'wp_enqueue_scripts', 'rp_theme_scripts' );
function rp_theme_scripts() {
    wp_enqueue_style( 'rp-theme-bootstrap', get_template_directory_uri().'/assets/css/bootstrap.min.css' );
    wp_enqueue_script( 'popper', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js', array('jquery'), true );
    wp_enqueue_script( 'rp-theme-bootstrap', get_template_directory_uri().'/assets/js/bootstrap.min.js', array('jquery'), true );
}

//Enable widgets on theme and define Primary Sidebar
add_action('widgets_init', 'rp_theme_sidebar');
function rp_theme_sidebar() {

    register_sidebar(array(
        'id' => 'primary-sidebar',
        'name' => 'Primary Sidebar',
        'description' => 'Right Sidebar',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widget-title">',
        'before_title' => '</h4>',
    ));
}

?>