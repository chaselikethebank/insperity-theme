<?php 
/*
Plugin Name: Inpserity Client Testimonial CPT
Plugin URI:
Description: Add a Client's Testimonial to the site.
Version: 1.0
Author: Chase DeMaster
License: BM.Tech
License: URI:http://buildmacro.tech
*/
defined( 'ABSPATH' ) or die();

function create_testimonial_cpt() {

	$labels = array(
		'name' => _x( 'Testimonials', 'Post Type General Name', 'textdomain' ),
		'singular_name' => _x( 'Testimonial', 'Post Type Singular Name', 'textdomain' ),
		'menu_name' => _x( 'Testimonials', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar' => _x( 'Testimonial', 'Add New on Toolbar', 'textdomain' ),
		'archives' => __( 'Testimonial Archives', 'textdomain' ),
		'attributes' => __( 'Testimonial Attributes', 'textdomain' ),
		'parent_item_colon' => __( 'Parent Testimonial:', 'textdomain' ),
		'all_items' => __( 'All Testimonials', 'textdomain' ),
		'add_new_item' => __( 'Add New Testimonial', 'textdomain' ),
		'add_new' => __( 'Add New', 'textdomain' ),
		'new_item' => __( 'New Testimonial', 'textdomain' ),
		'edit_item' => __( 'Edit Testimonial', 'textdomain' ),
		'update_item' => __( 'Update Testimonial', 'textdomain' ),
		'view_item' => __( 'View Testimonial', 'textdomain' ),
		'view_items' => __( 'View Testimonials', 'textdomain' ),
		'search_items' => __( 'Search Testimonial', 'textdomain' ),
		'not_found' => __( 'Not found', 'textdomain' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
		'featured_image' => __( 'Featured Image', 'textdomain' ),
		'set_featured_image' => __( 'Set featured image', 'textdomain' ),
		'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
		'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
		'insert_into_item' => __( 'Insert into Testimonial', 'textdomain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Testimonial', 'textdomain' ),
		'items_list' => __( 'Testimonials list', 'textdomain' ),
		'items_list_navigation' => __( 'Testimonials list navigation', 'textdomain' ),
		'filter_items_list' => __( 'Filter Testimonials list', 'textdomain' ),
	);
	$args = array(
		'label' => __( 'Testimonial', 'textdomain' ),
		'description' => __( 'Client Testimonial', 'textdomain' ),
		'labels' => $labels,
		'menu_icon' => '',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'author', 'comments', 'trackbacks', 'page-attributes', 'post-formats', 'custom-fields'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'testimonial', $args );

}
add_action( 'init', 'create_testimonial_cpt', 0 );

add_action('init', 'insperity_client_testimonial_cpt', 0 );
function insperity_client_testimonial_cpt() {
    register_post_type( 'testimonial', 
    array(
        'labels' => array(
            'name' => __('Testimonial'),
            'singular_name' => __('Testimonial'),
            'add_new' => ('Add New'),
            'add_new_item' => ('Add New Testimonial'),
            'edit_item' => ( 'Edit Testimonial'),
            'view_item' => ('View Testimonial'),
            'view_items' => ('View Testimonials'),
            'search_item' => ('Search Testimonial'),
            'not_found' => ('No Testimonias Found'),
            'not_found_in_trash' => ('No Testimonias Found in the trash'),
            'all_items' => ( 'All Testimonials'),
            'archives' => ( 'Testimonial Archives'),
            'insert_into_item' => ( 'Insert into Testimonial'),
            'upload_to_this_item' => ( 'Upload to this Testimonial'),
            'filter_items_list' => ( 'Filter Testimonial list'),
            'items_list_navigation' => ( 'Testimonial list navigation'),
            'items_list' => ( 'Testimonial list'),
            'items_published' => ( 'Testimonials published'),
            'items_published_privately' => ( 'Testimonials published privately'),
            'items_reverted_to_draft' => ( 'Testimonials reverted to draft'),
            'items_scheduled' => ( 'Testimonials scheduled'),
            'items_updated' => ( 'Testimonials updated'),

        ),
        'public' => true, 
        'has_archive' => true,
        'publicly_queryable' => true, 
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_rest' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'revisions', 'custom-fields', 'revisions'),
        'can_export' => true
    ));
}


// add event date field to events post type
function add_post_meta_boxes() {
    add_meta_box(
        "post_metadata_events_post", // div id containing rendered fields
        "Event Date", // section heading displayed as text
        "post_meta_box_events_post", // callback function to render fields
        "event", // name of post type on which to render fields
        "side", // location on the screen
        "low" // placement priority
    );
}
add_action( "admin_init", "add_post_meta_boxes" );

// save field value
function save_post_meta_boxes(){
    global $post;
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return;
    }
    // if ( get_post_status( $post->ID ) === 'auto-draft' ) {
    //     return;
    // }
    update_post_meta( $post->ID, "_event_date", sanitize_text_field( $_POST[ "_event_date" ] ) );
}
add_action( 'save_post', 'save_post_meta_boxes' );

// callback function to render fields
function post_meta_box_events_post(){
    global $post;
    $custom = get_post_custom( $post->ID );
    $advertisingCategory = $custom[ "_event_date" ][ 0 ];
    echo "<input type=\"date\" name=\"_event_date\" value=\"".$advertisingCategory."\" placeholder=\"Event Date\">";
}

// shortcode 

add_shortcode('testimonials-list', 'client_testimonials');
function client_testimonials(){
    global $post;
    $args = array(
        'post_type'=>'testimonial', 
        'post_status'=>'publish', 
        'posts_per_page'=>8, 
        'orderby'=>'meta_value',
        // 'meta_key' => '_event_date',
        'order'=>'ASC'
    );
    $query = new WP_Query($args);

    $content = '<ul>';
    if($query->have_posts()):
		while($query->have_posts()): $query->the_post();


            // trash event if old
            $exp_date = get_post_meta(get_the_ID(), '_event_date', true);
            // set the correct timezone
            date_default_timezone_set('America/New_York');
            $today = new DateTime();
            if($exp_date < $today->format('Y-m-d h:i:sa')){
                // Update post
                $current_post = get_post( get_the_ID(), 'ARRAY_A' );
                $current_post['post_status'] = 'trash';
                wp_update_post($current_post);
            }


            // display event
            $content .= '<li><a href="'.get_the_permalink().'">'. get_the_title() .'</a> - '.date_format(date_create(get_post_meta($post->ID, '_event_date', true)), 'jS F').'</li>'; 
        endwhile;
    else: 
        _e('Sorry, nothing to display.', 'vicodemedia');
    endif;
    $content .= '</ul>';

    return $content;
}