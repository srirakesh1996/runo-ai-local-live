<?php

/**
 * Theme Functions for Runo WordPress Blog
 */


add_filter('document_title_parts', function ($title) {
    if (is_home() && !is_front_page()) {
        $title['title'] = 'Latest Blogs';
        $title['site'] = 'Runo';
        $title['tagline'] = ''; // Optional: remove tagline if you don’t want it
    }
    return $title;
});

add_theme_support('title-tag');

function runo_blog_assets()
{
    $base_url = 'https://runo.ai';

    // Enqueue main theme style
    wp_enqueue_style('runo-style', get_stylesheet_uri());
    // ✅ Enqueue custom.js from theme directory
    wp_enqueue_script('runo-custom-js', get_stylesheet_directory_uri() . '/js/custom.js', array('jquery'), null, true);
    // Enqueue your custom CSS files
    wp_enqueue_style('runo-custom-css', $base_url . '/assets/custom.css');
    wp_enqueue_style('runo-css', $base_url . '/assets/runo.css');

    // Enqueue jQuery (already included in WP)
    wp_enqueue_script('jquery');

    // Enqueue other JS libraries
    wp_enqueue_script('slicknav', $base_url . '/js/jquery.slicknav.js', array('jquery'), null, true);
    wp_enqueue_script('swiper', $base_url . '/js/swiper-bundle.min.js', array(), null, true);
    wp_enqueue_script('magnific', $base_url . '/js/jquery.magnific-popup.min.js', array('jquery'), null, true);
    wp_enqueue_script('smoothscroll', $base_url . '/js/SmoothScroll.js', array(), null, true);
    wp_enqueue_script('parallaxie', $base_url . '/js/parallaxie.js', array(), null, true);



    // Bootstrap Bundle JS
    wp_enqueue_script('bootstrap-bundle', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js', array(), null, true);

    // PopupSmart Freechat (optional)
    wp_enqueue_script('popupsmart', 'https://popupsmart.com/freechat.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'runo_blog_assets');

// Enable featured images support
add_theme_support('post-thumbnails');

// Set default featured image size
set_post_thumbnail_size(400, 200, true);
// Remove Easy TOC from post content so we can manually place it
remove_filter('the_content', 'ezTOC::the_content', 100);
