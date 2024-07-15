<?php
// Custom Post Type
function my_first_post_type() {
    $args = array(
        'labels' => array(
            'name' => 'Cars',
            'singular_name' => 'Car',
        ),
        'public' => true, // Ensure the post type is publicly accessible
        'menu_icon' => 'dashicons-car',
        'hierarchical' => false, // Set to true if the post type is hierarchical (like pages)
        'supports' => array('title', 'editor', 'thumbnail') // Add other supports as needed
    );

    register_post_type('cars', $args);
}
add_action('init', 'my_first_post_type');

// Custom Taxonomy
function my_first_taxonomy() {
    $args = array(
        'labels' => array(
            'name' => 'Brands',
            'singular_name' => 'Brand',
        ),
        'public' => true, // Ensure the taxonomy is publicly accessible
        'hierarchical' => true, // Set to false if the taxonomy should behave like tags
    );

    register_taxonomy('brands', array('cars'), $args);
}
add_action('init', 'my_first_taxonomy');
?>