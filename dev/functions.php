<?php
/**
* Enqueue scripts and styles for the front end.
*
*/
function twentyfourteen_scripts() {

// Load our main stylesheet.
    wp_enqueue_style( 'theme-style', get_stylesheet_uri() );

    wp_enqueue_style( 'gfonts', '//fonts.googleapis.com/css?family=Roboto+Slab:400,700|Roboto:300,400,400i,700' );


    if(is_page('contact')):
      wp_enqueue_script('jquery', false, array(), false, false);
    else:
      wp_deregister_script('jquery'); // Remove WordPress core's jQuery
    endif;

   // wp_enqueue_script( 'site', get_template_directory_uri() . '/js/site.js', array( 'jquery' ), 1, true );
}
add_action( 'wp_enqueue_scripts', 'twentyfourteen_scripts' );


//Create Custom Post Types

add_action( 'init', 'create_post_type' );
function create_post_type() {

$args = array(
    	'label' => __('Residencies'),
'singular_label' => __('Residency'),
'public' => true,
'show_ui' => true,
'capability_type' => 'page',
'hierarchical' => true,
'rewrite' => true,
'taxonomies' => array('post_tag', 'category'),
'supports' => array('title', 'editor', 'thumbnail', 'page-attributes', 'custom-fields', 'menu-order')
);
register_post_type( 'residency' , $args );

$args = array(
'label' => __('Instructors'),
'singular_label' => __('Instructor'),
'public' => true,
'show_ui' => true,
'capability_type' => 'page',
'hierarchical' => true,
'rewrite' => true,
'taxonomies' => array('post_tag', 'category'),
'supports' => array('title', 'editor', 'thumbnail', 'page-attributes', 'custom-fields', 'menu-order')
);
register_post_type( 'instructor' , $args );


}

if( function_exists('acf_add_options_page') ) {

acf_add_options_page();
acf_add_options_sub_page('Footer');
}

//allow svg uploads
function cc_mime_types($mimes) {
$mimes['svg'] = 'image/svg+xml';
return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');


// Set up our menus
register_nav_menus( array(
'primary' => 'Primary Navigation',
) );

?>