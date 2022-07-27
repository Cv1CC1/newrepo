<?php

// Enqueuing
function load_css()
{

    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', [], 1, 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('main', get_template_directory_uri() . '/css/main.css', [], 1, 'all');
    wp_enqueue_style('main');

}
add_action('wp_enqueue_scripts', 'load_css');

function load_js()
{
    wp_enqueue_script('jquery');

    wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', ['jquery'], 1, true);
    wp_enqueue_script('bootstrap');
}
add_action('wp_enqueue_scripts', 'load_js');

function toggle() {
    if ( jQuery( window ).width() >= 480 ) {
      jQuery( 'top-menu' ).hide();
      jQuery( 'mobile-menu' ).show();
    } else {
      jQuery( 'mobile-menu' ).hide();
      jQuery( 'top-menue' ).show();
    }
}

// Nav Menus
register_nav_menus( array(
    'top-menu' => __( 'Top Menu', 'theme' ),
    'footer-menu' => __( 'Footer Menu', 'theme' ),
    'mobile-menu' => __( 'Mobile menu', 'theme' ),
) );

// Theme Support
add_theme_support('menus');
add_theme_support( 'post-thumbnails' );

// Image Sizes
add_image_size('small', 600, 600, false);


add_action('acf/init', 'my_acf_init_block_types');
function my_acf_init_block_types() {}


if(function_exists('acf_register_block_type')){
    add_action('acf/init','register_acf_block_types');
}

function register_acf_block_types(){
    acf_register_block_type(array(
        'name'              => 'hero',
        'title'             => __('Hero'),
        'description'       => __('Pages hero image'),
        'render_template'   => 'blocks/hero.php',
        'keywords'          => 'formatting',
    ));

    acf_register_block_type(array(
        'name'              => 'content image right',
        'title'             => __('Content image right'),
        'description'       => __('Two column content with image on right side'),
        'render_template'   => 'blocks/column-image-right.php',
        'keywords'          => 'formatting',
    ));

    acf_register_block_type(array(
        'name'              => 'content image left',
        'title'             => __('Content image left'),
        'description'       => __('Two column content with image on left side'),
        'render_template'   => 'blocks/column-image-left.php',
        'keywords'          => 'formatting',
    ));

    acf_register_block_type(array(
        'name'              => 'hero link',
        'title'             => __('Hero Link'),
        'description'       => __('Pages hero image with link'),
        'render_template'   => 'blocks/hero-link.php',
        'keywords'          => 'formatting',
    ));

    acf_register_block_type(array(
        'name'              => 'content image left link',
        'title'             => __('Content image left link'),
        'description'       => __('Two column content with image on left side and addtional link'),
        'render_template'   => 'blocks/column-image-left-link.php',
        'keywords'          => 'formatting',
    ));

    acf_register_block_type(array(
        'name'              => 'content image right link',
        'title'             => __('Content image right link'),
        'description'       => __('Two column content with image on right side and addtional link'),
        'render_template'   => 'blocks/column-image-right-link.php',
        'keywords'          => 'formatting',
    ));

    acf_register_block_type(array(
        'name'              => 'two column manual guide',
        'title'             => __('Two column manual guide'),
        'description'       => __('Two column manual guide'),
        'render_template'   => 'blocks/two-column-manual-guide.php',
        'keywords'          => 'formatting',
    ));

    acf_register_block_type(array(
        'name'              => 'hero with underline',
        'title'             => __('Hero with underline'),
        'description'       => __('Hero with underline'),
        'render_template'   => 'blocks/hero-with-underline.php',
        'keywords'          => 'formatting',
    ));
}
