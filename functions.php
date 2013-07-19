<?php
/**
 * asonant functions and definitions
 *
 * @package asonant
 */

if ( ! isset( $content_width ) )
    $content_width = 700; /* pixels */


if ( ! function_exists( 'asonant_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function asonant_setup() {
    require get_template_directory() . '/inc/template-tags.php'; // Custom template tags for this theme.
    require get_template_directory() . '/inc/extras.php'; // Custom functions that act independently of the theme templates
    require get_template_directory() . '/inc/customizer.php'; //Customizer additions
    require get_template_directory() . '/inc/widgets.php';  // Sidebars and widgets
    require get_template_directory() . '/inc/scripts.php';  // Scripts and stylesheets
    require get_template_directory() . '/inc/tha-hooks.php'; // Load Theme Hook Alliance files
    require get_template_directory() . '/inc/jetpack.php';   // Load Jetpack compatibility file.

    add_theme_support( 'automatic-feed-links' ); //Add default posts and comments RSS feed links to head
    add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) ); //Enable support for Post Formats
    add_theme_support( 'post-thumbnails' ); 


    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'asonant' ),
        //'footer' => __( 'Footer Menu', 'asonant' ),
        //'top' => __( 'Top Menu', 'asonant' ),
    ) );

    /**
     * Make theme available for translation
     * Translations can be filed in the /languages/ directory
     * If you're building a theme based on asonant, use a find and replace
     * to change 'asonant' to the name of your theme in all the template files
     */
    load_theme_textdomain( 'asonant', get_template_directory() . '/languages' );

    add_editor_style( 'editor-style.css' );
    
}
endif; // asonant_setup
add_action( 'after_setup_theme', 'asonant_setup' );
