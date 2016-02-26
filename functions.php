<?php
/**
 * OnePress Child Theme Functions
 *
 */

/**
 * Enqueue child theme style
 */
add_action( 'wp_enqueue_scripts', 'onepress_child_enqueue_styles', 15 );
function onepress_child_enqueue_styles() {
    wp_enqueue_style( 'onepress-child-style', get_stylesheet_directory_uri() . '/style.css' );
}
/**
 * Hook to add custom section after about section
 *
 * @see wp-content/themes/onepress/template-frontpage.php
 */

/*
function add_my_custom_section(){
    ?>
    <section id="my_section" class="my_section section-padding onepage-section">
        <div class="container">
            <div class="section-title-area">
                <h5 class="section-subtitle"> My section subtitle</h5>
                <h2 class="section-title"> My section title</h2>
            </div>
            <div class="row">
                <!-- Your section content here, you can use bootstrap 4 elements :) -->
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.</p>

            </div>
        </div>
    </section>
    <?php
}
add_action( 'onepress_after_section_about', 'add_my_custom_section'  );
*/
