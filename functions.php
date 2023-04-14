 <?php

function jquery_enqueued_script() {
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery-3.5.1.min.js', array(), '3.3.1');
}

add_action('wp_enqueue_scripts', 'jquery_enqueued_script');

function bootstrapstarter_enqueue_styles() {
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
    $dependencies = array('bootstrap');
    wp_enqueue_style('bootstrapstarter-style', get_stylesheet_uri(), $dependencies);
}

function bootstrapstarter_enqueue_scripts() {
    $dependencies = array('popper');
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', $dependencies, '4.5.2', true);
}

function jplayer_enqueue_scripts() {
    $dependencies = array('jquery');
    wp_enqueue_script('jplayer', get_template_directory_uri() . '/js/plugins/jplayeer/jquery.jplayer.min.js', $dependencies, '2.9.2', true);
}

function popper_enqueue_scripts() {
    $dependencies = array('jquery');
    wp_enqueue_script('popper', get_template_directory_uri() . '/js/popper.min.js', $dependencies, '1.16.1', true);
}

function casacamara_add_woocommerce_support() {
    add_theme_support('woocommerce');
}

add_filter('excerpt_length', 'custom_excerpt_length');

function custom_excerpt_length() {
    return 20; //Nova quantidade de caracteres do excerpt
}

add_theme_support('post-thumbnails');

add_image_size('blog-header', 300, 150, true); // Hard Crop Mode

add_action('after_setup_theme', 'casacamara_add_woocommerce_support');
add_theme_support('wc-product-galeria-zoom');
add_theme_support('wc-product-gallery-lightbox');
add_theme_support('wc-product-gallery-slider');
add_action('wp_enqueue_scripts', 'bootstrapstarter_enqueue_styles');
add_action('wp_enqueue_scripts', 'popper_enqueue_scripts');
add_action('wp_enqueue_scripts', 'jplayer_enqueue_scripts');
add_action('wp_enqueue_scripts', 'bootstrapstarter_enqueue_scripts');



