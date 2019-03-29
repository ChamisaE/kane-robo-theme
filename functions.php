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

function team_custom_post_type() 
{
    register_post_type('team',
    array(
        'rewrite' => array('slug' => 'team'),
        'labels' => array(
            'name' => 'Team',
            'singular_name' => 'Team Member',
            'add_new_item' => 'Add New Team Member',
            'edit_item' => 'Edit Team Member'
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
add_action('init', 'team_custom_post_type');

function service_custom_post_type() 
{
    register_post_type('service',
    array(
        'rewrite' => array('slug' => 'services'),
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

function equipment_custom_post_type() 
{
    register_post_type('equipment',
    array(
        'rewrite' => array('slug' => 'equipment'),
        'labels' => array(
            'name' => 'Equipment',
            'singular_name' => 'Equipment',
            'add_new_item' => 'Add New Equipment',
            'edit_item' => 'Edit Equipment'
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
add_action('init', 'equipment_custom_post_type');