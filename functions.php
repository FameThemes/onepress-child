<?php
/**
 * Enqueue child theme style
 */
function onepress_child_theme_enqueue_styles() {
    wp_enqueue_style( 'onepress-child-style', get_stylesheet_directory_uri() . '/style.css');
}
add_action( 'wp_enqueue_scripts', 'onepress_child_theme_enqueue_styles', 11 );


/**
 * Hook to order/add sections
 *
 * @see wp-content/themes/onepress/template-frontpage.php
 */
function add_my_custom_frontpage_section(){

    // Here you can order your sections by order array below
    $sections = array(
        'hero', 'about', 'services', 'videolightbox', 'counter', 'team', 'news', 'contact', 'my_section'
    );

    foreach ( $sections as $section ){
        get_template_part('section-parts/section', $section );
    }
}
add_action( 'onepress_frontpage_section_parts', 'add_my_custom_frontpage_section' , 50 );