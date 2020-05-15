<?php

// adding CSS and JS files
function add_theme_scripts(){
 // stylesheets
 wp_enqueue_style('googlefonts', "https://fonts.googleapis.com/css2?family=Cairo:wght@300;600&display=swap", false);
 wp_enqueue_style( 'style', get_stylesheet_uri(), NULL, microtime());

 // scripts
 wp_register_script( 'jQuery', '//code.jquery.com/jquery-3.4.1.min.js', null, null, true );
 wp_enqueue_script('jQuery');
 wp_enqueue_script("script", get_theme_file_uri('/js/app.js'), NULL, 1.0, true);
}

add_action('wp_enqueue_scripts', 'add_theme_scripts');

function gridwork_init() {
 add_theme_support('post-thumbnails');
 add_theme_support('title-tag');
 add_theme_support('html5',
 array('comment-list', 'comment-form', 'search-form'));
 }
 
 add_action('after_setup_theme', 'gridwork_init');

 add_action( 'wp_enqueue_scripts', 'tu_add_aos' );
 function tu_add_aos() {
     wp_enqueue_style('AOS_animate', '//cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css', false, null);
     wp_enqueue_script('AOS', '//cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js', false, null, true);
     wp_enqueue_script('theme-js', get_template_directory_uri() . '/js/aosini.js', array( 'AOS' ), null, true);
 }

 function new_excerpt_more( $more ) {
    return '';
}
add_filter('excerpt_more', 'new_excerpt_more');

 // remove append from archive title
 add_filter( 'get_the_archive_title', function ($title) {    
     if ( is_category() ) {    
             $title = single_cat_title( '', false );    
         } elseif ( is_tag() ) {    
             $title = single_tag_title( '', false );      
         } 
         elseif ( is_month() ) {
             $title = get_the_date( 'F Y' );
         }
         elseif ( is_author() ) {    
             $title = '<span class="vcard">' . get_the_author() . '</span>' ;    
         } elseif ( is_tax() ) { //for custom post types
             $title = sprintf( __( '%1$s' ), single_term_title( '', false ) );
         } elseif (is_post_type_archive()) {
             $title = post_type_archive_title( '', false );
         }
     return $title;    
 });
