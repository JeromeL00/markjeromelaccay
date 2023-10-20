<?php

function wpPortfolio_custom_post() {

    $wpPortfolio_label = array (
        'name'          => __('Add Portfolio Post', 'textdomain'),
        'singular_name' => __('The Post', 'textdomain'),
        'add_new'       => __('Add Portfolio Post', 'textdomain'),
        'add_new_item'  => __('Add New Post', 'textdomain'),
        'edit_item'     => __('Edit Portfolio Post', 'textdomain'),
        'all_items'     => __('Portfolio Post', 'textdomain')
    );
    $wpPortfolio_args = array (
        'labels'        => $wpPortfolio_label,
        'public'        => true,
        'capability_type' => 'post',
        'show_ui'       => true,
        'taxonomies'    => array('post_tag', 'category'),
        'supports'      => array('title', 'editor', 'thumbnail', 'excerpt'),
    );
    register_post_type('wpPortfolio', $wpPortfolio_args); 
}

add_action('init', 'wpPortfolio_custom_post');