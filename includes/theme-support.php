<?php 

function wpPortfolio_theme_support(){
    add_theme_support('post-thumbnails');
    add_image_size('thumbnails-project', 250, 150, true);
    add_image_size('banner-project', 1640, 560, true);

    add_theme_support( 'custom-logo', 
        array(
            'height'      => 250,
            'width'       => 250,
            'flex-width'  => true,
            'flex-height' => true,
        )
    );

    add_filter('wpcf7_autop_or_not', '__return_false'); // Contact Form 7 remove P tag
    add_filter('wpcf7_form_elements', function($content) {
        $content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);
    
        return $content;
    }); // Remove Span in Contact Form 7

    register_nav_menus(
        array(
            'header_menu' => __('header menu', 'text_domain')
        )
    );
    add_theme_support('menus');
    add_theme_support('post-thumbnails');

}

add_action('after_setup_theme', 'wpPortfolio_theme_support');
