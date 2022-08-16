<?php

//include js and css files


function mademoiselle_style() {

    wp_enqueue_style('Owl Carousel', get_template_directory_uri() . '/frontend/css/owl.carousel.min.css', array(), 'v2.3.4');
    wp_enqueue_style('Owl Carousel Theme', get_template_directory_uri() . '/frontend/css/owl.theme.default.min.css', array('Owl Carousel'), 'v2.3.4');
    wp_enqueue_style('Theme', get_template_directory_uri() . '/frontend/css/theme.css', array(), '1.0');
    wp_enqueue_style('Style', get_template_directory_uri() . '/style.css', array(), '1.0');
}

add_action('wp_enqueue_scripts', 'mademoiselle_style');

function mademoiselle_scripts() {
    wp_enqueue_script('jQuery', get_template_directory_uri() . '/frontend/js/jquery.min.js', array(), 'v3.4.1', true);
    wp_enqueue_script('Bootstrap Bundle', get_template_directory_uri() . '/frontend/js/bootstrap.bundle.min.js', array('jQuery'), 'v4.3.1', true);
    wp_enqueue_script('Font Awesome', 'https://kit.fontawesome.com/85bd05dd45.js', array('jQuery'), '5', true);
    wp_enqueue_script('Owl Carousel js', get_template_directory_uri() . '/frontend/js/owl.carousel.js', array('jQuery'), 'v2.3.4', true);
    wp_enqueue_script('Main js', get_template_directory_uri() . '/frontend/js/main.js', array('jQuery'), '1.0', true);
}

add_action('wp_enqueue_scripts', 'mademoiselle_scripts');

function mademoiselle_support() {
    //title tag support
    add_theme_support('title-tag');

    //custom logo support
    add_theme_support('custom-logo', array(
        'height' => 25,
        'width' => 196,
        'flex-width' => false,
        'flex-height' => false
    ));

    //Featured image support

    add_theme_support('post-thumbnails');

    //image size
    add_image_size('blog-list', 366, 243, true);
    add_image_size('blog-single-lead', 556, 370, true);
    add_image_size('testimonial-lead', 366, 342, true);
}

add_action('after_setup_theme', 'mademoiselle_support');

function mademoiselle_menus() {

    register_nav_menus(array(
        'main-menu' => 'Main Menu',
        'social' => 'Social Menu'
    ));
}

add_action('init', 'mademoiselle_menus');

function mademoiselle_create_post_type() {

    register_post_type('our_services', array(
        'labels' => array(
            'name' => 'Services',
            'singular_name' => 'Service',
            'plural_name' => 'Services',
            'all_items' => 'All Services',
            'add_new' => 'Add new Service',
            'add_new_item' => 'Add New Services Item',
            'new_item' => 'New Service',
            'edit' => 'Edit',
            'edit_item' => 'Edit Service Item',
            'view' => 'View Service',
            'view_item' => 'View Service Item',
            'featured_image' => 'Featured image for this Service'
        ),
        'public' => true,
        'hierarchical' => false,
        'show_in_menu' => true,
        'menu_icon' => 'dashicons-admin-generic',
        'menu_position' => 17,      
        'supports' => array(
            'title',
            'thumbnail',
            'editor'
        )
    ));
}

add_action('init', 'mademoiselle_create_post_type');

function mademoiselle_create_testimonials() {
    register_post_type('testimonials', array(
        'labels' => array(
            'name' => 'Testimonials',
            'singular_name' => 'Testimonial',
            'plural_name' => 'Testimonials',
            'all_items' => 'All Testimonials',
            'add_new' => 'Add New Testimonial',
            'add_new_item' => 'Add New Testimonial Item',
            'new_item' => 'New Testimonial',
            'edit' => 'Edit',
            'edit_item' => 'Edit testimonial Item',
            'view' => 'View Testimonial',
            'view_item' => 'View Testimonial Item',
            'featured_image' => 'Featured image for this testimonial'
        ),
        'public' => 'true',
        'hierarchical' => false,
        'show_in_menu' => true,
        'menu_icon' => 'dashicons-cloud',
        'menu_position' => 20,
        'supports' => array(
            'title',
            'thumbnail',
            'editor',
            'categories'
        )
    ));
}

add_action('init', 'mademoiselle_create_testimonials');

function mademoiselle_init_sidebar() {
    register_sidebar(array(
        'name' => __('Primary Sidebar.'),
        'id' => 'primary',
        'before_widget' => '<div id="%1$s" class="widget %2$s mb-4">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
}

add_action('widgets_init', 'mademoiselle_init_sidebar');

require get_template_directory() . '/inc/widgets.php';
require get_template_directory() . '/inc/options.php';
