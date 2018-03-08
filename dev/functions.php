<?php
/**
* Enqueue scripts and styles for the front end.
*
*/
function twentyfourteen_scripts() {

// Load our main stylesheet.
    wp_enqueue_style( 'them-style', get_stylesheet_uri() );

    //wp_enqueue_style( 'icon-font', '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' );

    wp_deregister_script('jquery'); // Remove WordPress core's jQuery
    wp_register_script('jquery', get_template_directory_uri() . '/js/lib/jquery.js', false, 1, true);

    wp_enqueue_script('jquery');

    wp_enqueue_script( 'site', get_template_directory_uri() . '/js/site.js', array( 'jquery' ), 1, true );
}
add_action( 'wp_enqueue_scripts', 'twentyfourteen_scripts' );


//Create Custom Post Types

//add_action( 'init', 'create_post_type' );
function create_post_type() {

$args = array(
    	'label' => __('Speakers'),
'singular_label' => __('Speaker'),
'public' => true,
'show_ui' => true,
'capability_type' => 'page',
'hierarchical' => true,
'rewrite' => true,
'taxonomies' => array('post_tag', 'category'),
'supports' => array('title', 'editor', 'thumbnail', 'page-attributes', 'custom-fields', 'menu-order')
);
register_post_type( 'speaker' , $args );




}


// Set up our menus
register_nav_menus( array(
'primary' => 'Primary Navigation',
) );

?>