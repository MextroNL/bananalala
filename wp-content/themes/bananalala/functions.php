<?php
show_admin_bar(true);

$args = array(
    'flex-width'    => true,
    'width'         => 1024,
    'flex-height'    => true,
    'height'        => 412,
    'default-image' => get_template_directory_uri() . '/images/header.jpg',
);
add_theme_support( 'custom-header', $args );
function wpdocs_theme_name_scripts() {
    wp_enqueue_style( 'style-name', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );

function register_my_menu() {
    register_nav_menu('header-menu',__( 'Navigatie' ));
}
add_action( 'init', 'register_my_menu' );

?>