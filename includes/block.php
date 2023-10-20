<?php

function wpPortfolio_custom_block(){
    if(function_exists('acf_register_block_type')){
        acf_register_block_type(array(
            'name'      => 'wpPortfolio-about-banner',
                    'title'      => 'Project Block',
                    'render_template' => 'templates/blocks/block-project-banner.php',
                    'category'    => 'common',
                    'icon'      => 'admin-comments',
                    'mode'      => 'edit'
        ));
    
    }
}

add_action('acf/init','wpPortfolio_custom_block');