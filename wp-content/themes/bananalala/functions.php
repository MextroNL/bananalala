<?php
show_admin_bar(true);
//
$args = array(
    'flex-width'    => true,
    'width'         => 1024,
    'flex-height'    => true,
    'height'        => 412,
    'default-image' => get_template_directory_uri() . '/images/header.jpg',
);
add_theme_support( 'custom-header', $args );
//
function wpdocs_theme_name_scripts() {
    wp_enqueue_style( 'style-name', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );
//
function register_my_menu() {
    register_nav_menu('header-menu',__( 'Navigatie' ));
}
add_action( 'init', 'register_my_menu' );

//                    //Theme Functions
//                function mytheme_customize_register( $wp_customize ) {
//                    //All our sections, settings, and controls will be added here
//                    //Setting
//                    $wp_customize->add_setting( 'footer_color' , array(
//                        'default'   => '#202020',
//                        'transport' => 'refresh',
//                    ) );
//                    //Section
//                    $wp_customize->add_section( 'colors', array(
//                        'title'    => __( 'Theme Colors' ),
//                        'priority' => 20,
//                    ) );
//                    //Control
//                    $wp_customize->add_control( new WP_Customize_Color_Control(
//                        $wp_customize,
//                        'foot_color',
//                        array(
//                            'label'      => __( 'Footer Color', 'bananalala' ),
//                            'section'    => 'colors',
//                            'settings'   => 'footer_color',
//                            'priority'   => 1
//                        )
//                    ));
//                }
//                add_action( 'customize_register', 'mytheme_customize_register' );
//                //
?>