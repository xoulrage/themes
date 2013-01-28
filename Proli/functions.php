<?php
remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );
if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );
    add_image_size( 'homepage-thumb', 180 );
    add_image_size( 'construction-thumb', 177 );
    add_image_size( 'development-thumb', 166 );
    function custom_excerpt_length( $length ) {
        return 20;
    }
    add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
}
?>