<?php
show_admin_bar(true);
function wpdocs_theme_name_scripts() {
    wp_enqueue_style( 'style-name', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );
//function register_menus() {
//    register_nav_menus(
//        array(
//            'left-menu' => __( 'Left Menu' ),
//            'right-menu' => __( 'Right Menu' )
//        )
//    );
//}
//add_action( 'init', 'register_menus' );
?>