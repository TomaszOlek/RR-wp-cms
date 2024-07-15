function my_first_post_type() {

    $args = array(
        'labels' => array(
            'name' => 'Cars',
            'singular_name' => 'Car',
        ),
        'menu_icon' => 'dashicons-car',
        <!-- 'hierarchical' => true,  -->
        <!-- true/false -->
        <!-- post/page type -->
    )

    register_post_type( 'cars', $args );
}
add_action( 'init', 'my_first_post_type' );


function my_first_taxonomy() {

    $args = array(
        'labels' => array(
            'name' => 'Brands',
            'singular_name' => 'Brand',
        ),
        'menu_icon' => 'dashicons-car',
        'hierarchical' => true, 
        <!-- true/false -->
        <!-- category/tag type -->
    )

    register_post_type( 'brands', array('cars'), $args );

}
add_action( 'init', 'my_first_taxonomy' );