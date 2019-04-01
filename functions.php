<?php 

// adding the CSS and JS files
function gt_setup()
{
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css?family=Roboto|Roboto+Condensed|Roboto+Slab');
    wp_enqueue_style('fontawesome', 'https://use.fontawesome.com/releases/v5.1.0/css/all.css');
    wp_enqueue_style('style', get_stylesheet_uri(), null, microtime(), 'all');
    wp_enqueue_script('main', get_theme_file_uri('/js/main.js'), null, microtime(), true);
}

add_action('wp_enqueue_scripts', 'gt_setup');

// adding Theme Support

function gt_init() 
{
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('html5', 
        array('comment-list', 'comment-form', 'search-form')
        );
}

add_action('after_setup_theme', 'gt_init');

//Products Post Type
function event_custom_post_type() 
{
    register_post_type('event',
    array(
        'rewrite' => array('slug' => 'events'),
        'labels' => array(
            'name' => 'Events',
            'singular_name' => 'Event',
            'add_new_item' => 'Add New Event',
            'edit_item' => 'Edit Event'
        ),
        'menu-icon' => 'dashicons-book-alt',
        'public' => true,
        'has_archive' => true,
        'supports' => array(
            'title', 'thumbnail', 'editor', 'excerpt', 'comments'
        )
       )
    );
}
add_action('init', 'event_custom_post_type');

function management_custom_post_type() 
{
    register_post_type('management',
    array(
        'rewrite' => array('slug' => 'management'),
        'labels' => array(
            'name' => 'Management',
            'singular_name' => 'Mgmt Member',
            'add_new_item' => 'Add New Management Member',
            'edit_item' => 'Edit Management Member'
        ),
        'menu-icon' => 'dashicons-book-alt',
        'public' => true,
        'has_archive' => true,
        'supports' => array(
            'title', 'thumbnail', 'editor', 'excerpt', 'comments'
        )
       )
    );
}
add_action('init', 'management_custom_post_type');


function advisoryboard_custom_post_type() 
{
    register_post_type('advisoryboard',
    array(
        'rewrite' => array('slug' => 'advisoryboard'),
        'labels' => array(
            'name' => 'Advisory Board',
            'singular_name' => 'Advisory Member',
            'add_new_item' => 'Add New Advisory Board Member',
            'edit_item' => 'Edit Advisory Board Member'
        ),
        'menu-icon' => 'dashicons-book-alt',
        'public' => true,
        'has_archive' => true,
        'supports' => array(
            'title', 'thumbnail', 'editor', 'excerpt', 'comments'
        )
       )
    );
}
add_action('init', 'advisoryboard_custom_post_type');

function service_custom_post_type() 
{
    register_post_type('service',
    array(
        'rewrite' => array('slug' => 'service'),
        'labels' => array(
            'name' => 'Service',
            'singular_name' => 'Service',
            'add_new_item' => 'Add New Service',
            'edit_item' => 'Edit Service'
        ),
        'menu-icon' => 'dashicons-book-alt',
        'public' => true,
        'has_archive' => true,
        'supports' => array(
            'title', 'thumbnail', 'editor', 'excerpt', 'comments'
        )
       )
    );
}
add_action('init', 'service_custom_post_type');

function product_custom_post_type() 
{
    register_post_type('products',
    array(
        'rewrite' => array('slug' => 'products'),
        'labels' => array(
            'name' => 'Product',
            'singular_name' => 'Product',
            'add_new_item' => 'Add New Product',
            'edit_item' => 'Edit Product'
        ),
        'menu-icon' => 'dashicons-book-alt',
        'public' => true,
        'has_archive' => true,
        'supports' => array(
            'title', 'thumbnail', 'editor', 'excerpt', 'comments'
        )
       )
    );
}
add_action('init', 'product_custom_post_type');