<?php 

add_action( 'wp_enqueue_scripts', 'chicdressing_enqueue_styles' );
function chicdressing_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' ); 
}

add_filter( 'big_image_size_threshold', '__return_false' );



 /* Dechargement des fonctions qui appelle les google fonts */ 
 function ashe_deregister_old_fonts() {
    wp_deregister_style( 'ashe-playfair-font' );
    wp_deregister_style( 'ashe-opensans-font' );
    wp_deregister_style( 'ashe-kalam-font' );
    wp_deregister_style( 'ashe-rokkitt-font' );
}
add_action( 'wp_enqueue_scripts', 'ashe_deregister_old_fonts', 20 );

/**/