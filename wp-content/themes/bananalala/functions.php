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
add_theme_support( 'post-thumbnails' );
//set_post_thumbnail_size( 295, 295 );
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

/**
 * Register sidebars and widgetized areas.
 *
 */
//Sidebar Register
$args = array(
    'name'          => __( 'Sidebar name', 'theme_text_domain' ),
    'id'            => 'unique-sidebar-id',    // ID should be LOWERCASE  ! ! !
    'description'   => '',
    'class'         => '',
    'before_widget' => '<li id="%1$s" class="widget %2$s">',
    'after_widget'  => '</li>',
    'before_title'  => '<h2 class="widgettitle">',
    'after_title'   => '</h2>' );
register_sidebar( $args );

function arphabet_widgets_init() {
//      Footer Widgets
    register_sidebar( array(
        'name' => 'Footer Widget Left',
        'id' => 'footer-widget-left',
        'description' => 'Appears in the footer area',
        'before_widget' => '<div class="footer-1">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="footer-title">',
        'after_title' => '</h3>',
    ) );
    register_sidebar( array(
        'name' => 'Footer Widget Middle',
        'id' => 'footer-widget-middle',
        'description' => 'Appears in the footer area',
        'before_widget' => '<div class="footer-2">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="footer-title">',
        'after_title' => '</h3>',
    ) );
    register_sidebar( array(
        'name' => 'Footer Widget Right',
        'id' => 'footer-widget-right',
        'description' => 'Appears in the footer area',
        'before_widget' => '<div class="footer-3">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="footer-title">',
        'after_title' => '</h3>',
    ) );
//    Sidebar Widgets
    register_sidebar( array(
        'name' => 'Sidebar Widget 0',
        'id' => 'sidebar-widget-0',
        'description' => 'Appears in the sidebar area',
        'before_widget' => '<div class="sidebar-0">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="sidebar-title">',
        'after_title' => '</h3>',
    ) );
    register_sidebar( array(
        'name' => 'Sidebar Widget 1',
        'id' => 'sidebar-widget-1',
        'description' => 'Appears in the sidebar area',
        'before_widget' => '<div class="sidebar-1">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="sidebar-title">',
        'after_title' => '</h3>',
    ) );
    register_sidebar( array(
        'name' => 'Sidebar Widget 2',
        'id' => 'sidebar-widget-2',
        'description' => 'Appears in the sidebar area',
        'before_widget' => '<div class="sidebar-2">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="sidebar-title">',
        'after_title' => '</h3>',
    ) );
    register_sidebar( array(
        'name' => 'Sidebar Widget 3',
        'id' => 'sidebar-widget-3',
        'description' => 'Appears in the sidebar area',
        'before_widget' => '<div class="sidebar-3">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="sidebar-title">',
        'after_title' => '</h3>',
    ) );

}

function recent_posts_function() {
    query_posts(array('orderby' => 'date', 'order' => 'DESC' , 'showposts' => 1));
    if (have_posts()) :
        while (have_posts()) : the_post();
            $return_string = '<a href="'.get_permalink().'">'.get_the_title().'</a>';
        endwhile;
    endif;
    wp_reset_query();
    return $return_string;
}

function register_shortcodes(){
    add_shortcode('recent-posts', 'recent_posts_function');
}

add_action( 'init', 'register_shortcodes');






add_action( 'widgets_init', 'arphabet_widgets_init' );

//
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