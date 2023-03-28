<?php 
/*
Plugin Name: Inpserity Client Testimonial CPT
Plugin URI:
Description: Add CPT Client Testimonial to site.
Version: 1.0
Author: Chase DeMaster
License: BM.Tech
License: URI:http://buildmacro.tech
*/
add_action('init', 'insperity_client_testimonial_cpt', 0 );

function insperity_client_testimonial_cpt() {
    register_post_type( 'testimonial', 
    array(
        'labels' => array(
            'name' => __('Testimonial'),
            'singular_name' => __('Testimonial'),
            'title' => ('Testimonial'),
        ),
        'public' => true, 
        'has_archive' => true
    ));
}