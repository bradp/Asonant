<?php
/**
 * Register widgetized area and update sidebar with default widgets
 */
function asonant_widgets_init() {
    register_sidebar( 
    array(
        'name'          => __( 'Left Footer Sidebar', 'asonant' ),
        'id'            => 'sidebar-left-footer',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h1 class="widget-title">',
        'after_title'   => '</h1>',
    ),
    array(
        'name'          => __( 'Center Footer Sidebar', 'asonant' ),
        'id'            => 'sidebar-center-footer',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h1 class="widget-title">',
        'after_title'   => '</h1>',
    ),
    array(
        'name'          => __( 'Right Footer Sidebar', 'asonant' ),
        'id'            => 'sidebar-right-footer',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h1 class="widget-title">',
        'after_title'   => '</h1>',
    ) );
}
add_action( 'widgets_init', 'asonant_widgets_init' );