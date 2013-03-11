<?php
remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );
if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );
    add_image_size( 'homepage-thumb', 180, 215, true );
    add_image_size( 'construction-thumb', 177, 126, true );
    add_image_size( 'development-thumb', 166, 137, true );
    add_image_size( 'slider_thumb', 260, 120, true );
	
    function custom_excerpt_length( $length ) {
        return 20;
    }
	
    add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

    add_filter('single_template', create_function('$t', 'foreach( (array) get_the_category() as $cat ) { if ( file_exists(TEMPLATEPATH . "/single-{$cat->slug}.php") ) return TEMPLATEPATH . "/single-{$cat->slug}.php"; } return $t;' ));
}
?>